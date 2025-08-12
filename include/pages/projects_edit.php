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
		'updateOnEditFields' => array( 
			 
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
		'view' => true,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'edit_message' 
				),
				'below-grid' => array( 
					'edit_save',
					'edit_back_list',
					'edit_close',
					'hamburger' 
				),
				'top' => array( 
					'edit_header' 
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
				'edit_message' => 'above-grid',
				'edit_save' => 'below-grid',
				'edit_back_list' => 'below-grid',
				'edit_close' => 'below-grid',
				'hamburger' => 'below-grid',
				'edit_header' => 'top',
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
			'edit_header' => array( 
				'edit_header' 
			),
			'hamburger' => array( 
				'hamburger' 
			),
			'edit_reset' => array( 
				'edit_reset' 
			),
			'edit_message' => array( 
				'edit_message' 
			),
			'edit_save' => array( 
				'edit_save' 
			),
			'edit_back_list' => array( 
				'edit_back_list' 
			),
			'edit_close' => array( 
				'edit_close' 
			),
			'edit_view' => array( 
				'edit_view' 
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
		'type' => 'edit',
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
	),
	'edit' => array(
		'updateSelected' => false 
	) 
);
			$pageArray = array(
	'id' => 'edit',
	'type' => 'edit',
	'layoutId' => 'nomenu',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'edit-above-grid',
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
						'edit_message' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'edit-below-grid',
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
						'edit_save',
						'edit_back_list',
						'edit_close' 
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
			'modelId' => 'edit-header',
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
						'edit_header' 
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
		'edit_header' => array(
			'type' => 'edit_header',
			'title' => array(
				'page' => 'edit',
				'table' => 'projects',
				'type' => 7 
			) 
		),
		'hamburger' => array(
			'type' => 'hamburger',
			'items' => array( 
				'edit_reset',
				'edit_view' 
			) 
		),
		'edit_reset' => array(
			'type' => 'edit_reset' 
		),
		'edit_message' => array(
			'type' => 'edit_message' 
		),
		'edit_save' => array(
			'type' => 'edit_save' 
		),
		'edit_back_list' => array(
			'type' => 'edit_back_list' 
		),
		'edit_close' => array(
			'type' => 'edit_close' 
		),
		'edit_view' => array(
			'type' => 'edit_view' 
		),
		'integrated_edit_field' => array(
			'field' => 'project_name',
			'type' => 'edit_field',
			'updateOnEdit' => false 
		),
		'integrated_edit_field4' => array(
			'type' => 'edit_field_label',
			'field' => 'project_name' 
		),
		'integrated_edit_field1' => array(
			'field' => 'contract_date',
			'type' => 'edit_field',
			'updateOnEdit' => false 
		),
		'integrated_edit_field6' => array(
			'type' => 'edit_field_label',
			'field' => 'contract_date' 
		),
		'integrated_edit_field2' => array(
			'field' => 'designer_id',
			'type' => 'edit_field',
			'updateOnEdit' => false 
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
		'English' => 'Admin Project Edit' 
	) 
);
		?>