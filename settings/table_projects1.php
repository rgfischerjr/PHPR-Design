<?php
global $runnerTableSettings;
$runnerTableSettings['projects view'] = array(
	'name' => 'projects view',
	'type' => 1,
	'shortName' => 'projects1',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'audit' => true,
	'afterEditAction' => 0,
	'afterEditDetails' => 'projects view',
	'afterAddDetail' => 'projects view',
	'detailsBadgeColor' => '3cb371',
	'orderInfo' => array( 
		array(
			'index' => 4,
			'dir' => 'ASC',
			'field' => 'designer_name' 
		),
		array(
			'index' => 8,
			'dir' => 'ASC',
			'field' => 'due_date' 
		) 
	),
	'sql' => 'SELECT
	p.project_id,
	p.project_name,
	u.user_id AS designer_id,
	u.full_name AS designer_name,
	ph.phase_id,
	ph.phase_code,
	CASE ph.phase_code
    WHEN \'TF\'     THEN \'Test Fit\'
    WHEN \'SD\'     THEN \'Schematic Design\'
    WHEN \'QA_QC1\' THEN \'QA/QC1\'
    WHEN \'DD\'     THEN \'Design Development\'
    WHEN \'QA_QC2\' THEN \'QA/QC2\'
    WHEN \'PP\'     THEN \'P&P\'
  END AS phase_label,
	ph.due_date,
	DATEDIFF(ph.due_date, CURDATE()) AS days_until_due
FROM
	phases AS ph
	INNER JOIN projects AS p ON p.project_id = ph.project_id
	INNER JOIN users AS u ON u.user_id = p.designer_id
WHERE
ph.due_date <= DATE_ADD(
  CURDATE(),
  INTERVAL (SELECT CAST(setting_value AS SIGNED)
            FROM settings WHERE setting_key=\'dashboard_days_ahead\') DAY
)
ORDER BY
	u.full_name,
	ph.due_date
',
	'keyFields' => array( 
		'project_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'project_id' => array(
			'name' => 'project_id',
			'goodName' => 'project_id',
			'strField' => 'project_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'p.project_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'projects' 
		),
		'project_name' => array(
			'name' => 'project_name',
			'goodName' => 'project_name',
			'strField' => 'project_name',
			'index' => 2,
			'sqlExpression' => 'p.project_name',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'customExpression' => '$link = GetTableLink("projects","view","?editid1=".$data["project_id"]);
echo "<span class=\'ds-project\'><a href=\\"".$link."\\">".runner_htmlspecialchars($data["project_name"])."</a></span>";
' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'projects' 
		),
		'designer_id' => array(
			'name' => 'designer_id',
			'goodName' => 'designer_id',
			'strField' => 'user_id',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'u.user_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'users',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'user_id',
					'lookupDisplayField' => 'username' 
				) 
			),
			'tableName' => 'users' 
		),
		'designer_name' => array(
			'name' => 'designer_name',
			'goodName' => 'designer_name',
			'strField' => 'full_name',
			'index' => 4,
			'sqlExpression' => 'u.full_name',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'customExpression' => 'echo "<span class=\'ds-designer\'>".runner_htmlspecialchars($data["designer_name"])."</span>";' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'users' 
		),
		'phase_id' => array(
			'name' => 'phase_id',
			'goodName' => 'phase_id',
			'strField' => 'phase_id',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'ph.phase_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'phases' 
		),
		'phase_code' => array(
			'name' => 'phase_code',
			'goodName' => 'phase_code',
			'strField' => 'phase_code',
			'index' => 6,
			'type' => 129,
			'sqlExpression' => 'ph.phase_code',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'phases' 
		),
		'phase_label' => array(
			'name' => 'phase_label',
			'goodName' => 'phase_label',
			'strField' => 'phase_label',
			'index' => 7,
			'sqlExpression' => 'CASE ph.phase_code
    WHEN \'TF\'     THEN \'Test Fit\'
    WHEN \'SD\'     THEN \'Schematic Design\'
    WHEN \'QA_QC1\' THEN \'QA/QC1\'
    WHEN \'DD\'     THEN \'Design Development\'
    WHEN \'QA_QC2\' THEN \'QA/QC2\'
    WHEN \'PP\'     THEN \'P&P\'
  END',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'customExpression' => '$code  = $data["phase_code"];  // TF, SD, QA_QC1, DD, QA_QC2, PP
$label = $data["phase_label"]; // already in your query
echo "<span class=\'ds-badge badge-".runner_htmlspecialchars($code)."\'>".runner_htmlspecialchars($label)."</span>";
' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => '' 
		),
		'due_date' => array(
			'name' => 'due_date',
			'goodName' => 'due_date',
			'strField' => 'due_date',
			'index' => 8,
			'type' => 7,
			'sqlExpression' => 'ph.due_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'customExpression' => '$due  = $data["due_date"];
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

echo "<span class=\'ds-date\' title=\'".runner_htmlspecialchars($due)."\'>".$pretty."</span>";
echo " <span class=\'ds-pill ".$pillClass."\'>".$pillText."</span>";
' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'phases' 
		),
		'days_until_due' => array(
			'name' => 'days_until_due',
			'goodName' => 'days_until_due',
			'strField' => 'days_until_due',
			'index' => 9,
			'type' => 3,
			'sqlExpression' => 'DATEDIFF(ph.due_date, CURDATE())',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Custom',
					'customExpression' => 'echo "";
' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => '' 
		) 
	),
	'detailsTables' => array( 
		'phases' 
	),
	'query' => array(
		'sql' => 'SELECT
	p.project_id,
	p.project_name,
	u.user_id AS designer_id,
	u.full_name AS designer_name,
	ph.phase_id,
	ph.phase_code,
	CASE ph.phase_code
    WHEN \'TF\'     THEN \'Test Fit\'
    WHEN \'SD\'     THEN \'Schematic Design\'
    WHEN \'QA_QC1\' THEN \'QA/QC1\'
    WHEN \'DD\'     THEN \'Design Development\'
    WHEN \'QA_QC2\' THEN \'QA/QC2\'
    WHEN \'PP\'     THEN \'P&P\'
  END AS phase_label,
	ph.due_date,
	DATEDIFF(ph.due_date, CURDATE()) AS days_until_due
FROM
	phases AS ph
	INNER JOIN projects AS p ON p.project_id = ph.project_id
	INNER JOIN users AS u ON u.user_id = p.designer_id
WHERE
ph.due_date <= DATE_ADD(
  CURDATE(),
  INTERVAL (SELECT CAST(setting_value AS SIGNED)
            FROM settings WHERE setting_key=\'dashboard_days_ahead\') DAY
)
ORDER BY
	u.full_name,
	ph.due_date
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'p.project_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'p',
					'name' => 'project_id' 
				),
				'encrypted' => false,
				'columnName' => 'project_id' 
			),
			array(
				'sql' => 'p.project_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'p',
					'name' => 'project_name' 
				),
				'encrypted' => false,
				'columnName' => 'project_name' 
			),
			array(
				'sql' => 'u.user_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'designer_id',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'u',
					'name' => 'user_id' 
				),
				'encrypted' => false,
				'columnName' => 'designer_id' 
			),
			array(
				'sql' => 'u.full_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'designer_name',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'u',
					'name' => 'full_name' 
				),
				'encrypted' => false,
				'columnName' => 'designer_name' 
			),
			array(
				'sql' => 'ph.phase_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ph',
					'name' => 'phase_id' 
				),
				'encrypted' => false,
				'columnName' => 'phase_id' 
			),
			array(
				'sql' => 'ph.phase_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ph',
					'name' => 'phase_code' 
				),
				'encrypted' => false,
				'columnName' => 'phase_code' 
			),
			array(
				'sql' => 'CASE ph.phase_code
    WHEN \'TF\'     THEN \'Test Fit\'
    WHEN \'SD\'     THEN \'Schematic Design\'
    WHEN \'QA_QC1\' THEN \'QA/QC1\'
    WHEN \'DD\'     THEN \'Design Development\'
    WHEN \'QA_QC2\' THEN \'QA/QC2\'
    WHEN \'PP\'     THEN \'P&P\'
  END',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'phase_label',
				'expression' => array(
					'sql' => 'CASE ph.phase_code
    WHEN \'TF\'     THEN \'Test Fit\'
    WHEN \'SD\'     THEN \'Schematic Design\'
    WHEN \'QA_QC1\' THEN \'QA/QC1\'
    WHEN \'DD\'     THEN \'Design Development\'
    WHEN \'QA_QC2\' THEN \'QA/QC2\'
    WHEN \'PP\'     THEN \'P&P\'
  END',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'phase_label' 
			),
			array(
				'sql' => 'ph.due_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ph',
					'name' => 'due_date' 
				),
				'encrypted' => false,
				'columnName' => 'due_date' 
			),
			array(
				'sql' => 'DATEDIFF(ph.due_date, CURDATE())',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'days_until_due',
				'expression' => array(
					'sql' => 'DATEDIFF(ph.due_date, CURDATE())',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => 'ph.due_date',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'CURDATE()',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'DATEDIFF',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'days_until_due' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'phases AS ph',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'phases',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'phase_id',
						'project_id',
						'phase_code',
						'sequence',
						'long_duration',
						'due_date',
						'completed_date',
						'notes' 
					),
					'name' => 'phases' 
				),
				'joinOn' => array(
					'sql' => '',
					'parsed' => false,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => null 
				),
				'joinList' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						 
					),
					'field2' => array( 
						 
					) 
				),
				'alias' => 'ph',
				'link' => 0 
			),
			array(
				'sql' => 'INNER JOIN projects AS p ON p.project_id = ph.project_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'projects',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'project_id',
						'project_name',
						'contract_date',
						'designer_id',
						'created_by',
						'created_at',
						'notes' 
					),
					'name' => 'projects' 
				),
				'joinOn' => array(
					'sql' => 'p.project_id = ph.project_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'p',
						'name' => 'project_id' 
					),
					'case' => '= ph.project_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'p.project_id = ph.project_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'p',
							'name' => 'project_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ph',
							'name' => 'project_id' 
						) 
					) 
				),
				'alias' => 'p',
				'link' => 1 
			),
			array(
				'sql' => 'INNER JOIN users AS u ON u.user_id = p.designer_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'users',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'user_id',
						'username',
						'password_hash',
						'full_name',
						'role',
						'active',
						'created_at' 
					),
					'name' => 'users' 
				),
				'joinOn' => array(
					'sql' => 'u.user_id = p.designer_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'u',
						'name' => 'user_id' 
					),
					'case' => '= p.designer_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'u.user_id = p.designer_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'u',
							'name' => 'user_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'p',
							'name' => 'designer_id' 
						) 
					) 
				),
				'alias' => 'u',
				'link' => 1 
			) 
		),
		'where' => array(
			'sql' => 'ph.due_date <= DATE_ADD(
  CURDATE(),
  INTERVAL (SELECT CAST(setting_value AS SIGNED)
            FROM settings WHERE setting_key=\'dashboard_days_ahead\') DAY
)',
			'parsed' => true,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => array(
				'sql' => '',
				'parsed' => true,
				'type' => 'SQLField',
				'table' => 'ph',
				'name' => 'due_date' 
			),
			'case' => '<= DATE_ADD(
  CURDATE(),
  INTERVAL (SELECT CAST(setting_value AS SIGNED)
            FROM settings WHERE setting_key=\'dashboard_days_ahead\') DAY
)',
			'useAlias' => false 
		),
		'groupBy' => array( 
			 
		),
		'having' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'orderBy' => array( 
			array(
				'sql' => 'u.full_name',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'u',
					'name' => 'full_name' 
				),
				'asc' => true,
				'columnNumber' => 4 
			),
			array(
				'sql' => 'ph.due_date',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ph',
					'name' => 'due_date' 
				),
				'asc' => true,
				'columnNumber' => 8 
			) 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 1,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 2,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 3,
				'orderByIndex' => 0,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 4,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 5,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 6,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => 1,
				'groupByIndex' => -1,
				'whereIndex' => 0,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 8,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'p.project_id,
	p.project_name,
	u.user_id AS designer_id,
	u.full_name AS designer_name,
	ph.phase_id,
	ph.phase_code,
	CASE ph.phase_code
    WHEN \'TF\'     THEN \'Test Fit\'
    WHEN \'SD\'     THEN \'Schematic Design\'
    WHEN \'QA_QC1\' THEN \'QA/QC1\'
    WHEN \'DD\'     THEN \'Design Development\'
    WHEN \'QA_QC2\' THEN \'QA/QC2\'
    WHEN \'PP\'     THEN \'P&P\'
  END AS phase_label,
	ph.due_date,
	DATEDIFF(ph.due_date, CURDATE()) AS days_until_due',
		'fromListSql' => 'FROM
	phases AS ph
	INNER JOIN projects AS p ON p.project_id = ph.project_id
	INNER JOIN users AS u ON u.user_id = p.designer_id',
		'whereSql' => 'ph.due_date <= DATE_ADD(
  CURDATE(),
  INTERVAL (SELECT CAST(setting_value AS SIGNED)
            FROM settings WHERE setting_key=\'dashboard_days_ahead\') DAY
)',
		'orderBySql' => 'ORDER BY
	u.full_name,
	ph.due_date',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'projects',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'project_id',
			'project_name',
			'designer_id',
			'designer_name',
			'phase_id',
			'phase_code',
			'phase_label',
			'due_date',
			'days_until_due' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'project_id',
			'project_name',
			'designer_id',
			'designer_name',
			'phase_id',
			'phase_code',
			'phase_label',
			'due_date',
			'days_until_due' 
		) 
	),
	'connId' => 'conn',
	'clickActions' => array(
		'row' => array(
			'action' => 'noaction' 
		),
		'fields' => array(
			 
		) 
	),
	'geoCoding' => array(
		'enabled' => false,
		'latField' => '',
		'lonField' => '',
		'addressFields' => array( 
			 
		) 
	),
	'whereTabs' => array( 
		 
	),
	'labels' => array(
		 
	),
	'chartSettings' => array(
		 
	),
	'dataSourceOperations' => array(
		 
	),
	'calendarSettings' => array(
		'categoryColors' => array( 
			 
		) 
	),
	'ganttSettings' => array(
		'categoryColors' => array( 
			 
		) 
	) 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels['projects view'] = array(
	'tableCaption' => 'Projects View',
	'fieldLabels' => array(
		'project_id' => 'Project Id',
		'project_name' => 'Project Name',
		'designer_id' => 'Designer Id',
		'designer_name' => 'Designer',
		'phase_id' => 'Phase Id',
		'phase_code' => 'Phase',
		'phase_label' => 'Label',
		'due_date' => 'Due Date',
		'days_until_due' => 'Days Until Due' 
	),
	'fieldTooltips' => array(
		'project_id' => '',
		'project_name' => '',
		'designer_id' => '',
		'designer_name' => '',
		'phase_id' => '',
		'phase_code' => '',
		'phase_label' => '',
		'due_date' => '',
		'days_until_due' => '' 
	),
	'fieldPlaceholders' => array(
		'project_id' => '',
		'project_name' => '',
		'designer_id' => '',
		'designer_name' => '',
		'phase_id' => '',
		'phase_code' => '',
		'phase_label' => '',
		'due_date' => '',
		'days_until_due' => '' 
	),
	'pageTitles' => array(
		'edit' => 'Admin Edit - Contract Date' 
	) 
);
}
?>