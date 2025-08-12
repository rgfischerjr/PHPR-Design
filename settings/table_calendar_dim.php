<?php
global $runnerTableSettings;
$runnerTableSettings['calendar_dim'] = array(
	'name' => 'calendar_dim',
	'shortName' => 'calendar_dim',
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
	'afterEditDetails' => 'calendar_dim',
	'afterAddDetail' => 'calendar_dim',
	'detailsBadgeColor' => 'b22222',
	'sql' => 'SELECT
	cal_date,
	y,
	m,
	d,
	dow,
	is_weekend,
	is_holiday,
	is_workday
FROM
	calendar_dim',
	'keyFields' => array( 
		'cal_date' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'cal_date' => array(
			'name' => 'cal_date',
			'goodName' => 'cal_date',
			'strField' => 'cal_date',
			'index' => 1,
			'type' => 7,
			'sqlExpression' => 'cal_date',
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
			'tableName' => 'calendar_dim' 
		),
		'y' => array(
			'name' => 'y',
			'goodName' => 'y',
			'strField' => 'y',
			'index' => 2,
			'type' => 2,
			'sqlExpression' => 'y',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'calendar_dim' 
		),
		'm' => array(
			'name' => 'm',
			'goodName' => 'm',
			'strField' => 'm',
			'index' => 3,
			'type' => 2,
			'sqlExpression' => 'm',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'calendar_dim' 
		),
		'd' => array(
			'name' => 'd',
			'goodName' => 'd',
			'strField' => 'd',
			'index' => 4,
			'type' => 2,
			'sqlExpression' => 'd',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'calendar_dim' 
		),
		'dow' => array(
			'name' => 'dow',
			'goodName' => 'dow',
			'strField' => 'dow',
			'index' => 5,
			'type' => 2,
			'sqlExpression' => 'dow',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'calendar_dim' 
		),
		'is_weekend' => array(
			'name' => 'is_weekend',
			'goodName' => 'is_weekend',
			'strField' => 'is_weekend',
			'index' => 6,
			'type' => 2,
			'sqlExpression' => 'is_weekend',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'calendar_dim' 
		),
		'is_holiday' => array(
			'name' => 'is_holiday',
			'goodName' => 'is_holiday',
			'strField' => 'is_holiday',
			'index' => 7,
			'type' => 2,
			'sqlExpression' => 'is_holiday',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'calendar_dim' 
		),
		'is_workday' => array(
			'name' => 'is_workday',
			'goodName' => 'is_workday',
			'strField' => 'is_workday',
			'index' => 8,
			'type' => 2,
			'sqlExpression' => 'is_workday',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'calendar_dim' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	cal_date,
	y,
	m,
	d,
	dow,
	is_weekend,
	is_holiday,
	is_workday
FROM
	calendar_dim',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'cal_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'calendar_dim',
					'name' => 'cal_date' 
				),
				'encrypted' => false,
				'columnName' => 'cal_date' 
			),
			array(
				'sql' => 'y',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'calendar_dim',
					'name' => 'y' 
				),
				'encrypted' => false,
				'columnName' => 'y' 
			),
			array(
				'sql' => 'm',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'calendar_dim',
					'name' => 'm' 
				),
				'encrypted' => false,
				'columnName' => 'm' 
			),
			array(
				'sql' => 'd',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'calendar_dim',
					'name' => 'd' 
				),
				'encrypted' => false,
				'columnName' => 'd' 
			),
			array(
				'sql' => 'dow',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'calendar_dim',
					'name' => 'dow' 
				),
				'encrypted' => false,
				'columnName' => 'dow' 
			),
			array(
				'sql' => 'is_weekend',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'calendar_dim',
					'name' => 'is_weekend' 
				),
				'encrypted' => false,
				'columnName' => 'is_weekend' 
			),
			array(
				'sql' => 'is_holiday',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'calendar_dim',
					'name' => 'is_holiday' 
				),
				'encrypted' => false,
				'columnName' => 'is_holiday' 
			),
			array(
				'sql' => 'is_workday',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'calendar_dim',
					'name' => 'is_workday' 
				),
				'encrypted' => false,
				'columnName' => 'is_workday' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'calendar_dim',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'calendar_dim',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'cal_date',
						'y',
						'm',
						'd',
						'dow',
						'is_weekend',
						'is_holiday',
						'is_workday' 
					),
					'name' => 'calendar_dim' 
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
		'fieldListSql' => 'cal_date,
	y,
	m,
	d,
	dow,
	is_weekend,
	is_holiday,
	is_workday',
		'fromListSql' => 'FROM
	calendar_dim',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'calendar_dim',
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
			'cal_date',
			'y',
			'm',
			'd',
			'dow',
			'is_weekend',
			'is_holiday',
			'is_workday' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'cal_date',
			'y',
			'm',
			'd',
			'dow',
			'is_weekend',
			'is_holiday',
			'is_workday' 
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
	$runnerTableLabels['calendar_dim'] = array(
	'tableCaption' => 'Calendar Dim',
	'fieldLabels' => array(
		'cal_date' => 'Date',
		'y' => 'Year',
		'm' => 'Month',
		'd' => 'Day',
		'dow' => 'Day of Week',
		'is_weekend' => 'Is Weekend',
		'is_holiday' => 'Is Holiday',
		'is_workday' => 'Is Workday' 
	),
	'fieldTooltips' => array(
		'cal_date' => '',
		'y' => '',
		'm' => '',
		'd' => '',
		'dow' => '',
		'is_weekend' => '',
		'is_holiday' => '',
		'is_workday' => '' 
	),
	'fieldPlaceholders' => array(
		'cal_date' => '',
		'y' => '',
		'm' => '',
		'd' => '',
		'dow' => '',
		'is_weekend' => '',
		'is_holiday' => '',
		'is_workday' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>