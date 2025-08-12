<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => true,
		'detailsAdd' => true,
		'inlineEdit' => true,
		'reorderRows' => false,
		'addToBottom' => true,
		'delete' => false,
		'updateSelected' => false,
		'addInPopup' => null,
		'editInPopup' => null,
		'viewInPopup' => null,
		'clickSort' => true,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'fieldFilter' => false,
		'hideNumberOfRecords' => false 
	),
	'master' => array(
		'phases' => array(
			'preview' => true 
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
		'subphase_id' => array(
			'totalsType' => '' 
		),
		'project_id' => array(
			'totalsType' => '' 
		),
		'phase_id' => array(
			'totalsType' => '' 
		),
		'subphase_name' => array(
			'totalsType' => '' 
		),
		'sort_order' => array(
			'totalsType' => '' 
		),
		'is_default' => array(
			'totalsType' => '' 
		),
		'notes' => array(
			'totalsType' => '' 
		),
		'start_date' => array(
			'totalsType' => '' 
		),
		'start_checked' => array(
			'totalsType' => '' 
		),
		'completed_date' => array(
			'totalsType' => '' 
		),
		'completed_checked' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'subphase_name',
			'sort_order',
			'start_checked',
			'start_date',
			'completed_checked',
			'completed_date',
			'notes' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'subphase_id',
			'completed_checked',
			'completed_date',
			'start_checked',
			'start_date',
			'notes',
			'is_default',
			'sort_order',
			'subphase_name',
			'phase_id',
			'project_id' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			'subphase_name',
			'sort_order',
			'notes',
			'start_checked',
			'completed_checked' 
		),
		'inlineEditFields' => array( 
			'start_date',
			'start_checked',
			'completed_date',
			'completed_checked' 
		),
		'fieldItems' => array(
			'subphase_name' => array( 
				'simple_grid_field3',
				'simple_grid_field9' 
			),
			'sort_order' => array( 
				'simple_grid_field4',
				'simple_grid_field10' 
			),
			'notes' => array( 
				'grid_field',
				'grid_field_label' 
			),
			'start_date' => array( 
				'grid_field1',
				'grid_field_label1' 
			),
			'start_checked' => array( 
				'grid_field2',
				'grid_field_label2' 
			),
			'completed_date' => array( 
				'grid_field3',
				'grid_field_label3' 
			),
			'completed_checked' => array( 
				'grid_field4',
				'grid_field_label4' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => true 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'inline_add',
					'inline_save_all',
					'inline_cancel_all',
					'details_found',
					'page_size',
					'print_panel' 
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
					'search_panel',
					'filter_panel' 
				),
				'top' => array( 
					'breadcrumb',
					'master_info' 
				),
				'grid' => array( 
					'simple_grid_field9',
					'simple_grid_field3',
					'simple_grid_field10',
					'simple_grid_field4',
					'grid_field_label2',
					'grid_field2',
					'grid_field_label1',
					'grid_field1',
					'grid_field_label4',
					'grid_field4',
					'grid_field_label',
					'grid_field',
					'grid_field_label3',
					'grid_field3',
					'grid_inline_edit',
					'grid_inline_save',
					'grid_inline_cancel',
					'grid_alldetails_link' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'inlineadd_link',
					'saveall_link',
					'cancelall_link',
					'details_found',
					'recsPerPage',
					'print_friendly' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'top' => array( 
					'breadcrumb',
					'mastertable_block' 
				) 
			),
			'itemForms' => array(
				'inline_add' => 'above-grid',
				'inline_save_all' => 'above-grid',
				'inline_cancel_all' => 'above-grid',
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'print_panel' => 'above-grid',
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
				'filter_panel' => 'left',
				'breadcrumb' => 'top',
				'master_info' => 'top',
				'simple_grid_field9' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field4' => 'grid',
				'grid_field_label2' => 'grid',
				'grid_field2' => 'grid',
				'grid_field_label1' => 'grid',
				'grid_field1' => 'grid',
				'grid_field_label4' => 'grid',
				'grid_field4' => 'grid',
				'grid_field_label' => 'grid',
				'grid_field' => 'grid',
				'grid_field_label3' => 'grid',
				'grid_field3' => 'grid',
				'grid_inline_edit' => 'grid',
				'grid_inline_save' => 'grid',
				'grid_inline_cancel' => 'grid',
				'grid_alldetails_link' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'grid_field_label2' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'grid_field_label1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field9' 
				),
				'grid_field_label4' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field11' 
				),
				'grid_field_label' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field13' 
				),
				'grid_field_label3' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field9' 
				),
				'grid_inline_edit' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_inline_save' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_inline_cancel' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_alldetails_link' => array(
					'location' => 'grid',
					'cellId' => 'headcell_details2' 
				) 
			),
			'itemVisiblity' => array(
				'print_panel' => 5,
				'menu' => 3,
				'simple_search' => 3,
				'search_panel' => 5,
				'list_options' => 3,
				'username_button1' => 3,
				'loginform_login1' => 3,
				'filter_panel' => 3 
			) 
		),
		'itemsByType' => array(
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
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field3',
				'search_panel_field2',
				'search_panel_field1',
				'search_panel_field6',
				'search_panel_field7',
				'search_panel_field8',
				'search_panel_field9',
				'search_panel_field10' 
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
			'deleted' => array( 
				'loginform_login',
				'username_button' 
			),
			'username_button' => array( 
				'username_button1' 
			),
			'loginform_login' => array( 
				'loginform_login1' 
			),
			'logout_link' => array( 
				'logout_link' 
			),
			'grid_field' => array( 
				'simple_grid_field3',
				'simple_grid_field4',
				'grid_field',
				'grid_field1',
				'grid_field2',
				'grid_field3',
				'grid_field4' 
			),
			'grid_field_label' => array( 
				'simple_grid_field9',
				'simple_grid_field10',
				'grid_field_label',
				'grid_field_label1',
				'grid_field_label2',
				'grid_field_label3',
				'grid_field_label4' 
			),
			'grid_alldetails_link' => array( 
				'grid_alldetails_link' 
			),
			'edit_selected' => array( 
				'edit_selected' 
			),
			'grid_inline_edit' => array( 
				'grid_inline_edit' 
			),
			'grid_inline_save' => array( 
				'grid_inline_save' 
			),
			'grid_inline_cancel' => array( 
				'grid_inline_cancel' 
			),
			'inline_save_all' => array( 
				'inline_save_all' 
			),
			'inline_cancel_all' => array( 
				'inline_cancel_all' 
			),
			'inline_add' => array( 
				'inline_add' 
			),
			'filter_panel' => array( 
				'filter_panel' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_icons' => array(
						'cols' => array( 
							0 
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
					'headcell_details1' => array(
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
					'headcell_field3' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'subphase_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'sort_order_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
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
							'start_checked_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field6' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'start_date_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'completed_checked_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'completed_date_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'notes_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'inlineedit_column',
							'inline_save',
							'inline_cancel' 
						),
						'items' => array( 
							'grid_inline_edit',
							'grid_inline_save',
							'grid_inline_cancel' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_details2' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'grid_alldetails_link' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'subphase_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'sort_order_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
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
							'start_checked_fieldcolumn' 
						),
						'items' => array( 
							'grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field9' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'start_date_fieldcolumn' 
						),
						'items' => array( 
							'grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field11' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'completed_checked_fieldcolumn' 
						),
						'items' => array( 
							'grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field9' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'completed_date_fieldcolumn' 
						),
						'items' => array( 
							'grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field13' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'notes_fieldcolumn' 
						),
						'items' => array( 
							'grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_icons1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_details3' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_dpreview' => array(
						'cols' => array( 
							2,
							3 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field10' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field12' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field11' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field14' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_icons' => array(
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
					'headcell_details4' => array(
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
					'footcell_field3' => array(
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
					'footcell_field4' => array(
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
					),
					'headcell_field12' => array(
						'cols' => array( 
							7 
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
					'footcell_field9' => array(
						'cols' => array( 
							8 
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
				'width' => 9,
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
	'default' => 1,
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
						'inline_add',
						'inline_save_all',
						'inline_cancel_all' 
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
				),
				array(
					'cells' => array( 
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
						'search_panel' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'filter_panel' 
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
							'cell' => 'headcell_icons' 
						),
						array(
							'cell' => 'headcell_details1' 
						),
						array(
							'cell' => 'headcell_field3' 
						),
						array(
							'cell' => 'headcell_field4' 
						),
						array(
							'cell' => 'headcell_field5' 
						),
						array(
							'cell' => 'headcell_field6' 
						),
						array(
							'cell' => 'headcell_field7' 
						),
						array(
							'cell' => 'headcell_field' 
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
							'cell' => 'cell_icons' 
						),
						array(
							'cell' => 'headcell_details2' 
						),
						array(
							'cell' => 'cell_field3' 
						),
						array(
							'cell' => 'cell_field4' 
						),
						array(
							'cell' => 'cell_field5' 
						),
						array(
							'cell' => 'cell_field9' 
						),
						array(
							'cell' => 'cell_field11' 
						),
						array(
							'cell' => 'headcell_field9' 
						),
						array(
							'cell' => 'cell_field13' 
						) 
					) 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_icons1' 
						),
						array(
							'cell' => 'headcell_details3' 
						),
						array(
							'cell' => 'cell_dpreview',
							'colspan' => 2 
						),
						array(
							'cell' => 'cell_field8' 
						),
						array(
							'cell' => 'cell_field10' 
						),
						array(
							'cell' => 'cell_field12' 
						),
						array(
							'cell' => 'headcell_field11' 
						),
						array(
							'cell' => 'cell_field14' 
						) 
					),
					'section' => 'body' 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_icons' 
						),
						array(
							'cell' => 'headcell_details4' 
						),
						array(
							'cell' => 'footcell_field3' 
						),
						array(
							'cell' => 'footcell_field4' 
						),
						array(
							'cell' => 'footcell_field5' 
						),
						array(
							'cell' => 'footcell_field7' 
						),
						array(
							'cell' => 'footcell_field8' 
						),
						array(
							'cell' => 'headcell_field12' 
						),
						array(
							'cell' => 'footcell_field9' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field3' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'subphase_name',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'subphase_name',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field4' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'sort_order',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'sort_order',
					'columnName' => 'field' 
				),
				'footcell_field4' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'cell_dpreview' => array(
					'model' => 'cell_dpreview',
					'items' => array( 
						 
					) 
				),
				'headcell_field5' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label2' 
					),
					'field' => 'start_checked',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field2' 
					),
					'field' => 'start_checked',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						 
					) 
				),
				'footcell_field5' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field6' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label1' 
					),
					'field' => 'start_date',
					'columnName' => 'field' 
				),
				'cell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field1' 
					),
					'field' => 'start_date',
					'columnName' => 'field' 
				),
				'cell_field10' => array(
					'model' => 'cell_field',
					'items' => array( 
						 
					) 
				),
				'footcell_field7' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field7' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label4' 
					),
					'field' => 'completed_checked',
					'columnName' => 'field' 
				),
				'cell_field11' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field4' 
					),
					'field' => 'completed_checked',
					'columnName' => 'field' 
				),
				'cell_field12' => array(
					'model' => 'cell_field',
					'items' => array( 
						 
					) 
				),
				'footcell_field8' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field8' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label' 
					),
					'field' => 'notes',
					'columnName' => 'field' 
				),
				'cell_field13' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field' 
					),
					'field' => 'notes',
					'columnName' => 'field' 
				),
				'cell_field14' => array(
					'model' => 'cell_field',
					'items' => array( 
						 
					) 
				),
				'footcell_field9' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label3' 
					),
					'field' => 'completed_date',
					'columnName' => 'field' 
				),
				'headcell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field3' 
					),
					'field' => 'completed_date',
					'columnName' => 'field' 
				),
				'headcell_field11' => array(
					'model' => 'cell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field12' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_icons' => array(
					'model' => 'headcell_icons',
					'items' => array( 
						 
					) 
				),
				'cell_icons' => array(
					'model' => 'cell_icons',
					'items' => array( 
						'grid_inline_edit',
						'grid_inline_save',
						'grid_inline_cancel' 
					) 
				),
				'cell_icons1' => array(
					'model' => 'cell_icons',
					'items' => array( 
						 
					) 
				),
				'footcell_icons' => array(
					'model' => 'footcell_icons',
					'items' => array( 
						 
					) 
				),
				'headcell_details1' => array(
					'model' => 'headcell_details',
					'items' => array( 
						 
					) 
				),
				'headcell_details2' => array(
					'model' => 'cell_details',
					'items' => array( 
						'grid_alldetails_link' 
					) 
				),
				'headcell_details3' => array(
					'model' => 'cell_dpreview',
					'items' => array( 
						 
					) 
				),
				'headcell_details4' => array(
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
			'field' => 'subphase_id',
			'type' => 'search_panel_field' 
		),
		'search_panel_field5' => array(
			'field' => 'is_default',
			'type' => 'search_panel_field' 
		),
		'search_panel_field4' => array(
			'field' => 'sort_order',
			'type' => 'search_panel_field' 
		),
		'search_panel_field3' => array(
			'field' => 'subphase_name',
			'type' => 'search_panel_field' 
		),
		'search_panel_field2' => array(
			'field' => 'phase_id',
			'type' => 'search_panel_field' 
		),
		'search_panel_field1' => array(
			'field' => 'project_id',
			'type' => 'search_panel_field' 
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
		'-2' => array(
			'type' => '-' 
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
				'search_panel_field10',
				'search_panel_field9',
				'search_panel_field8',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field3',
				'search_panel_field2',
				'search_panel_field1' 
			),
			'_flexiblePanel' => true 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'edit_selected',
				'-3',
				'show_search_panel',
				'hide_search_panel' 
			) 
		),
		'master_info' => array(
			'type' => 'master_info',
			'tables' => array(
				'12420' => 'true' 
			) 
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
		'simple_grid_field3' => array(
			'field' => 'subphase_name',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => false 
		),
		'simple_grid_field9' => array(
			'type' => 'grid_field_label',
			'field' => 'subphase_name',
			'clickSort' => true 
		),
		'simple_grid_field4' => array(
			'field' => 'sort_order',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => false 
		),
		'simple_grid_field10' => array(
			'type' => 'grid_field_label',
			'field' => 'sort_order',
			'label' => array(
				'field' => 'sort_order',
				'table' => 'subphases',
				'type' => 3 
			),
			'clickSort' => true 
		),
		'grid_alldetails_link' => array(
			'type' => 'grid_alldetails_link',
			'icon' => array(
				'glyph' => 'th-list' 
			) 
		),
		'grid_field' => array(
			'field' => 'notes',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => false 
		),
		'grid_field_label' => array(
			'type' => 'grid_field_label',
			'field' => 'notes',
			'clickSort' => true 
		),
		'search_panel_field6' => array(
			'field' => 'notes',
			'type' => 'search_panel_field' 
		),
		'grid_field1' => array(
			'field' => 'start_date',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => true 
		),
		'grid_field_label1' => array(
			'type' => 'grid_field_label',
			'field' => 'start_date',
			'label' => array(
				'field' => 'start_date',
				'table' => 'subphases',
				'type' => 3 
			),
			'clickSort' => true 
		),
		'grid_field2' => array(
			'field' => 'start_checked',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label2' => array(
			'type' => 'grid_field_label',
			'field' => 'start_checked',
			'label' => array(
				'field' => 'start_checked',
				'table' => 'subphases',
				'type' => 3 
			),
			'clickSort' => true 
		),
		'grid_field3' => array(
			'field' => 'completed_date',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => true 
		),
		'grid_field_label3' => array(
			'type' => 'grid_field_label',
			'field' => 'completed_date',
			'label' => array(
				'field' => 'completed_date',
				'table' => 'subphases',
				'type' => 3 
			),
			'clickSort' => true 
		),
		'grid_field4' => array(
			'field' => 'completed_checked',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'grid_field_label4' => array(
			'type' => 'grid_field_label',
			'field' => 'completed_checked',
			'label' => array(
				'field' => 'completed_checked',
				'table' => 'subphases',
				'type' => 3 
			),
			'clickSort' => true 
		),
		'search_panel_field7' => array(
			'field' => 'start_date',
			'type' => 'search_panel_field' 
		),
		'search_panel_field8' => array(
			'field' => 'start_checked',
			'type' => 'search_panel_field' 
		),
		'search_panel_field9' => array(
			'field' => 'completed_date',
			'type' => 'search_panel_field' 
		),
		'search_panel_field10' => array(
			'field' => 'completed_checked',
			'type' => 'search_panel_field' 
		),
		'edit_selected' => array(
			'type' => 'edit_selected' 
		),
		'grid_inline_edit' => array(
			'type' => 'grid_inline_edit' 
		),
		'grid_inline_save' => array(
			'type' => 'grid_inline_save' 
		),
		'grid_inline_cancel' => array(
			'type' => 'grid_inline_cancel' 
		),
		'inline_save_all' => array(
			'type' => 'inline_save_all' 
		),
		'inline_cancel_all' => array(
			'type' => 'inline_cancel_all' 
		),
		'inline_add' => array(
			'type' => 'inline_add',
			'icon' => array(
				 
			) 
		),
		'filter_panel' => array(
			'type' => 'filter_panel',
			'items' => array( 
				 
			) 
		),
		'-3' => array(
			'type' => '-' 
		) 
	),
	'dbProps' => array(
		 
	),
	'version' => 13,
	'pageAlign' => 'center',
	'reorderRows' => false,
	'reorderRowsField' => '',
	'addToBottom' => true,
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