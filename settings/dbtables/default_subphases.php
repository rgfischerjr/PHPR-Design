<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['default_subphases'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'default_id',
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
			'name' => 'subphase_name',
			'type' => 200,
			'size' => 255,
			'scale' => 0,
			'typeName' => 'varchar(255)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'sort_order',
			'type' => 3,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'int',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '100',
			'defaultValue' => '100' 
		) 
	),
	'primaryKeys' => array( 
		'default_id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'default_subphases' 
);
?>