<?php
global $runnerTableSettings;
$runnerTableSettings['default_subphases'] = array(
	'name' => 'default_subphases',
	'shortName' => 'default_subphases',
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
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'edit' => 'edit',
		'list' => 'list',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'edit' => 'edit',
		'list' => 'list',
		'search' => 'search' 
	),
	'audit' => true,
	'afterEditAction' => 0,
	'afterEditDetails' => 'default_subphases',
	'afterAddDetail' => 'default_subphases',
	'detailsBadgeColor' => 'edca00',
	'sql' => 'SELECT
	default_id,
	phase_code,
	subphase_name,
	sort_order
FROM
	default_subphases',
	'keyFields' => array( 
		'default_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'default_id' => array(
			'name' => 'default_id',
			'goodName' => 'default_id',
			'strField' => 'default_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'default_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'default_subphases' 
		),
		'phase_code' => array(
			'name' => 'phase_code',
			'goodName' => 'phase_code',
			'strField' => 'phase_code',
			'index' => 2,
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
			'tableName' => 'default_subphases' 
		),
		'subphase_name' => array(
			'name' => 'subphase_name',
			'goodName' => 'subphase_name',
			'strField' => 'subphase_name',
			'index' => 3,
			'sqlExpression' => 'subphase_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'default_subphases' 
		),
		'sort_order' => array(
			'name' => 'sort_order',
			'goodName' => 'sort_order',
			'strField' => 'sort_order',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'sort_order',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'default_subphases' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	default_id,
	phase_code,
	subphase_name,
	sort_order
FROM
	default_subphases',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'default_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'default_subphases',
					'name' => 'default_id' 
				),
				'encrypted' => false,
				'columnName' => 'default_id' 
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
					'table' => 'default_subphases',
					'name' => 'phase_code' 
				),
				'encrypted' => false,
				'columnName' => 'phase_code' 
			),
			array(
				'sql' => 'subphase_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'default_subphases',
					'name' => 'subphase_name' 
				),
				'encrypted' => false,
				'columnName' => 'subphase_name' 
			),
			array(
				'sql' => 'sort_order',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'default_subphases',
					'name' => 'sort_order' 
				),
				'encrypted' => false,
				'columnName' => 'sort_order' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'default_subphases',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'default_subphases',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'default_id',
						'phase_code',
						'subphase_name',
						'sort_order' 
					),
					'name' => 'default_subphases' 
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
		'fieldListSql' => 'default_id,
	phase_code,
	subphase_name,
	sort_order',
		'fromListSql' => 'FROM
	default_subphases',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'default_subphases',
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
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'edit' => 'edit',
		'list' => 'list',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'edit' => 'edit',
		'list' => 'list',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'default_id',
			'phase_code',
			'subphase_name',
			'sort_order' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'default_id',
			'phase_code',
			'subphase_name',
			'sort_order' 
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
	$runnerTableLabels['default_subphases'] = array(
	'tableCaption' => 'Default Subphases',
	'fieldLabels' => array(
		'default_id' => 'Default Id',
		'phase_code' => 'Phase',
		'subphase_name' => 'Subphase Name',
		'sort_order' => 'Sort Order' 
	),
	'fieldTooltips' => array(
		'default_id' => '',
		'phase_code' => '',
		'subphase_name' => '',
		'sort_order' => '' 
	),
	'fieldPlaceholders' => array(
		'default_id' => '',
		'phase_code' => '',
		'subphase_name' => '',
		'sort_order' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>