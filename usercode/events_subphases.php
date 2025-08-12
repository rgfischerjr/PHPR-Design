<?php
class eventclass_subphases  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeAdd' => true,
	'BeforeShowList' => true,
	'OnPageLoad' => true,
	'BeforeEdit' => true,
	'AfterAdd' => true,
	'AfterEdit' => true,
	'BeforeMoveNextList' => true 
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
		function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		function isChecked($v){ return isset($v) && ($v===1 || $v==='1' || $v===true || $v==='on' || $v==='ON'); }

if (empty($values["phase_id"]) && !empty($_SESSION["phases_masterkey1"])) $values["phase_id"] = (int)$_SESSION["phases_masterkey1"];
if (empty($values["project_id"])) {
    if (!empty($_SESSION["phases_masterkey2"]))        $values["project_id"] = (int)$_SESSION["phases_masterkey2"];
    elseif (!empty($_SESSION["projects_masterkey1"]))  $values["project_id"] = (int)$_SESSION["projects_masterkey1"];
    elseif (!empty($values["phase_id"])) {
        $rs = DB::Query("SELECT project_id FROM phases WHERE phase_id=".(int)$values["phase_id"]);
        if ($rs && ($row=$rs->fetchAssoc())) $values["project_id"] = (int)$row["project_id"];
    }
}
if (empty($values["phase_id"]) || empty($values["project_id"])) { $message="Missing project/phase context for subphase."; return false; }

$today = date('Y-m-d');
$values["start_date"]     = isChecked($values["start_checked"] ?? null)     ? $today : null;
$values["completed_date"] = isChecked($values["completed_checked"] ?? null) ? $today : null;

return true;

		;
		return true;
	}

	function BeforeShowList( &$xt, &$templatefile, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

function BeforeShowList(&$xt, &$templatefile, $pageObject)
{
    // Hide only when Subphases is shown under Phases (the nested inline case)
    if ($pageObject->masterTable == "phases") {
        $pageObject->hideField("project_id");
        $pageObject->hideField("phase_id");
    }
}

		;
		
	}

	function BeforeEdit( &$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject ) {
		function isChecked($v){ return isset($v) && ($v===1 || $v==='1' || $v===true || $v==='on' || $v==='ON'); }

$today = date('Y-m-d');

if (array_key_exists("start_checked", $values)) {
    $values["start_date"] = isChecked($values["start_checked"]) ? $today : null;
}
if (array_key_exists("completed_checked", $values)) {
    $values["completed_date"] = isChecked($values["completed_checked"]) ? $today : null;
}

return true;

		;
		return true;
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.

function isChecked($v){
    return isset($v) && ($v===1 || $v==='1' || $v===true || $v==='on' || $v==='ON');
}

function AfterAdd(&$values, &$keys, $inline, $pageObject)
{
    // Build expressions: CURDATE() when checked, NULL when unchecked
    $startExpr     = isChecked($values["start_checked"] ?? null)     ? "CURDATE()" : "NULL";
    $completedExpr = isChecked($values["completed_checked"] ?? null) ? "CURDATE()" : "NULL";

    // Persist directly (DATE columns): update the just-inserted row
    $sql = "UPDATE ".AddTableWrappers("subphases")." SET "
         . AddFieldWrappers("start_date")."=".$startExpr.", "
         . AddFieldWrappers("completed_date")."=".$completedExpr." "
         . "WHERE ".AddFieldWrappers("subphase_id")."=".(int)$keys["subphase_id"];

    DB::Exec($sql);
}

		;
		
	}

	function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{
    // Only touch fields the user actually posted; otherwise leave them as-is
    $set = [];

    if (array_key_exists("start_checked", $values)) {
        $startExpr = isChecked($values["start_checked"]) ? "CURDATE()" : "NULL";
        $set[] = AddFieldWrappers("start_date")."=".$startExpr;
    }
    if (array_key_exists("completed_checked", $values)) {
        $completedExpr = isChecked($values["completed_checked"]) ? "CURDATE()" : "NULL";
        $set[] = AddFieldWrappers("completed_date")."=".$completedExpr;
    }

    if (!empty($set)) {
        $sql = "UPDATE ".AddTableWrappers("subphases")." SET ".implode(", ", $set)
             . " WHERE ".AddFieldWrappers("subphase_id")."=".(int)$keys["subphase_id"];
        DB::Exec($sql);
    }
}



		;
		
	}

	function BeforeMoveNextList( &$data, &$row, &$record, $recordId, $pageObject ) {
		$started   = ($data["start_checked"] == 1 || $data["start_checked"] === '1');
$completed = ($data["completed_checked"] == 1 || $data["completed_checked"] === '1');

$attrs = 'data-started="'.($started?1:0).'" data-completed="'.($completed?1:0).'"';
if (!isset($record["rowattrs"]) || $record["rowattrs"] === '') {
    $record["rowattrs"] = $attrs;
} elseif (strpos($record["rowattrs"], 'class="') !== false) {
    $record["rowattrs"] = preg_replace('/class="([^"]*)"/', 'class="$1" '.$attrs, $record["rowattrs"], 1);
} else {
    $record["rowattrs"] .= ' '.$attrs;
}

if ($completed)      { $record["css"] = "background-color:#c8e6c9 !important;"; }
elseif ($started)    { $record["css"] = "background-color:#e8f5e9 !important;"; }
else                 { $record["css"] = ""; }

		;
		
	}
		

}


?>