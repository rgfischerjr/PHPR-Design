<?php
global $runnerTableSettings;
$runnerTableSettings['phase_catalog'] = array(
	'name' => 'phase_catalog',
	'shortName' => 'phase_catalog',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'edit' => array( 
			'edit' 
		),
		'list' => array( 
			'list' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'edit' => 'edit',
		'list' => 'list' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'edit' => 'edit',
		'list' => 'list' 
	),
	'audit' => true,
	'afterEditAction' => 0,
	'afterEditDetails' => 'phase_catalog',
	'afterAddDetail' => 'phase_catalog',
	'detailsBadgeColor' => 'd2af80',
	'sql' => 'SELECT
	phase_code,
	phase_name,
	default_long_duration,
	`sequence`
FROM
	phase_catalog',
	'keyFields' => array( 
		'phase_code' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'phase_code' => array(
			'name' => 'phase_code',
			'goodName' => 'phase_code',
			'strField' => 'phase_code',
			'index' => 1,
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
			'tableName' => 'phase_catalog' 
		),
		'phase_name' => array(
			'name' => 'phase_name',
			'goodName' => 'phase_name',
			'strField' => 'phase_name',
			'index' => 2,
			'sqlExpression' => 'phase_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'phase_catalog' 
		),
		'default_long_duration' => array(
			'name' => 'default_long_duration',
			'goodName' => 'default_long_duration',
			'strField' => 'default_long_duration',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'default_long_duration',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'phase_catalog' 
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
			'tableName' => 'phase_catalog' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	phase_code,
	phase_name,
	default_long_duration,
	`sequence`
FROM
	phase_catalog',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'phase_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'phase_catalog',
					'name' => 'phase_code' 
				),
				'encrypted' => false,
				'columnName' => 'phase_code' 
			),
			array(
				'sql' => 'phase_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'phase_catalog',
					'name' => 'phase_name' 
				),
				'encrypted' => false,
				'columnName' => 'phase_name' 
			),
			array(
				'sql' => 'default_long_duration',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'phase_catalog',
					'name' => 'default_long_duration' 
				),
				'encrypted' => false,
				'columnName' => 'default_long_duration' 
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
					'table' => 'phase_catalog',
					'name' => 'sequence' 
				),
				'encrypted' => false,
				'columnName' => 'sequence' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'phase_catalog',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'phase_catalog',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'phase_code',
						'phase_name',
						'default_long_duration',
						'sequence' 
					),
					'name' => 'phase_catalog' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'phase_code,
	phase_name,
	default_long_duration,
	`sequence`',
		'fromListSql' => 'FROM
	phase_catalog',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'phase_catalog',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'edit' => array( 
			'edit' 
		),
		'list' => array( 
			'list' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'edit' => 'edit',
		'list' => 'list' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'edit' => 'edit',
		'list' => 'list' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'phase_code',
			'phase_name',
			'default_long_duration',
			'sequence' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'phase_code',
			'phase_name',
			'default_long_duration',
			'sequence' 
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
	$runnerTableLabels['phase_catalog'] = array(
	'tableCaption' => 'Phase Catalog',
	'fieldLabels' => array(
		'phase_code' => 'Short Name',
		'phase_name' => 'Name',
		'default_long_duration' => 'Default Duration',
		'sequence' => 'Sequence' 
	),
	'fieldTooltips' => array(
		'phase_code' => '',
		'phase_name' => '',
		'default_long_duration' => '',
		'sequence' => '' 
	),
	'fieldPlaceholders' => array(
		'phase_code' => '',
		'phase_name' => '',
		'default_long_duration' => '',
		'sequence' => '' 
	),
	'pageTitles' => array(
		'add' => 'Add Phase to Catalog',
		'edit' => 'Edit Phase Catalog' 
	) 
);
}
?>