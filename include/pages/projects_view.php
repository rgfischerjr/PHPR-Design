<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'details' => array(
		'phases' => array(
			'displayPreview' => 2,
			'previewPageId' => '' 
		) 
	),
	'master' => array(
		'users' => array(
			'preview' => false 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'project_name',
			'contract_date',
			'designer_id',
			'notes' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'project_name' => array( 
				'integrated_edit_field1',
				'integrated_edit_field8' 
			),
			'contract_date' => array( 
				'integrated_edit_field2',
				'integrated_edit_field9' 
			),
			'designer_id' => array( 
				'integrated_edit_field3',
				'integrated_edit_field10' 
			),
			'notes' => array( 
				'integrated_edit_field6',
				'integrated_edit_field13' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => true,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					 
				),
				'below-grid' => array( 
					'view_back_list',
					'view_close',
					'hamburger' 
				),
				'top' => array( 
					'view_header' 
				),
				'grid' => array( 
					'integrated_edit_field8',
					'integrated_edit_field1',
					'integrated_edit_field9',
					'integrated_edit_field2',
					'integrated_edit_field10',
					'integrated_edit_field3',
					'integrated_edit_field13',
					'integrated_edit_field6' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'view_back_list' => 'below-grid',
				'view_close' => 'below-grid',
				'hamburger' => 'below-grid',
				'view_header' => 'top',
				'integrated_edit_field8' => 'grid',
				'integrated_edit_field1' => 'grid',
				'integrated_edit_field9' => 'grid',
				'integrated_edit_field2' => 'grid',
				'integrated_edit_field10' => 'grid',
				'integrated_edit_field3' => 'grid',
				'integrated_edit_field13' => 'grid',
				'integrated_edit_field6' => 'grid' 
			),
			'itemLocations' => array(
				'integrated_edit_field8' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				),
				'integrated_edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field9' => array(
					'location' => 'grid',
					'cellId' => 'c5' 
				),
				'integrated_edit_field2' => array(
					'location' => 'grid',
					'cellId' => 'c6' 
				),
				'integrated_edit_field10' => array(
					'location' => 'grid',
					'cellId' => 'c7' 
				),
				'integrated_edit_field3' => array(
					'location' => 'grid',
					'cellId' => 'c8' 
				),
				'integrated_edit_field13' => array(
					'location' => 'grid',
					'cellId' => 'c13' 
				),
				'integrated_edit_field6' => array(
					'location' => 'grid',
					'cellId' => 'c14' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'view_header' => array( 
				'view_header' 
			),
			'view_back_list' => array( 
				'view_back_list' 
			),
			'view_close' => array( 
				'view_close' 
			),
			'hamburger' => array( 
				'hamburger' 
			),
			'view_edit' => array( 
				'view_edit' 
			),
			'edit_field' => array( 
				'integrated_edit_field1',
				'integrated_edit_field2',
				'integrated_edit_field3',
				'integrated_edit_field6' 
			),
			'edit_field_label' => array( 
				'integrated_edit_field8',
				'integrated_edit_field9',
				'integrated_edit_field10',
				'integrated_edit_field13' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'c' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'project_name_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c3' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field1' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c5' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'contract_date_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c6' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field2' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c7' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'designer_id_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c8' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field3' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c13' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'notes_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c14' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field6' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 2,
				'height' => 4 
			) 
		) 
	),
	'loginForm' => array(
		'loginForm' => 3 
	),
	'page' => array(
		'verticalBar' => false,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'view',
		'breadcrumb' => false,
		'nextPrev' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'view',
	'type' => 'view',
	'layoutId' => 'nomenu',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'view-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1',
							'colspan' => 2 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'view-below-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'view_back_list',
						'view_close' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'hamburger' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'view-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'view_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c' 
						),
						array(
							'cell' => 'c3' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c5' 
						),
						array(
							'cell' => 'c6' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c7' 
						),
						array(
							'cell' => 'c8' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c13' 
						),
						array(
							'cell' => 'c14' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field8' 
					),
					'field' => 'project_name' 
				),
				'c3' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field1' 
					),
					'field' => 'project_name' 
				),
				'c5' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field9' 
					),
					'field' => 'contract_date' 
				),
				'c6' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field2' 
					),
					'field' => 'contract_date' 
				),
				'c7' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field10' 
					),
					'field' => 'designer_id' 
				),
				'c8' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field3' 
					),
					'field' => 'designer_id' 
				),
				'c13' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field13' 
					),
					'field' => 'notes' 
				),
				'c14' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field6' 
					),
					'field' => 'notes' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => true,
			'separateLabels' => true 
		) 
	),
	'items' => array(
		'view_header' => array(
			'type' => 'view_header' 
		),
		'view_back_list' => array(
			'type' => 'view_back_list' 
		),
		'view_close' => array(
			'type' => 'view_close' 
		),
		'hamburger' => array(
			'type' => 'hamburger',
			'items' => array( 
				'view_edit' 
			) 
		),
		'view_edit' => array(
			'type' => 'view_edit' 
		),
		'integrated_edit_field1' => array(
			'field' => 'project_name',
			'type' => 'edit_field' 
		),
		'integrated_edit_field8' => array(
			'type' => 'edit_field_label',
			'field' => 'project_name' 
		),
		'integrated_edit_field2' => array(
			'field' => 'contract_date',
			'type' => 'edit_field' 
		),
		'integrated_edit_field9' => array(
			'type' => 'edit_field_label',
			'field' => 'contract_date' 
		),
		'integrated_edit_field3' => array(
			'field' => 'designer_id',
			'type' => 'edit_field' 
		),
		'integrated_edit_field10' => array(
			'type' => 'edit_field_label',
			'field' => 'designer_id' 
		),
		'integrated_edit_field6' => array(
			'field' => 'notes',
			'type' => 'edit_field' 
		),
		'integrated_edit_field13' => array(
			'type' => 'edit_field_label',
			'field' => 'notes' 
		) 
	),
	'dbProps' => array(
		 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>