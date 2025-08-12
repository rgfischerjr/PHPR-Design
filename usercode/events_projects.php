<?php
class eventclass_projects  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'AfterAdd' => true,
	'AfterEdit' => true,
	'OnPageLoad' => true,
	'BeforeAdd' => true,
	'BeforeShowAdd' => true 
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
		'contract_date' => array(
			'edit' => true 
		) 
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
		function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		@require_once(getabspath("include/usercode.php"));
$pid = (int)$keys["project_id"];
$contract = $values["contract_date"];

// Build override map for scaffold (long only)
$dur = null;
if (isset($_SESSION["add_phase_long"]) && is_array($_SESSION["add_phase_long"])) {
    $dur = [];
    foreach ($_SESSION["add_phase_long"] as $code => $l) {
        $dur[$code] = ["long" => (int)$l];
    }
}

// Create phases with overrides applied at insert time
create_project_scaffold($pid, $contract, $dur);

// Recalculate all due dates with business-day logic
recalc_phase_due_dates($pid);

// Cleanup
unset($_SESSION["add_phase_long"]);

		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

//@require_once(getabspath("include/usercode.php"));

if (!empty($keys["project_id"]) && function_exists('recalc_phase_due_dates')) {
    recalc_phase_due_dates((int)$keys["project_id"]);
}

		;
		
	}

	function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		// ---- audit fields ----
global $cUserName;
$uid = (int)db_lookup("SELECT user_id FROM users WHERE username=".db_prepare_string($cUserName)." LIMIT 1");
if (!$uid) { $uid = (int)db_lookup("SELECT MIN(user_id) FROM users"); if (!$uid){ $message="No users exist. Add a user first."; return false; } }
$values["created_by"] = $uid;
if (empty($values["created_at"])) $values["created_at"] = NOW();

// ---- durations (admin only) ----
$role = strtolower((string)db_lookup("SELECT role FROM users WHERE username=".db_prepare_string($cUserName)." LIMIT 1"));
$longIn = postvalue("phase_long");

unset($_SESSION["add_phase_long"]);
if ($role === "admin" && is_array($longIn)) {
    $codes = ["TF","SD","QA_QC1","DD","QA_QC2","PP"];
    $cleanLong = [];
    foreach ($codes as $c){
        $l = isset($longIn[$c]) ? (int)$longIn[$c] : 0;
        $cleanLong[$c] = $l > 0 ? $l : null;
    }
    foreach ($codes as $c){
        if ($cleanLong[$c] === null){
            $message = "Please enter a valid Long duration for ".$c.".";
            return false;
        }
    }
    $_SESSION["add_phase_long"] = $cleanLong;
} else {
    $_POST["phase_long"] = null; // ignore tampering
}
return true;

		;
		return true;
	}

	function BeforeShowAdd( &$xt, &$templatefile, $pageObject ) {
		global $cUserName;
$role = strtolower((string)db_lookup("SELECT role FROM users WHERE username=".db_prepare_string($cUserName)." LIMIT 1"));

$rows = [];
if ($role === "admin") {
  $rs = CustomQuery("
    SELECT phase_code,
           CASE phase_code
             WHEN 'TF' THEN 'Test Fit'
             WHEN 'SD' THEN 'Schematic Design'
             WHEN 'QA_QC1' THEN 'QA/QC1'
             WHEN 'DD' THEN 'Design Development'
             WHEN 'QA_QC2' THEN 'QA/QC2'
             WHEN 'PP' THEN 'P&P'
           END AS label,
           default_long_duration AS l,
           sequence
    FROM phase_catalog
    ORDER BY sequence
  ");
  while($r = db_fetch_array($rs)) $rows[] = $r;
}

echo '<script>window.__isAdmin='.($role==='admin'?'true':'false').';window.__phaseDefaults='.json_encode($rows).';</script>';
return true;

echo "<!-- role=".(isset($role)?$role:'?')." defaults_count=".(isset($rows)?count($rows):0)." -->";
return true;

		;
		
	}
	public function default_contract_date_efedit(  ) {
	$defaultValue = now();
return $defaultValue;
}	

}


?>