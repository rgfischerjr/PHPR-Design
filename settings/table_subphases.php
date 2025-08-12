<?php
global $runnerTableSettings;
$runnerTableSettings['subphases'] = array(
	'name' => 'subphases',
	'shortName' => 'subphases',
	'pagesByType' => array(
		'list' => array( 
			'list',
			'list1' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'list' => 'list',
		'print' => 'print',
		'list1' => 'list',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'audit' => true,
	'afterEditAction' => 0,
	'afterEditDetails' => 'subphases',
	'afterAddDetail' => 'subphases',
	'detailsBadgeColor' => 'cd5c5c',
	'orderInfo' => array( 
		array(
			'index' => 5,
			'dir' => 'ASC',
			'field' => 'sort_order' 
		) 
	),
	'sql' => 'SELECT
	subphase_id,
	project_id,
	phase_id,
	subphase_name,
	sort_order,
	is_default,
	notes,
	start_date,
	start_checked,
	completed_date,
	completed_checked
FROM
	subphases
ORDER BY sort_order ASC',
	'keyFields' => array( 
		'subphase_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'subphase_id' => array(
			'name' => 'subphase_id',
			'goodName' => 'subphase_id',
			'strField' => 'subphase_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'subphase_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'subphases' 
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
			'tableName' => 'subphases' 
		),
		'phase_id' => array(
			'name' => 'phase_id',
			'goodName' => 'phase_id',
			'strField' => 'phase_id',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'phase_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'phases',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'phase_id',
					'lookupDisplayField' => 'phase_code' 
				) 
			),
			'tableName' => 'subphases' 
		),
		'subphase_name' => array(
			'name' => 'subphase_name',
			'goodName' => 'subphase_name',
			'strField' => 'subphase_name',
			'index' => 4,
			'sqlExpression' => 'subphase_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'subphases' 
		),
		'sort_order' => array(
			'name' => 'sort_order',
			'goodName' => 'sort_order',
			'strField' => 'sort_order',
			'index' => 5,
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
			'tableName' => 'subphases' 
		),
		'is_default' => array(
			'name' => 'is_default',
			'goodName' => 'is_default',
			'strField' => 'is_default',
			'index' => 6,
			'type' => 2,
			'sqlExpression' => 'is_default',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'subphases' 
		),
		'notes' => array(
			'name' => 'notes',
			'goodName' => 'notes',
			'strField' => 'notes',
			'index' => 7,
			'sqlExpression' => 'notes',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'subphases' 
		),
		'start_date' => array(
			'name' => 'start_date',
			'goodName' => 'start_date',
			'strField' => 'start_date',
			'index' => 8,
			'type' => 7,
			'sqlExpression' => 'start_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11,
					'dateFirstYearFactor' => 1,
					'fieldEvents' => array( 
						array(
							'event' => 'click',
							'handlerId' => 12275 
						) 
					) 
				) 
			),
			'tableName' => 'subphases' 
		),
		'start_checked' => array(
			'name' => 'start_checked',
			'goodName' => 'start_checked',
			'strField' => 'start_checked',
			'index' => 9,
			'type' => 3,
			'sqlExpression' => 'start_checked',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'fieldEvents' => array( 
						array(
							'event' => 'click',
							'handlerId' => 12275 
						) 
					) 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'fieldEvents' => array( 
						array(
							'event' => 'change' 
						) 
					) 
				) 
			),
			'tableName' => 'subphases' 
		),
		'completed_date' => array(
			'name' => 'completed_date',
			'goodName' => 'completed_date',
			'strField' => 'completed_date',
			'index' => 10,
			'type' => 7,
			'sqlExpression' => 'completed_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'fieldEvents' => array( 
						array(
							'event' => 'click',
							'handlerId' => 12276 
						) 
					) 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'subphases' 
		),
		'completed_checked' => array(
			'name' => 'completed_checked',
			'goodName' => 'completed_checked',
			'strField' => 'completed_checked',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'completed_checked',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'fieldEvents' => array( 
						array(
							'event' => 'click',
							'handlerId' => 12276 
						) 
					) 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox' 
				) 
			),
			'tableName' => 'subphases' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'phases',
			'detailsKeys' => array( 
				'phase_id',
				'project_id' 
			),
			'masterKeys' => array( 
				'phase_id',
				'project_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	subphase_id,
	project_id,
	phase_id,
	subphase_name,
	sort_order,
	is_default,
	notes,
	start_date,
	start_checked,
	completed_date,
	completed_checked
FROM
	subphases
ORDER BY sort_order ASC',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'subphase_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'subphases',
					'name' => 'subphase_id' 
				),
				'encrypted' => false,
				'columnName' => 'subphase_id' 
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
					'table' => 'subphases',
					'name' => 'project_id' 
				),
				'encrypted' => false,
				'columnName' => 'project_id' 
			),
			array(
				'sql' => 'phase_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'subphases',
					'name' => 'phase_id' 
				),
				'encrypted' => false,
				'columnName' => 'phase_id' 
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
					'table' => 'subphases',
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
					'table' => 'subphases',
					'name' => 'sort_order' 
				),
				'encrypted' => false,
				'columnName' => 'sort_order' 
			),
			array(
				'sql' => 'is_default',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'subphases',
					'name' => 'is_default' 
				),
				'encrypted' => false,
				'columnName' => 'is_default' 
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
					'table' => 'subphases',
					'name' => 'notes' 
				),
				'encrypted' => false,
				'columnName' => 'notes' 
			),
			array(
				'sql' => 'start_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'subphases',
					'name' => 'start_date' 
				),
				'encrypted' => false,
				'columnName' => 'start_date' 
			),
			array(
				'sql' => 'start_checked',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'subphases',
					'name' => 'start_checked' 
				),
				'encrypted' => false,
				'columnName' => 'start_checked' 
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
					'table' => 'subphases',
					'name' => 'completed_date' 
				),
				'encrypted' => false,
				'columnName' => 'completed_date' 
			),
			array(
				'sql' => 'completed_checked',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'subphases',
					'name' => 'completed_checked' 
				),
				'encrypted' => false,
				'columnName' => 'completed_checked' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'subphases',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'subphases',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'subphase_id',
						'project_id',
						'phase_id',
						'subphase_name',
						'sort_order',
						'is_default',
						'notes',
						'start_date',
						'start_checked',
						'completed_date',
						'completed_checked' 
					),
					'name' => 'subphases' 
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
			array(
				'sql' => 'sort_order ASC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'subphases',
					'name' => 'sort_order' 
				),
				'asc' => true,
				'columnNumber' => 5 
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
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 4,
				'orderByIndex' => 0,
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
			),
			array(
				'fieldIndex' => 8,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 9,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 10,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'subphase_id,
	project_id,
	phase_id,
	subphase_name,
	sort_order,
	is_default,
	notes,
	start_date,
	start_checked,
	completed_date,
	completed_checked',
		'fromListSql' => 'FROM
	subphases',
		'orderBySql' => 'ORDER BY sort_order ASC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'subphases',
	'originalPagesByType' => array(
		'list' => array( 
			'list',
			'list1' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'list' => 'list',
		'print' => 'print',
		'list1' => 'list',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'subphase_id',
			'project_id',
			'phase_id',
			'subphase_name',
			'sort_order',
			'is_default',
			'notes',
			'start_date',
			'start_checked',
			'completed_date',
			'completed_checked' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'subphase_id',
			'project_id',
			'phase_id',
			'subphase_name',
			'sort_order',
			'is_default',
			'notes',
			'start_date',
			'start_checked',
			'completed_date',
			'completed_checked' 
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
	$runnerTableLabels['subphases'] = array(
	'tableCaption' => 'Subphases',
	'fieldLabels' => array(
		'subphase_id' => 'Subphase',
		'project_id' => 'Project',
		'phase_id' => 'Phase',
		'subphase_name' => 'Task Name',
		'sort_order' => 'Priority',
		'is_default' => 'Is Default',
		'notes' => 'Notes',
		'start_date' => 'Date',
		'start_checked' => 'Started',
		'completed_date' => 'Date',
		'completed_checked' => 'Completed' 
	),
	'fieldTooltips' => array(
		'subphase_id' => '',
		'project_id' => '',
		'phase_id' => '',
		'subphase_name' => '',
		'sort_order' => '',
		'is_default' => '',
		'notes' => '',
		'start_date' => '',
		'start_checked' => '',
		'completed_date' => '',
		'completed_checked' => '' 
	),
	'fieldPlaceholders' => array(
		'subphase_id' => '',
		'project_id' => '',
		'phase_id' => '',
		'subphase_name' => '',
		'sort_order' => '',
		'is_default' => '',
		'notes' => '',
		'start_date' => '',
		'start_checked' => '',
		'completed_date' => '',
		'completed_checked' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>