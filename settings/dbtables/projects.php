<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['projects'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'fk_projects_creator',
			'refTable' => 'users',
			'refSchema' => '',
			'columns' => array( 
				array(
					'column' => 'created_by',
					'ref_column' => 'user_id' 
				) 
			) 
		),
		array(
			'name' => 'fk_projects_designer',
			'refTable' => 'users',
			'refSchema' => '',
			'columns' => array( 
				array(
					'column' => 'designer_id',
					'ref_column' => 'user_id' 
				) 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'project_id',
			'type' => 3,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'int',
			'nullable' => false,
			'autoinc' => true,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'project_name',
			'type' => 200,
			'size' => 150,
			'scale' => 0,
			'typeName' => 'varchar(150)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'contract_date',
			'type' => 7,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'date',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'designer_id',
			'type' => 3,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'int',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'created_by',
			'type' => 3,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'int',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'created_at',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => 'CURRENT_TIMESTAMP',
			'defaultValue' => 'CURRENT_TIMESTAMP' 
		),
		array(
			'name' => 'notes',
			'type' => 200,
			'size' => 500,
			'scale' => 0,
			'typeName' => 'varchar(500)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'project_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'projects' 
);
?>