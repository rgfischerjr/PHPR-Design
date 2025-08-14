<?php
/**
 * User-defined helper functions for Design Project workflow
 * Place this file in \projectname\include\usercode.php
 * Will be auto-loaded if added via Style → Custom Files → Include
 */

// --- Simple app logger: writes to /tmp/phase_debug.log in your app root
if (!function_exists('app_log')) {
    function app_log($msg) {
        $file = getabspath("tmp/phase_debug.log");  // tmp is writable in PHPR
        $line = "[".date('Y-m-d H:i:s')."] ".$msg."\r\n";
        @file_put_contents($file, $line, FILE_APPEND | LOCK_EX);
    }
}
// Send PHP errors to /tmp/php_errors.log (only while debugging)
@ini_set('log_errors', 1);
@ini_set('display_errors', 0);
@ini_set('error_log', getabspath("tmp/php_errors.log"));



/**
 * Create all default phases, subphases, and status records for a new project.
 *
 * @param int    $projectId
 * @param string $contractDate  Date string in 'YYYY-MM-DD'
 */
// $dur optional map: ["TF"=>["long"=>7], ...]  (long-only overrides)
// $dur optional map: ["TF"=>["long"=>7], ...]
// $dur optional map: ["TF"=>["long"=>7], ...]
function create_project_scaffold($projectId, $contractDate, $dur = null)
{
    $projectId = (int)$projectId;

    // Build derived table for overrides if provided (long only)
    $durJoin = "";
    $useDur  = false;
    if (is_array($dur) && count($dur)) {
        $rows = [];
        foreach ($dur as $code => $arr) {
            $l = isset($arr["long"]) ? (int)$arr["long"] : "NULL";
            $rows[] = "SELECT ".db_prepare_string($code)." AS phase_code, ".$l." AS long_d";
        }
        if ($rows) {
            $durJoin = "LEFT JOIN (\n".implode("\nUNION ALL\n", $rows)."\n) AS dur ON dur.phase_code = pc.phase_code\n";
            $useDur  = true;
        }
    }

    // Insert phases (no short_duration column anymore)
    $sql = "
        INSERT INTO design_phases (project_id, phase_code, sequence, long_duration, due_date)
        SELECT
            ".$projectId.",
            pc.phase_code,
            pc.sequence,
            ".($useDur ? "COALESCE(dur.long_d, pc.default_long_duration)" : "pc.default_long_duration")." AS long_duration,
            c.cal_date AS due_date
        FROM design_phase_catalog pc
        ".$durJoin."
        JOIN (
            SELECT cal_date, ROW_NUMBER() OVER (ORDER BY cal_date) rn
            FROM calendar_dim
            WHERE is_workday = 1
              AND cal_date > DATE(".db_prepare_string($contractDate).")
        ) c
          ON c.rn = ".($useDur ? "COALESCE(dur.long_d, pc.default_long_duration)" : "pc.default_long_duration")."
        ORDER BY pc.sequence
    ";
    CustomQuery($sql);

    // Clone default subphases
    CustomQuery("
        INSERT INTO design_subphases (project_id, phase_id, subphase_name, sort_order, is_default)
        SELECT ph.project_id, ph.phase_id, ds.subphase_name, ds.sort_order, 1
        FROM design_phases ph
        JOIN design_default_subphases ds ON ds.phase_code = ph.phase_code
        WHERE ph.project_id = ".$projectId."
          AND ph.phase_code IN ('DSA','TF','SD','DD','PP')
        ORDER BY ph.phase_id, ds.sort_order
    ");

}



/**
 * Recalculate all due dates for a project’s phases based on business days
 * and existing contract_date and approval/submission dates.
 *
 * @param int $projectId
 */
// include/usercode.php
function recalc_phase_due_dates($projectId)
{
    $projectId = (int)$projectId;

    // --- load project + phases
    $r = CustomQuery("SELECT contract_date FROM design_projects WHERE project_id=".$projectId);
    $p = db_fetch_array($r);
    if (!$p) return;
    $contract = $p["contract_date"];

    $ph = [];
    $rs = CustomQuery("SELECT * FROM design_phases WHERE project_id=".$projectId." ORDER BY sequence");
    while ($row = db_fetch_array($rs)) $ph[$row["phase_code"]] = $row;
    foreach (["TF","SD","QA_QC1","DD","QA_QC2","PP"] as $code) if(!isset($ph[$code])) return;

    // --- helpers using calendar_dim ---
    // move FORWARD by N business days; EXCLUSIVE of start (first count is the next workday)
    $bdAddEx = function($startDate, $n){
        $n = (int)$n;
        if(!$startDate || $n<=0) return null;
        $q = "SELECT cal_date
              FROM calendar_dim
              WHERE is_workday=1 AND cal_date > ".db_prepare_string($startDate)."
              ORDER BY cal_date ASC
              LIMIT ".($n-1).",1";
        return db_lookup($q) ?: null;
    };
    // move BACK by N business days; EXCLUSIVE of start (don't count the start date)
    $bdSubEx = function($startDate, $n){
        $n = (int)$n;
        if(!$startDate || $n<=0) return null;
        $q = "SELECT cal_date
              FROM calendar_dim
              WHERE is_workday=1 AND cal_date < ".db_prepare_string($startDate)."
              ORDER BY cal_date DESC
              LIMIT ".($n-1).",1";
        return db_lookup($q) ?: null;
    };

    // pick the earlier of completed_date vs scheduled due_date (if completed earlier)
    $earlierOfCompleteOrDue = function($phase){
        if (!empty($phase["completed_date"]) && !empty($phase["due_date"]) && $phase["completed_date"] < $phase["due_date"]) {
            return $phase["completed_date"];
        }
        return $phase["due_date"]; // if no completion or completion later than due, use due
    };

    // ========== TF ==========
    $tf_due = $bdAddEx($contract, (int)$ph["TF"]["long_duration"]);
    if ($tf_due) {
        CustomQuery("UPDATE design_phases SET due_date=".db_prepare_string($tf_due)." WHERE phase_id=".(int)$ph["TF"]["phase_id"]);
        $ph["TF"]["due_date"] = $tf_due;
    }

    // ========== SD ==========
    $sd_start = $earlierOfCompleteOrDue($ph["TF"]);
    $sd_due   = $bdAddEx($sd_start, (int)$ph["SD"]["long_duration"]);
    if ($sd_due) {
        CustomQuery("UPDATE design_phases SET due_date=".db_prepare_string($sd_due)." WHERE phase_id=".(int)$ph["SD"]["phase_id"]);
        $ph["SD"]["due_date"] = $sd_due;
    }

    // ========== DD ==========
    $dd_start = $earlierOfCompleteOrDue($ph["SD"]);
    $dd_due   = $bdAddEx($dd_start, (int)$ph["DD"]["long_duration"]);
    if ($dd_due) {
        CustomQuery("UPDATE design_phases SET due_date=".db_prepare_string($dd_due)." WHERE phase_id=".(int)$ph["DD"]["phase_id"]);
        $ph["DD"]["due_date"] = $dd_due;
    }

    // ========== PP ==========
    // PP starts from DD completed if earlier than DD due
    $pp_start = $earlierOfCompleteOrDue($ph["DD"]);
    $pp_due   = $bdAddEx($pp_start, (int)$ph["PP"]["long_duration"]);
    if ($pp_due) {
        CustomQuery("UPDATE phases SET due_date=".db_prepare_string($pp_due)." WHERE phase_id=".(int)$ph["PP"]["phase_id"]);
        $ph["PP"]["due_date"] = $pp_due;
    }

    // ========== QA_QC1 ==========
    // Rule: QA_QC1 due = DD due − (QA_QC1 long) − 1 business day
    if (!empty($ph["DD"]["due_date"])) {
        $qa1_steps = (int)$ph["QA_QC1"]["long_duration"] + 1; // add the extra "-1 day"
        $qa1_due   = $bdSubEx($ph["DD"]["due_date"], $qa1_steps);
        if ($qa1_due) {
            CustomQuery("UPDATE design_phases SET due_date=".db_prepare_string($qa1_due)." WHERE phase_id=".(int)$ph["QA_QC1"]["phase_id"]);
            $ph["QA_QC1"]["due_date"] = $qa1_due;
        }
    }

    // ========== QA_QC2 ==========
    // Rule: QA_QC2 due = PP due − (QA_QC2 long) − 1 business day
    if (!empty($ph["PP"]["due_date"])) {
        $qa2_steps = (int)$ph["QA_QC2"]["long_duration"] + 1;
        $qa2_due   = $bdSubEx($ph["PP"]["due_date"], $qa2_steps);
        if ($qa2_due) {
            CustomQuery("UPDATE design_phases SET due_date=".db_prepare_string($qa2_due)." WHERE phase_id=".(int)$ph["QA_QC2"]["phase_id"]);
            $ph["QA_QC2"]["due_date"] = $qa2_due;
        }
    }
}


/**
 * Simple lookup helper to get a single value from the database.
 *
 * @param string $sql
 * @return mixed|null
 */
function db_lookup($sql)
{
    $rs = CustomQuery($sql);
    if (!$rs) return null;
    $row = db_fetch_array($rs);
    if ($row === false) return null;
    foreach ($row as $v) return $v; // return first column value
    return null;
}

function get_dashboard_days_ahead() {
    $val = db_lookup("SELECT CAST(setting_value AS SIGNED) AS v FROM design_settings WHERE setting_key='dashboard_days_ahead'");
    $n = (int)$val;
    if ($n <= 0) $n = 5;  // sensible default
    return $n;
}
