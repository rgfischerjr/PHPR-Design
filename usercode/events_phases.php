<?php
class eventclass_phases  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeEdit' => true,
	'OnPageLoad' => true,
	'AfterEdit' => true,
	'BeforeShowList' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		 
	),
	'autoUpdateValue' => array(
		 
	),
	'uploadFolder' => array(
		 
	),
	'viewPluginInit' => array(
		 
	),
	'editPluginInit' => array(
		 
	) 
);
			}
		function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		/** PHASES — Before record updated (drop-in)
 *  Rules:
 *   - Admins: no restrictions
 *   - Non-admins (inline edit only): may edit ONLY the Started and Completed checkboxes and Notes
 *   - Blocks any other field change by non-admins on inline save
 *   - (Optional) auto-set phase status when completed_date is set/cleared (guarded)
 */

// ====== CONFIG: adjust to your schema ======
$completedField = "completed_date";  // the only field non-admins may change inline
$notesField    = "notes";          // optional; set only if this field exists in your table
// ===========================================

// Quick helpers
$isAdmin  = Security::isAdmin();
$isInline = $inline ? true : false;

// ----- 1) Enforce permissions for non-admins on inline edit -----
if (Security::isLoggedIn() && !$isAdmin && $isInline) {

    // Only allow the one whitelisted field to change.
    foreach ($values as $field => $newVal) {

        // Always allow the whitelisted field
        if ($field === $completedField || $field === $notesField) {
            continue;
        }

        // Compare to original value; block if anything else changes
        $oldVal = array_key_exists($field, $oldvalues) ? $oldvalues[$field] : null;

        // PHPR passes only posted fields in $values; treat missing same as unchanged
        if ($newVal !== $oldVal) {
            $message = "You may only update the Completed Date on this page.";
            return false; // cancel the update
        }
    }
}

// ----- 2) (Optional) normalize status when completed date changes -----
$completedWasProvided = array_key_exists($completedField, $values);
$completedOld         = $oldvalues[$completedField] ?? null;
$completedNew         = $completedWasProvided ? $values[$completedField] : $completedOld;
$completedChanged     = $completedWasProvided && ($completedNew !== $completedOld);

// If you have a status field, you can auto-tune it. Guard with array_key_exists so we don’t touch unknown schemas.
if ($completedChanged && array_key_exists($statusField, $values)) {

    // If a date is set, mark as Done; if cleared, mark as In Progress (adjust to your wording)
    if (!empty($completedNew)) {
        $values[$statusField] = "Done";
    } else {
        $values[$statusField] = "In Progress";
    }
}

// Return true to proceed with the update
return true;

		;
		return true;
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		/** PHASES — After record updated (debug + force recalc once)
 *  - Logs what happened to PHP error_log
 *  - Resolves project_id robustly
 *  - Tries to call your recalc function (forced once for test)
 *  - Optional: auto-completes open subphases when a phase completes
 */

// ====== CONFIG: adjust if your field names differ ======
$phasePkField        = "phase_id";
$projectFkField      = "project_id";
$completedDateField  = "completed_date";
$dueDateField        = "due_date"; // kept as a possible trigger, not required
$recalcTriggerFields = [ "completed_date", "due_date" ];
$autoCompleteSubs    = true;
$DEBUG               = true;   // <-- turn ON for now; we’ll turn it off after it works
// =======================================================

// --- logger
$log = function($msg) use ($DEBUG) {
    if ($DEBUG) error_log("[PHASES AfterUpdate] ".$msg);
};

// --- include user functions where recalc_* should live
$uc = getabspath("include/usercode.php");
if (file_exists($uc)) { require_once($uc); $log("usercode.php included"); }
else { $log("usercode.php NOT found at ".$uc); }

// --- connection (best-effort)
$conn = null;
if (isset($pageObject) && method_exists($pageObject, 'getConnection')) {
    $conn = $pageObject->getConnection();
}
if (!$conn && class_exists("DB")) {
    // Fallback to table-bound connection if available
    if (method_exists("DB","ConnectionByTable")) {
        $conn = DB::ConnectionByTable("phases");
        $log("ConnectionByTable used");
    } else {
        $log("No connection helper; SQL will use DB::* static");
    }
}
$log("conn=".($conn ? "OK" : "NULL"));

// --- helper: did a field change in this update?
$fieldChanged = function($field) use ($values, $oldvalues) {
    if (!$field) return false;
    if (!array_key_exists($field, $values)) return false;
    $old = $oldvalues[$field] ?? null;
    $new = $values[$field];
    return $new !== $old;
};

// 1) trigger detection (for info)
$shouldRecalc = false;
foreach ($recalcTriggerFields as $f) {
    if ($fieldChanged($f)) { $shouldRecalc = true; $log("trigger changed: ".$f); break; }
}

// 2) resolve ids
$phaseId = (int)(
    $keys[$phasePkField]      ?? 
    $values[$phasePkField]    ?? 
    $oldvalues[$phasePkField] ?? 0
);
$log("phaseId=".$phaseId);

$projectId = (int)(
    $values[$projectFkField]    ?? 
    $oldvalues[$projectFkField] ?? 0
);
if (!$projectId && $phaseId) {
    $sql = "SELECT ".$projectFkField." AS pid FROM phases WHERE ".$phasePkField."=".$phaseId;
    $log("lookup projectId: ".$sql);
    // Try via $conn first; fallback to DB::Query
    $rs = $conn ? $conn->query($sql) : DB::Query($sql);
    if ($rs) {
        $row = method_exists($rs,'fetchAssoc') ? $rs->fetchAssoc() : db_fetch_array($rs);
        if ($row && isset($row["pid"])) $projectId = (int)$row["pid"];
    }
}
$log("projectId=".$projectId);

// 3) if phase just completed, optionally close any open subphases in this phase
if ($autoCompleteSubs && $fieldChanged($completedDateField)) {
    $newCompleted = $values[$completedDateField] ?? null;
    $log("completed_date changed to ".(string)$newCompleted);
    if (!empty($newCompleted) && $phaseId > 0) {
        $escapedDate = $conn ? $conn->prepareString($newCompleted) : db_prepare_string($newCompleted);
        $sql = "
            UPDATE subphase_status st
            JOIN subphases s ON s.subphase_id = st.subphase_id
            SET
                st.complete_checked = 1,
                st.complete_date    = COALESCE(st.complete_date, ".$escapedDate.")
            WHERE s.phase_id = ".$phaseId."
              AND (st.complete_checked IS NULL OR st.complete_checked = 0)
        ";
        $log("auto-complete subphases SQL: ".$sql);
        DB::Exec($sql);
    }
}

// 4) choose a recalc function and call it (FORCE once for test)
$recalcFns = [
    'recalc_phase_due_dates',
    'recalc_project_schedule',
    'recalc_design_schedule'
];

$foundFn = null;
foreach ($recalcFns as $fn) {
    if (function_exists($fn)) { $foundFn = $fn; break; }
}
$log("recalc fn found: ".($foundFn ?: "NONE"));

if ($projectId > 0 && $foundFn) {
    // For test: force-call once so we can see if the function works at all
    $log("FORCE calling ".$foundFn."(".$projectId.")");
    $foundFn($projectId);
} else {
    $log("SKIP force-call: projectId=".$projectId." foundFn=".($foundFn?1:0));
}

// Also log whether the trigger logic *would* have called it normally
$log("shouldRecalc=".($shouldRecalc?1:0));

// DONE
return;

		;
		
	}

	function BeforeShowList( &$xt, &$templatefile, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

// If NOT an admin, hide full edit/add/delete, keep inline edit
if ( Security::isLoggedIn() && !Security::isAdmin() ) {
    $xt->assign("edit_link", false);        // hides full Edit icon
    $xt->assign("add_link", false);         // hides Add button (optional)
    $xt->assign("inlineadd_link", false);   // hides Inline Add (optional)
    $xt->assign("delete_link", false);      // hides Delete (optional)
    $xt->assign("inlineedit_link", true);   // keep inline edit available
}

		;
		
	}
		

}


?>