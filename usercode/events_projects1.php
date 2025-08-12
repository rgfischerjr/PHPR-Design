<?php
class eventclass_projects1  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'AfterAdd' => true,
	'BeforeQueryList' => true,
	'OnPageLoad' => true,
	'BeforeMoveNextList' => true,
	'BeforeShowList' => true,
	'BeforeProcessList' => true,
	'AfterEdit' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		'project_name' => array(
			'view' => true 
		),
		'designer_name' => array(
			'view' => true 
		),
		'phase_label' => array(
			'view' => true 
		),
		'due_date' => array(
			'view' => true 
		),
		'days_until_due' => array(
			'view' => true 
		) 
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
		function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		@require_once(getabspath("include/usercode.php"));

create_project_scaffold($keys["project_id"], $values["contract_date"]);
recalc_phase_due_dates($keys["project_id"]);  // uses the cleaned, calendar-based function we set up

		;
		
	}

	function BeforeQueryList( &$strSQL, &$strWhereClause, &$strOrderBy, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

// Restrict by current user if they’re a designer
// --- Role & scope handling ---
// Restrict by current user if they’re a designer, or when scope=mine.
// Persist choice in session.

return true;

//require_once(getabspath("include/usercode.php"));

if (!function_exists('db_lookup')) {
    function db_lookup($sql) {
        $rs = CustomQuery($sql);
        if (!$rs) return null;
        $row = db_fetch_array($rs);
        if ($row === false) return null;
        foreach ($row as $v) return $v; // first column
        return null;
    }
}



// --- Role, scope, and designer filter handling ---
global $cUserName;

// Lookup current user's role
$role = db_lookup("SELECT role FROM users WHERE username = ".db_prepare_string($cUserName));

// Read scope from URL (?scope=mine|all) or session; default: designers->mine, admins->all
$scope = postvalue("scope");
if ($scope !== "mine" && $scope !== "all") {
    $scope = @$_SESSION["dash_scope"];
}
if ($scope !== "mine" && $scope !== "all") {
    $scope = ($role === "designer") ? "mine" : "all";
}
$_SESSION["dash_scope"] = $scope;

// Designer filter (admin only): ?designer_id=#
$designerId = postvalue("designer_id");
if ($designerId === null || $designerId === "") {
    $designerId = @$_SESSION["dash_designer_id"];
}

// Apply restrictions
if ($role === "designer") {
    // Designers always see only their own, regardless of scope/designer_id
    $strWhereClause = whereAdd($strWhereClause, "u.username = ".db_prepare_string($cUserName));
    // Clear any admin-only selection so it doesn't persist for designers
    $_SESSION["dash_designer_id"] = null;
} else {
    // Admin path
    if ($scope === "mine") {
        // Mine = current admin's own projects (if they also design); otherwise this may be empty
        $strWhereClause = whereAdd($strWhereClause, "u.username = ".db_prepare_string($cUserName));
        // When in "mine", ignore designer_id
        $_SESSION["dash_designer_id"] = null;
    } else {
        // scope=all: optionally filter by specific designer if provided
        if (is_numeric($designerId) && intval($designerId) > 0) {
            $strWhereClause = whereAdd($strWhereClause, "u.user_id = ".intval($designerId));
            $_SESSION["dash_designer_id"] = intval($designerId);
        } else {
            $_SESSION["dash_designer_id"] = null;
        }
    }
}

// Keep sort stable
$strOrderBy = "ORDER BY u.full_name, ph.due_date";

		;
		
	}

	function BeforeMoveNextList( &$data, &$row, &$record, $recordId, $pageObject ) {
		// Persist row state on initial render (and every refresh)
$started   = ($data["start_checked"] == 1 || $data["start_checked"] === '1');
$completed = ($data["completed_checked"] == 1 || $data["completed_checked"] === '1');

// 1) Add data-attrs the JS can read later
$attrs = 'data-started="'.($started?1:0).'" data-completed="'.($completed?1:0).'"';
if (!isset($record["rowattrs"]) || $record["rowattrs"] === '') {
    $record["rowattrs"] = $attrs;
} elseif (strpos($record["rowattrs"], 'class="') !== false) {
    // append attrs safely
    $record["rowattrs"] = preg_replace('/class="([^"]*)"/', 'class="$1" '.$attrs, $record["rowattrs"], 1);
} else {
    $record["rowattrs"] .= ' '.$attrs;
}

// 2) Inline color so it wins over zebra on first paint
if ($completed) {
    $record["css"] = "background-color:#c8e6c9 !important;";
} elseif ($started) {
    $record["css"] = "background-color:#e8f5e9 !important;";
} else {
    $record["css"] = "";
}

		;
		
	}

	function BeforeShowList( &$xt, &$templatefile, $pageObject ) {
		// Clear anything that was echoed earlier (outside the grid)
if (defined("DASH_OB")) {
    ob_end_clean();
}


global $cUserName;

$role        = db_lookup("SELECT role FROM users WHERE username=".db_prepare_string($cUserName));
$scope       = $_SESSION["dash_scope"] ?? "";
$selDesigner = isset($_SESSION["dash_designer_id"]) ? (int)$_SESSION["dash_designer_id"] : 0;
$daysAhead   = get_dashboard_days_ahead();

// Build WHERE parts to match filters (no row loops / no echoes per row)
$whereParts = [];
if ($role === "designer" || $scope === "mine") {
    $whereParts[] = "u.username = ".db_prepare_string($cUserName);
} elseif ($selDesigner > 0) {
    $whereParts[] = "u.user_id = ".$selDesigner;
}
$from  = " FROM phases ph
           JOIN projects p ON p.project_id = ph.project_id
           JOIN users    u ON u.user_id    = p.designer_id ";
$where = $whereParts ? (" WHERE ".implode(" AND ", $whereParts)) : "";

// Counts for legend
$overdue  = db_lookup("SELECT COUNT(*)".$from.$where." AND ph.due_date < CURDATE()");
$today    = db_lookup("SELECT COUNT(*)".$from.$where." AND ph.due_date = CURDATE()");
$upcoming = db_lookup("SELECT COUNT(*)".$from.$where."
                       AND ph.due_date > CURDATE()
                       AND ph.due_date <= DATE_ADD(CURDATE(), INTERVAL ".$daysAhead." DAY)");

// Hidden state for JS
echo "<span id='dash-role'     style='display:none'>".runner_htmlspecialchars($role)."</span>";
echo "<span id='dash-scope'    style='display:none'>".runner_htmlspecialchars($scope)."</span>";
echo "<span id='dash-designer' style='display:none'>".$selDesigner."</span>";

// Legend
echo "
<div id='dash-legend' style='font-size:13px;margin:8px 0 12px 0;'>
  <span style='display:inline-block;padding:6px 10px;border-radius:6px;background:#ffcccc;margin-right:8px;'>
    <strong>Overdue:</strong> ".(int)$overdue."
  </span>
  <span style='display:inline-block;padding:6px 10px;border-radius:6px;background:#fff3cd;margin-right:8px;'>
    <strong>Today:</strong> ".(int)$today."
  </span>
  <span style='display:inline-block;padding:6px 10px;border-radius:6px;background:#ffe8c6;'>
    <strong>Next ".$daysAhead." days:</strong> ".(int)$upcoming."
  </span>
</div>
";

return true;

		;
		
	}

	function BeforeProcessList( $pageObject ) {
		// Start output buffering to swallow any stray echo/print before display
if (!defined("DASH_OB")) {
    define("DASH_OB", 1);
    ob_start();
}
return true;
		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

@require_once(getabspath("include/usercode.php"));
recalc_phase_due_dates((int)$keys["project_id"]);

		;
		
	}
	public function custom_project_name_vfview( $value, $data ) {
	$link = GetTableLink("projects","view","?editid1=".$data["project_id"]);
echo "<span class='ds-project'><a href=\"".$link."\">".runner_htmlspecialchars($data["project_name"])."</a></span>";
;
return $value;
}

public function custom_designer_name_vfview( $value, $data ) {
	echo "<span class='ds-designer'>".runner_htmlspecialchars($data["designer_name"])."</span>";;
return $value;
}

public function custom_phase_label_vfview( $value, $data ) {
	$code  = $data["phase_code"];  // TF, SD, QA_QC1, DD, QA_QC2, PP
$label = $data["phase_label"]; // already in your query
echo "<span class='ds-badge badge-".runner_htmlspecialchars($code)."'>".runner_htmlspecialchars($label)."</span>";
;
return $value;
}

public function custom_due_date_vfview( $value, $data ) {
	$due  = $data["due_date"];
$days = intval($data["days_until_due"]); // negative = overdue; 0 = today; >0 = upcoming

// Pretty date (e.g., Mon 08/11/2025)
$pretty = date("D m/d/Y", strtotime($due));

if (strtotime($due) < strtotime(date("Y-m-d"))) {
    $pillClass = "overdue"; $pillText = "Overdue ".abs($days);
} elseif ($days === 0) {
    $pillClass = "today";   $pillText = "Today";
} else {
    $pillClass = "soon";    $pillText = $days." days";
}

echo "<span class='ds-date' title='".runner_htmlspecialchars($due)."'>".$pretty."</span>";
echo " <span class='ds-pill ".$pillClass."'>".$pillText."</span>";
;
return $value;
}

public function custom_days_until_due_vfview( $value, $data ) {
	echo "";
;
return $value;
}	

}


?>