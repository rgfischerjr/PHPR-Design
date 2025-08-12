<?php
// phase_defaults.php
include("include/dbcommon.php");

header("Content-Type: application/json; charset=utf-8");

// IMPORTANT: only allow logged-in users; you can restrict to admin here if you prefer
if( !Security::isLoggedIn() ) {
  http_response_code(401);
  echo json_encode(["error"=>"Unauthorized"]);
  exit;
}

$rs = DB::Query("
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

$out = [];
while( $data = $rs->fetchAssoc() ) $out[] = $data;
echo json_encode($out);
