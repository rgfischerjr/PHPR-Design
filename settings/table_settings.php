<?php
global $runnerTableSettings;
$runnerTableSettings['settings'] = array(
	'name' => 'settings',
	'shortName' => 'settings',
	'pagesByType' => array(
		'print' => array( 
			'print' 
		) 
	),
	'pageTypes' => array(
		'print' => 'print' 
	),
	'defaultPages' => array(
		'print' => 'print' 
	),
	'audit' => true,
	'afterEditAction' => 0,
	'afterEditDetails' => 'settings',
	'afterAddDetail' => 'settings',
	'detailsBadgeColor' => '00c2c5',
	'sql' => 'SELECT
	setting_key,
	setting_value,
	updated_at
FROM
	settings',
	'keyFields' => array( 
		'setting_key' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'setting_key' => array(
			'name' => 'setting_key',
			'goodName' => 'setting_key',
			'strField' => 'setting_key',
			'index' => 1,
			'sqlExpression' => 'setting_key',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'settings' 
		),
		'setting_value' => array(
			'name' => 'setting_value',
			'goodName' => 'setting_value',
			'strField' => 'setting_value',
			'index' => 2,
			'sqlExpression' => 'setting_value',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'settings' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'index' => 3,
			'type' => 135,
			'sqlExpression' => 'updated_at',
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
			'tableName' => 'settings' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	setting_key,
	setting_value,
	updated_at
FROM
	settings',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'setting_key',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'settings',
					'name' => 'setting_key' 
				),
				'encrypted' => false,
				'columnName' => 'setting_key' 
			),
			array(
				'sql' => 'setting_value',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'settings',
					'name' => 'setting_value' 
				),
				'encrypted' => false,
				'columnName' => 'setting_value' 
			),
			array(
				'sql' => 'updated_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'settings',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'settings',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'settings',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'setting_key',
						'setting_value',
						'updated_at' 
					),
					'name' => 'settings' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'setting_key,
	setting_value,
	updated_at',
		'fromListSql' => 'FROM
	settings',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'settings',
	'originalPagesByType' => array(
		'print' => array( 
			'print' 
		) 
	),
	'originalPageTypes' => array(
		'print' => 'print' 
	),
	'originalDefaultPages' => array(
		'print' => 'print' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'setting_key',
			'setting_value',
			'updated_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'setting_key',
			'setting_value',
			'updated_at' 
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
	$runnerTableLabels['settings'] = array(
	'tableCaption' => 'Settings',
	'fieldLabels' => array(
		'setting_key' => 'Setting Key',
		'setting_value' => 'Setting Value',
		'updated_at' => 'Updated At' 
	),
	'fieldTooltips' => array(
		'setting_key' => '',
		'setting_value' => '',
		'updated_at' => '' 
	),
	'fieldPlaceholders' => array(
		'setting_key' => '',
		'setting_value' => '',
		'updated_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>