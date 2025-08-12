<?php
			$optionsArray = array(
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
	'captcha' => array(
		'captcha' => false 
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
				'integrated_edit_field',
				'integrated_edit_field4' 
			),
			'contract_date' => array( 
				'integrated_edit_field1',
				'integrated_edit_field6' 
			),
			'designer_id' => array( 
				'integrated_edit_field2',
				'integrated_edit_field8' 
			),
			'notes' => array( 
				'integrated_edit_field3',
				'integrated_edit_field10' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'add_message' 
				),
				'below-grid' => array( 
					'add_save',
					'add_reset',
					'add_back_list',
					'add_cancel' 
				),
				'top' => array( 
					'add_header' 
				),
				'grid' => array( 
					'integrated_edit_field4',
					'integrated_edit_field',
					'integrated_edit_field6',
					'integrated_edit_field1',
					'integrated_edit_field8',
					'integrated_edit_field2',
					'integrated_edit_field10',
					'integrated_edit_field3' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'message_block' 
				) 
			),
			'itemForms' => array(
				'add_message' => 'above-grid',
				'add_save' => 'below-grid',
				'add_reset' => 'below-grid',
				'add_back_list' => 'below-grid',
				'add_cancel' => 'below-grid',
				'add_header' => 'top',
				'integrated_edit_field4' => 'grid',
				'integrated_edit_field' => 'grid',
				'integrated_edit_field6' => 'grid',
				'integrated_edit_field1' => 'grid',
				'integrated_edit_field8' => 'grid',
				'integrated_edit_field2' => 'grid',
				'integrated_edit_field10' => 'grid',
				'integrated_edit_field3' => 'grid' 
			),
			'itemLocations' => array(
				'integrated_edit_field4' => array(
					'location' => 'grid',
					'cellId' => 'c4' 
				),
				'integrated_edit_field' => array(
					'location' => 'grid',
					'cellId' => 'c2' 
				),
				'integrated_edit_field6' => array(
					'location' => 'grid',
					'cellId' => 'c5' 
				),
				'integrated_edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field8' => array(
					'location' => 'grid',
					'cellId' => 'c7' 
				),
				'integrated_edit_field2' => array(
					'location' => 'grid',
					'cellId' => 'c8' 
				),
				'integrated_edit_field10' => array(
					'location' => 'grid',
					'cellId' => 'c10' 
				),
				'integrated_edit_field3' => array(
					'location' => 'grid',
					'cellId' => 'c11' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'add_header' => array( 
				'add_header' 
			),
			'add_back_list' => array( 
				'add_back_list' 
			),
			'add_cancel' => array( 
				'add_cancel' 
			),
			'add_message' => array( 
				'add_message' 
			),
			'add_save' => array( 
				'add_save' 
			),
			'add_reset' => array( 
				'add_reset' 
			),
			'edit_field' => array( 
				'integrated_edit_field',
				'integrated_edit_field1',
				'integrated_edit_field2',
				'integrated_edit_field3' 
			),
			'edit_field_label' => array( 
				'integrated_edit_field4',
				'integrated_edit_field6',
				'integrated_edit_field8',
				'integrated_edit_field10' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'c4' => array(
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
							'integrated_edit_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c2' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field' 
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
							'integrated_edit_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c3' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field1' 
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
							'integrated_edit_field8' 
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
							'integrated_edit_field2' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c10' => array(
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
							'integrated_edit_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c11' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field3' 
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
		'type' => 'add',
		'breadcrumb' => false 
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
	'id' => 'add',
	'type' => 'add',
	'layoutId' => 'nomenu',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'add-above-grid',
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
						'add_message' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'add-below-grid',
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
						'add_save',
						'add_reset',
						'add_back_list',
						'add_cancel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'add-header',
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
						'add_header' 
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
							'cell' => 'c4' 
						),
						array(
							'cell' => 'c2' 
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
							'cell' => 'c3' 
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
							'cell' => 'c10' 
						),
						array(
							'cell' => 'c11' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c4' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field4' 
					),
					'field' => 'project_name' 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field' 
					),
					'field' => 'project_name' 
				),
				'c5' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field6' 
					),
					'field' => 'contract_date' 
				),
				'c3' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field1' 
					),
					'field' => 'contract_date' 
				),
				'c7' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field8' 
					),
					'field' => 'designer_id' 
				),
				'c8' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field2' 
					),
					'field' => 'designer_id' 
				),
				'c10' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field10' 
					),
					'field' => 'notes' 
				),
				'c11' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field3' 
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
		'add_header' => array(
			'type' => 'add_header',
			'title' => array(
				'page' => 'add',
				'table' => 'projects',
				'type' => 7 
			) 
		),
		'add_back_list' => array(
			'type' => 'add_back_list' 
		),
		'add_cancel' => array(
			'type' => 'add_cancel' 
		),
		'add_message' => array(
			'type' => 'add_message' 
		),
		'add_save' => array(
			'type' => 'add_save' 
		),
		'add_reset' => array(
			'type' => 'add_reset' 
		),
		'integrated_edit_field' => array(
			'field' => 'project_name',
			'type' => 'edit_field' 
		),
		'integrated_edit_field4' => array(
			'type' => 'edit_field_label',
			'field' => 'project_name' 
		),
		'integrated_edit_field1' => array(
			'field' => 'contract_date',
			'type' => 'edit_field' 
		),
		'integrated_edit_field6' => array(
			'type' => 'edit_field_label',
			'field' => 'contract_date' 
		),
		'integrated_edit_field2' => array(
			'field' => 'designer_id',
			'type' => 'edit_field' 
		),
		'integrated_edit_field8' => array(
			'type' => 'edit_field_label',
			'field' => 'designer_id' 
		),
		'integrated_edit_field3' => array(
			'field' => 'notes',
			'type' => 'edit_field' 
		),
		'integrated_edit_field10' => array(
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
		'English' => 'Add New Design Project' 
	) 
);
		?>