<?php
global $runnerTableSettings;
$runnerTableSettings['company_holidays'] = array(
	'name' => 'company_holidays',
	'shortName' => 'company_holidays',
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
	'afterEditDetails' => 'company_holidays',
	'afterAddDetail' => 'company_holidays',
	'detailsBadgeColor' => 'd2af80',
	'sql' => 'SELECT
	holiday_date,
	holiday_name
FROM
	company_holidays',
	'keyFields' => array( 
		'holiday_date' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'holiday_date' => array(
			'name' => 'holiday_date',
			'goodName' => 'holiday_date',
			'strField' => 'holiday_date',
			'index' => 1,
			'type' => 7,
			'sqlExpression' => 'holiday_date',
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
			'tableName' => 'company_holidays' 
		),
		'holiday_name' => array(
			'name' => 'holiday_name',
			'goodName' => 'holiday_name',
			'strField' => 'holiday_name',
			'index' => 2,
			'sqlExpression' => 'holiday_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'company_holidays' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	holiday_date,
	holiday_name
FROM
	company_holidays',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'holiday_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'company_holidays',
					'name' => 'holiday_date' 
				),
				'encrypted' => false,
				'columnName' => 'holiday_date' 
			),
			array(
				'sql' => 'holiday_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'company_holidays',
					'name' => 'holiday_name' 
				),
				'encrypted' => false,
				'columnName' => 'holiday_name' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'company_holidays',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'company_holidays',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'holiday_date',
						'holiday_name' 
					),
					'name' => 'company_holidays' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'holiday_date,
	holiday_name',
		'fromListSql' => 'FROM
	company_holidays',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'company_holidays',
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
			'holiday_date',
			'holiday_name' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'holiday_date',
			'holiday_name' 
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
	$runnerTableLabels['company_holidays'] = array(
	'tableCaption' => 'Company Holidays',
	'fieldLabels' => array(
		'holiday_date' => 'Date',
		'holiday_name' => 'Name' 
	),
	'fieldTooltips' => array(
		'holiday_date' => '',
		'holiday_name' => '' 
	),
	'fieldPlaceholders' => array(
		'holiday_date' => '',
		'holiday_name' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>