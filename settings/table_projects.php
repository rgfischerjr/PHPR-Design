<?php
global $runnerTableSettings;
$runnerTableSettings['projects'] = array(
	'name' => 'projects',
	'shortName' => 'projects',
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
		'edit' => array( 
			'edit' 
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
		'edit' => 'edit',
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
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'audit' => true,
	'afterEditAction' => 0,
	'afterEditDetails' => 'projects',
	'afterAddDetail' => 'projects',
	'detailsBadgeColor' => '3cb371',
	'sql' => 'SELECT
	project_id,
	project_name,
	contract_date,
	designer_id,
	created_by,
	created_at,
	notes
FROM
	projects',
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
			'sqlExpression' => 'project_id',
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
			'sqlExpression' => 'project_name',
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
		'contract_date' => array(
			'name' => 'contract_date',
			'goodName' => 'contract_date',
			'strField' => 'contract_date',
			'index' => 3,
			'type' => 7,
			'sqlExpression' => 'contract_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'defaultValue' => 'now()',
					'dateEditType' => 11,
					'dateFirstYearFactor' => 1 
				) 
			),
			'tableName' => 'projects' 
		),
		'designer_id' => array(
			'name' => 'designer_id',
			'goodName' => 'designer_id',
			'strField' => 'designer_id',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'designer_id',
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
					'lookupDisplayField' => 'full_name',
					'lookupOrderBy' => 'user_id' 
				) 
			),
			'tableName' => 'projects' 
		),
		'created_by' => array(
			'name' => 'created_by',
			'goodName' => 'created_by',
			'strField' => 'created_by',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'created_by',
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
			'tableName' => 'projects' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'index' => 6,
			'type' => 135,
			'sqlExpression' => 'created_at',
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
			'tableName' => 'projects' 
		),
		'notes' => array(
			'name' => 'notes',
			'goodName' => 'notes',
			'strField' => 'notes',
			'index' => 7,
			'sqlExpression' => 'notes',
			'viewFormats' => array(
				'view' => array(
					'textShowFirstN' => 120 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'projects' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'users',
			'detailsKeys' => array( 
				'designer_id' 
			),
			'masterKeys' => array( 
				'user_id' 
			) 
		) 
	),
	'detailsTables' => array( 
		'phases' 
	),
	'query' => array(
		'sql' => 'SELECT
	project_id,
	project_name,
	contract_date,
	designer_id,
	created_by,
	created_at,
	notes
FROM
	projects',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'project_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'projects',
					'name' => 'project_id' 
				),
				'encrypted' => false,
				'columnName' => 'project_id' 
			),
			array(
				'sql' => 'project_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'projects',
					'name' => 'project_name' 
				),
				'encrypted' => false,
				'columnName' => 'project_name' 
			),
			array(
				'sql' => 'contract_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'projects',
					'name' => 'contract_date' 
				),
				'encrypted' => false,
				'columnName' => 'contract_date' 
			),
			array(
				'sql' => 'designer_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'projects',
					'name' => 'designer_id' 
				),
				'encrypted' => false,
				'columnName' => 'designer_id' 
			),
			array(
				'sql' => 'created_by',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'projects',
					'name' => 'created_by' 
				),
				'encrypted' => false,
				'columnName' => 'created_by' 
			),
			array(
				'sql' => 'created_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'projects',
					'name' => 'created_at' 
				),
				'encrypted' => false,
				'columnName' => 'created_at' 
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
					'table' => 'projects',
					'name' => 'notes' 
				),
				'encrypted' => false,
				'columnName' => 'notes' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'projects',
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'project_id,
	project_name,
	contract_date,
	designer_id,
	created_by,
	created_at,
	notes',
		'fromListSql' => 'FROM
	projects',
		'orderBySql' => '',
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
		'edit' => array( 
			'edit' 
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
		'edit' => 'edit',
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
		'edit' => 'edit',
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
			'contract_date',
			'designer_id',
			'created_by',
			'created_at',
			'notes' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'project_id',
			'project_name',
			'contract_date',
			'designer_id',
			'created_by',
			'created_at',
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
	$runnerTableLabels['projects'] = array(
	'tableCaption' => 'Projects',
	'fieldLabels' => array(
		'project_id' => 'Project Id',
		'project_name' => 'Project Name',
		'contract_date' => 'Contract Date',
		'designer_id' => 'Designer',
		'created_by' => 'Created By',
		'created_at' => 'Created At',
		'notes' => 'Notes' 
	),
	'fieldTooltips' => array(
		'project_id' => '',
		'project_name' => '',
		'contract_date' => '',
		'designer_id' => '',
		'created_by' => '',
		'created_at' => '',
		'notes' => '' 
	),
	'fieldPlaceholders' => array(
		'project_id' => '',
		'project_name' => '',
		'contract_date' => '',
		'designer_id' => '',
		'created_by' => '',
		'created_at' => '',
		'notes' => '' 
	),
	'pageTitles' => array(
		'add' => 'Add New Design Project',
		'edit' => 'Admin Project Edit' 
	) 
);
}
?>