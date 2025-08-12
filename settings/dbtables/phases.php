<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['phases'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		array(
			'name' => 'fk_phases_project',
			'refTable' => 'projects',
			'refSchema' => '',
			'del_rule' => 1,
			'upd_rule' => 1,
			'columns' => array( 
				array(
					'column' => 'project_id',
					'ref_column' => 'project_id' 
				) 
			) 
		) 
	),
	'fields' => array( 
		array(
			'name' => 'phase_id',
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
			'name' => 'project_id',
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
			'name' => 'phase_code',
			'type' => 129,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'enum(\'TF\',\'SD\',\'QA_QC1\',\'DD\',\'QA_QC2\',\'PP\')',
			'enumValues' => array( 
				'TF',
				'SD',
				'QA_QC1',
				'DD',
				'QA_QC2',
				'PP' 
			),
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'sequence',
			'type' => 16,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'tinyint',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'long_duration',
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
			'name' => 'due_date',
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
			'name' => 'completed_date',
			'type' => 7,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'date',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'notes',
			'type' => 200,
			'size' => 250,
			'scale' => 0,
			'typeName' => 'varchar(250)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'phase_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'phases' 
);
?>