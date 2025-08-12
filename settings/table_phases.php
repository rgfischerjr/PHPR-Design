<?php
global $runnerTableSettings;
$runnerTableSettings['phases'] = array(
	'name' => 'phases',
	'shortName' => 'phases',
	'pagesByType' => array(
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
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'audit' => true,
	'afterEditAction' => 0,
	'afterEditDetails' => 'phases',
	'afterAddDetail' => 'phases',
	'detailsBadgeColor' => '71e414',
	'sql' => 'SELECT
	phase_id,
	project_id,
	phase_code,
	`sequence`,
	long_duration,
	due_date,
	completed_date,
	notes
FROM
	phases',
	'keyFields' => array( 
		'phase_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'phase_id' => array(
			'name' => 'phase_id',
			'goodName' => 'phase_id',
			'strField' => 'phase_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'phase_id',
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
		'project_id' => array(
			'name' => 'project_id',
			'goodName' => 'project_id',
			'strField' => 'project_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'project_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'projects',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'project_id',
					'lookupDisplayField' => 'project_name' 
				) 
			),
			'tableName' => 'phases' 
		),
		'phase_code' => array(
			'name' => 'phase_code',
			'goodName' => 'phase_code',
			'strField' => 'phase_code',
			'index' => 3,
			'type' => 129,
			'sqlExpression' => 'phase_code',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 0,
					'lookupValues' => array( 
						'TF',
						'SD',
						'QA_QC1',
						'DD',
						'QA_QC2',
						'PP' 
					) 
				) 
			),
			'tableName' => 'phases' 
		),
		'sequence' => array(
			'name' => 'sequence',
			'goodName' => 'sequence',
			'strField' => 'sequence',
			'index' => 4,
			'type' => 2,
			'sqlExpression' => '`sequence`',
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
		'long_duration' => array(
			'name' => 'long_duration',
			'goodName' => 'long_duration',
			'strField' => 'long_duration',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'long_duration',
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
		'due_date' => array(
			'name' => 'due_date',
			'goodName' => 'due_date',
			'strField' => 'due_date',
			'index' => 6,
			'type' => 7,
			'sqlExpression' => 'due_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
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
		'completed_date' => array(
			'name' => 'completed_date',
			'goodName' => 'completed_date',
			'strField' => 'completed_date',
			'index' => 7,
			'type' => 7,
			'sqlExpression' => 'completed_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
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
		'notes' => array(
			'name' => 'notes',
			'goodName' => 'notes',
			'strField' => 'notes',
			'index' => 8,
			'sqlExpression' => 'notes',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'phases' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'projects',
			'detailsKeys' => array( 
				'project_id' 
			),
			'masterKeys' => array( 
				'project_id' 
			) 
		),
		array(
			'table' => 'projects view',
			'detailsKeys' => array( 
				'project_id' 
			),
			'masterKeys' => array( 
				'project_id' 
			) 
		) 
	),
	'detailsTables' => array( 
		'subphases' 
	),
	'query' => array(
		'sql' => 'SELECT
	phase_id,
	project_id,
	phase_code,
	`sequence`,
	long_duration,
	due_date,
	completed_date,
	notes
FROM
	phases',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'phase_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'phases',
					'name' => 'phase_id' 
				),
				'encrypted' => false,
				'columnName' => 'phase_id' 
			),
			array(
				'sql' => 'project_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'phases',
					'name' => 'project_id' 
				),
				'encrypted' => false,
				'columnName' => 'project_id' 
			),
			array(
				'sql' => 'phase_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'phases',
					'name' => 'phase_code' 
				),
				'encrypted' => false,
				'columnName' => 'phase_code' 
			),
			array(
				'sql' => '`sequence`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'phases',
					'name' => 'sequence' 
				),
				'encrypted' => false,
				'columnName' => 'sequence' 
			),
			array(
				'sql' => 'long_duration',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'phases',
					'name' => 'long_duration' 
				),
				'encrypted' => false,
				'columnName' => 'long_duration' 
			),
			array(
				'sql' => 'due_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'phases',
					'name' => 'due_date' 
				),
				'encrypted' => false,
				'columnName' => 'due_date' 
			),
			array(
				'sql' => 'completed_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'phases',
					'name' => 'completed_date' 
				),
				'encrypted' => false,
				'columnName' => 'completed_date' 
			),
			array(
				'sql' => 'notes',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'phases',
					'name' => 'notes' 
				),
				'encrypted' => false,
				'columnName' => 'notes' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'phases',
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
				'link' => 0 
			) 
		),
		'where' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
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
				'orderByIndex' => -1,
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
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'phase_id,
	project_id,
	phase_code,
	`sequence`,
	long_duration,
	due_date,
	completed_date,
	notes',
		'fromListSql' => 'FROM
	phases',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'phases',
	'originalPagesByType' => array(
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
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'phase_id',
			'project_id',
			'phase_code',
			'sequence',
			'long_duration',
			'due_date',
			'completed_date',
			'notes' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'phase_id',
			'project_id',
			'phase_code',
			'sequence',
			'long_duration',
			'due_date',
			'completed_date',
			'notes' 
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
	$runnerTableLabels['phases'] = array(
	'tableCaption' => 'Phases',
	'fieldLabels' => array(
		'phase_id' => 'Phase Id',
		'project_id' => 'Project Id',
		'phase_code' => 'Short Name',
		'sequence' => 'Sequence',
		'long_duration' => 'Days',
		'due_date' => 'Due Date',
		'completed_date' => 'Completed Date',
		'notes' => 'Notes' 
	),
	'fieldTooltips' => array(
		'phase_id' => '',
		'project_id' => '',
		'phase_code' => '',
		'sequence' => '',
		'long_duration' => '',
		'due_date' => '',
		'completed_date' => '',
		'notes' => '' 
	),
	'fieldPlaceholders' => array(
		'phase_id' => '',
		'project_id' => '',
		'phase_code' => '',
		'sequence' => '',
		'long_duration' => '',
		'due_date' => '',
		'completed_date' => '',
		'notes' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>