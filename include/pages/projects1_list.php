<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'addToBottom' => false,
		'delete' => false,
		'updateSelected' => false,
		'editInPopup' => null,
		'viewInPopup' => null,
		'clickSort' => true,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'fieldFilter' => false,
		'hideNumberOfRecords' => false 
	),
	'allDetails' => array(
		'linkType' => 0 
	),
	'details' => array(
		'phases' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		) 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'project_id' => array(
			'totalsType' => '' 
		),
		'project_name' => array(
			'totalsType' => '' 
		),
		'designer_id' => array(
			'totalsType' => '' 
		),
		'designer_name' => array(
			'totalsType' => '' 
		),
		'phase_id' => array(
			'totalsType' => '' 
		),
		'phase_code' => array(
			'totalsType' => '' 
		),
		'phase_label' => array(
			'totalsType' => '' 
		),
		'due_date' => array(
			'totalsType' => '' 
		),
		'days_until_due' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'project_name',
			'designer_name',
			'phase_code',
			'due_date',
			'days_until_due' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'project_id',
			'days_until_due',
			'due_date',
			'phase_label',
			'phase_code',
			'phase_id',
			'designer_name',
			'designer_id',
			'project_name' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			'due_date',
			'days_until_due' 
		),
		'fieldItems' => array(
			'project_name' => array( 
				'simple_grid_field1',
				'simple_grid_field10' 
			),
			'designer_name' => array( 
				'simple_grid_field2',
				'simple_grid_field12' 
			),
			'phase_code' => array( 
				'simple_grid_field5',
				'simple_grid_field14' 
			),
			'due_date' => array( 
				'simple_grid_field7',
				'simple_grid_field16' 
			),
			'days_until_due' => array( 
				'simple_grid_field8',
				'simple_grid_field17' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => true,
		'view' => false,
		'print' => true 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'add',
					'details_found',
					'page_size',
					'print_panel',
					'details_preview1' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'supertop' => array( 
					'logo',
					'menu',
					'simple_search',
					'list_options',
					'loginform_login1',
					'username_button1',
					'loginform_login',
					'username_button' 
				),
				'left' => array( 
					'search_panel' 
				),
				'top' => array( 
					'breadcrumb',
					'master_info' 
				),
				'grid' => array( 
					'simple_grid_field10',
					'simple_grid_field1',
					'simple_grid_field12',
					'simple_grid_field2',
					'simple_grid_field14',
					'simple_grid_field5',
					'simple_grid_field16',
					'simple_grid_field7',
					'simple_grid_field17',
					'simple_grid_field8',
					'details_preview2',
					'details_preview',
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_alldetails_link',
					'grid_details_link',
					'grid_details_link1' 
				) 
			),
			'formXtTags' => array(
				'below-grid' => array( 
					'pagination' 
				),
				'top' => array( 
					'breadcrumb',
					'mastertable_block' 
				) 
			),
			'itemForms' => array(
				'add' => 'above-grid',
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'print_panel' => 'above-grid',
				'details_preview1' => 'above-grid',
				'pagination' => 'below-grid',
				'logo' => 'supertop',
				'menu' => 'supertop',
				'simple_search' => 'supertop',
				'list_options' => 'supertop',
				'loginform_login1' => 'supertop',
				'username_button1' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'search_panel' => 'left',
				'breadcrumb' => 'top',
				'master_info' => 'top',
				'simple_grid_field10' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field12' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field16' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field17' => 'grid',
				'simple_grid_field8' => 'grid',
				'details_preview2' => 'grid',
				'details_preview' => 'grid',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_alldetails_link' => 'grid',
				'grid_details_link' => 'grid',
				'grid_details_link1' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'simple_grid_field17' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'details_preview2' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'grid_checkbox_head' => array(
					'location' => 'grid',
					'cellId' => 'headcell_checkbox' 
				),
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_checkbox' 
				),
				'grid_alldetails_link' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link1' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				) 
			),
			'itemVisiblity' => array(
				'print_panel' => 5,
				'menu' => 3,
				'simple_search' => 3,
				'search_panel' => 5,
				'list_options' => 3,
				'username_button1' => 3,
				'loginform_login1' => 3 
			) 
		),
		'itemsByType' => array(
			'add' => array( 
				'add' 
			),
			'details_found' => array( 
				'details_found' 
			),
			'page_size' => array( 
				'page_size' 
			),
			'print_panel' => array( 
				'print_panel' 
			),
			'print_scope' => array( 
				'print_scope' 
			),
			'print_details' => array( 
				'print_details' 
			),
			'print_records' => array( 
				'print_records' 
			),
			'print_button' => array( 
				'print_button' 
			),
			'pagination' => array( 
				'pagination' 
			),
			'search_panel_field' => array( 
				'search_panel_field',
				'search_panel_field8',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field2',
				'search_panel_field3',
				'search_panel_field1' 
			),
			'export_selected' => array( 
				'export_selected' 
			),
			'-' => array( 
				'-1',
				'-',
				'-2',
				'-3' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
			),
			'export' => array( 
				'export' 
			),
			'import' => array( 
				'import' 
			),
			'breadcrumb' => array( 
				'breadcrumb' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'simple_search' => array( 
				'simple_search' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'master_info' => array( 
				'master_info' 
			),
			'grid_field' => array( 
				'simple_grid_field1',
				'simple_grid_field2',
				'simple_grid_field5',
				'simple_grid_field7',
				'simple_grid_field8' 
			),
			'grid_field_label' => array( 
				'simple_grid_field10',
				'simple_grid_field12',
				'simple_grid_field14',
				'simple_grid_field16',
				'simple_grid_field17' 
			),
			'details_preview' => array( 
				'details_preview',
				'details_preview2' 
			),
			'deleted' => array( 
				'details_preview1',
				'loginform_login',
				'username_button' 
			),
			'grid_checkbox' => array( 
				'grid_checkbox' 
			),
			'grid_checkbox_head' => array( 
				'grid_checkbox_head' 
			),
			'grid_alldetails_link' => array( 
				'grid_alldetails_link' 
			),
			'grid_details_link' => array( 
				'grid_details_link',
				'grid_details_link1' 
			),
			'username_button' => array( 
				'username_button1' 
			),
			'loginform_login' => array( 
				'loginform_login1' 
			),
			'logout_link' => array( 
				'logout_link' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_checkbox' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox_head' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_details' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'project_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'designer_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'phase_code_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'due_date_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'days_until_due_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field17' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_checkbox' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_details' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'grid_alldetails_link',
							'grid_details_link',
							'grid_details_link1' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'project_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'designer_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'phase_code_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'due_date_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'days_until_due_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_dpreview' => array(
						'cols' => array( 
							0,
							1,
							2,
							3,
							4,
							5,
							6 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'details_preview2',
							'details_preview' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'footcell_checkbox' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_details' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field3' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field5' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field7' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field8' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 7,
				'height' => 4 
			) 
		) 
	),
	'loginForm' => array(
		'loginForm' => 0 
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
				'details_found' => array(
					'tag' => 'DISPLAYING',
					'type' => 2 
				) 
			) 
		),
		'gridType' => 0,
		'recsPerRow' => 1,
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			array(
				'id' => 'main',
				'horizontal' => true 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'list',
		'breadcrumb' => true 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	),
	'dataGrid' => array(
		'groupFields' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'list',
	'type' => 'list',
	'layoutId' => 'topbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'list-above-grid',
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
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c3' 
						),
						array(
							'cell' => 'c4' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'add' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'details_found',
						'page_size',
						'print_panel' 
					) 
				),
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						'details_preview1' 
					) 
				),
				'c4' => array(
					'model' => 'c4',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'list-below-grid',
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
						'pagination' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'topbar-menu',
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
						'logo',
						'menu' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'simple_search',
						'list_options',
						'loginform_login1',
						'username_button1',
						'loginform_login',
						'username_button' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'left' => array(
			'modelId' => 'list-vbar',
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
						'search_panel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'list-top',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c3' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'breadcrumb' 
					) 
				),
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						'master_info' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'horizontal-grid',
			'grid' => array( 
				array(
					'section' => 'head',
					'cells' => array( 
						array(
							'cell' => 'headcell_checkbox' 
						),
						array(
							'cell' => 'headcell_details' 
						),
						array(
							'cell' => 'headcell_field1' 
						),
						array(
							'cell' => 'headcell_field3' 
						),
						array(
							'cell' => 'headcell_field5' 
						),
						array(
							'cell' => 'headcell_field7' 
						),
						array(
							'cell' => 'headcell_field8' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'cell_checkbox' 
						),
						array(
							'cell' => 'cell_details' 
						),
						array(
							'cell' => 'cell_field1' 
						),
						array(
							'cell' => 'cell_field3' 
						),
						array(
							'cell' => 'cell_field5' 
						),
						array(
							'cell' => 'cell_field7' 
						),
						array(
							'cell' => 'cell_field8' 
						) 
					) 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_dpreview',
							'colspan' => 7 
						) 
					),
					'section' => 'body' 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_checkbox' 
						),
						array(
							'cell' => 'footcell_details' 
						),
						array(
							'cell' => 'footcell_field1' 
						),
						array(
							'cell' => 'footcell_field3' 
						),
						array(
							'cell' => 'footcell_field5' 
						),
						array(
							'cell' => 'footcell_field7' 
						),
						array(
							'cell' => 'footcell_field8' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'project_name',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'project_name',
					'columnName' => 'field' 
				),
				'footcell_field1' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field3' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field12' 
					),
					'field' => 'designer_name',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'designer_name',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field5' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'phase_code',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'phase_code',
					'columnName' => 'field' 
				),
				'footcell_field5' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field7' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field16' 
					),
					'field' => 'due_date',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'due_date',
					'columnName' => 'field' 
				),
				'footcell_field7' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field8' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field17' 
					),
					'field' => 'days_until_due',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'days_until_due',
					'columnName' => 'field' 
				),
				'footcell_field8' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'cell_dpreview' => array(
					'model' => 'cell_dpreview',
					'items' => array( 
						'details_preview2',
						'details_preview' 
					) 
				),
				'headcell_checkbox' => array(
					'model' => 'headcell_checkbox',
					'items' => array( 
						'grid_checkbox_head' 
					) 
				),
				'cell_checkbox' => array(
					'model' => 'cell_checkbox',
					'items' => array( 
						'grid_checkbox' 
					) 
				),
				'footcell_checkbox' => array(
					'model' => 'footcell_checkbox',
					'items' => array( 
						 
					) 
				),
				'headcell_details' => array(
					'model' => 'headcell_details',
					'items' => array( 
						 
					) 
				),
				'cell_details' => array(
					'model' => 'cell_details',
					'items' => array( 
						'grid_alldetails_link',
						'grid_details_link',
						'grid_details_link1' 
					) 
				),
				'footcell_details' => array(
					'model' => 'footcell_details',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'add' => array(
			'type' => 'add' 
		),
		'details_found' => array(
			'type' => 'details_found' 
		),
		'page_size' => array(
			'type' => 'page_size' 
		),
		'print_panel' => array(
			'type' => 'print_panel',
			'items' => array( 
				'print_scope',
				'print_details',
				'print_records',
				'print_button' 
			) 
		),
		'print_scope' => array(
			'type' => 'print_scope' 
		),
		'print_details' => array(
			'type' => 'print_details',
			'tables' => array(
				'12308' => true,
				'12420' => true 
			) 
		),
		'print_records' => array(
			'type' => 'print_records' 
		),
		'print_button' => array(
			'type' => 'print_button' 
		),
		'pagination' => array(
			'type' => 'pagination' 
		),
		'search_panel_field' => array(
			'field' => 'project_id',
			'type' => 'search_panel_field' 
		),
		'search_panel_field8' => array(
			'field' => 'days_until_due',
			'type' => 'search_panel_field' 
		),
		'search_panel_field7' => array(
			'field' => 'due_date',
			'type' => 'search_panel_field' 
		),
		'search_panel_field6' => array(
			'field' => 'phase_label',
			'type' => 'search_panel_field' 
		),
		'search_panel_field5' => array(
			'field' => 'phase_code',
			'type' => 'search_panel_field' 
		),
		'search_panel_field4' => array(
			'field' => 'phase_id',
			'type' => 'search_panel_field' 
		),
		'search_panel_field2' => array(
			'field' => 'designer_name',
			'type' => 'search_panel_field' 
		),
		'search_panel_field3' => array(
			'field' => 'designer_id',
			'type' => 'search_panel_field' 
		),
		'search_panel_field1' => array(
			'field' => 'project_name',
			'type' => 'search_panel_field' 
		),
		'export_selected' => array(
			'type' => 'export_selected' 
		),
		'-1' => array(
			'type' => '-' 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'-' => array(
			'type' => '-' 
		),
		'export' => array(
			'type' => 'export' 
		),
		'-2' => array(
			'type' => '-' 
		),
		'import' => array(
			'type' => 'import' 
		),
		'breadcrumb' => array(
			'type' => 'breadcrumb' 
		),
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'simple_search' => array(
			'type' => 'simple_search' 
		),
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field',
				'search_panel_field8',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field2',
				'search_panel_field3',
				'search_panel_field1' 
			),
			'_flexiblePanel' => true 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'export_selected',
				'-3',
				'show_search_panel',
				'hide_search_panel',
				'-',
				'export',
				'-2',
				'import' 
			) 
		),
		'master_info' => array(
			'type' => 'master_info',
			'tables' => array(
				'12277' => 'true' 
			) 
		),
		'simple_grid_field1' => array(
			'field' => 'project_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field10' => array(
			'type' => 'grid_field_label',
			'field' => 'project_name' 
		),
		'simple_grid_field2' => array(
			'field' => 'designer_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field12' => array(
			'type' => 'grid_field_label',
			'field' => 'designer_name' 
		),
		'simple_grid_field5' => array(
			'field' => 'phase_code',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field14' => array(
			'type' => 'grid_field_label',
			'field' => 'phase_code',
			'label' => array(
				'field' => 'phase_code',
				'table' => 'projects view',
				'type' => 3 
			) 
		),
		'simple_grid_field7' => array(
			'field' => 'due_date',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => true 
		),
		'simple_grid_field16' => array(
			'type' => 'grid_field_label',
			'field' => 'due_date' 
		),
		'simple_grid_field8' => array(
			'field' => 'days_until_due',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => true 
		),
		'simple_grid_field17' => array(
			'type' => 'grid_field_label',
			'field' => 'days_until_due' 
		),
		'details_preview' => array(
			'type' => 'details_preview',
			'table' => 12308,
			'items' => array( 
				 
			),
			'proceedLink' => true,
			'popup' => false,
			'pageId' => 'list1' 
		),
		'details_preview1' => array(
			'type' => 'deleted',
			'itemId' => 'details_preview1' 
		),
		'details_preview2' => array(
			'type' => 'details_preview',
			'table' => 12420,
			'items' => array( 
				 
			),
			'proceedLink' => true,
			'popup' => false,
			'pageId' => 'list',
			'hideEmptyPreview' => false 
		),
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		),
		'grid_alldetails_link' => array(
			'type' => 'grid_alldetails_link' 
		),
		'grid_details_link' => array(
			'type' => 'grid_details_link',
			'table' => 12308,
			'badge' => true,
			'hideIfNone' => false,
			'showCount' => true 
		),
		'grid_details_link1' => array(
			'type' => 'grid_details_link',
			'table' => 12420,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'loginform_login' => array(
			'type' => 'deleted',
			'itemId' => 'loginform_login' 
		),
		'username_button' => array(
			'type' => 'deleted',
			'itemId' => 'username_button' 
		),
		'username_button1' => array(
			'type' => 'username_button',
			'items' => array( 
				'logout_link' 
			) 
		),
		'loginform_login1' => array(
			'type' => 'loginform_login',
			'popup' => false 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'-3' => array(
			'type' => '-' 
		) 
	),
	'dbProps' => array(
		 
	),
	'version' => 13,
	'pageWidth' => 'compact',
	'pageAlign' => 'center',
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'pageCSS' => '/* Put  your custom CSS code here */

/* Compact width override (loads after theme) */
@media (min-width: 768px) {
  /* Standard/small layout: match Cerulean\'s own selector but be explicit about children */
  .r-small-page[data-body-width="compact"] > .container,
  .r-small-page[data-body-width="compact"] > .r-body,
  .r-small-page[data-body-width="compact"] > .r-content,
  .r-small-page[data-body-width="compact"] > .r-data-block,
  .r-small-page[data-body-width="compact"] .container {
    max-width: 1200px;
    width: 1200px;
    margin-left: auto;
    margin-right: auto;
  }

  /* If the page uses Topbar layout, this is the width gate */
  .r-topbar-page .r-body .r-content .r-data-block[data-body-width="compact"] {
    width: 1200px;
    max-width: 1200px;
    flex: 0 0 1200px; /* keeps it from shrinking in flex */
    margin-left: auto;
    margin-right: auto;
  }
}
',
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>