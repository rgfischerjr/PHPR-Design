<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['phase_catalog'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
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
			'name' => 'phase_name',
			'type' => 200,
			'size' => 100,
			'scale' => 0,
			'typeName' => 'varchar(100)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'default_long_duration',
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
			'name' => 'sequence',
			'type' => 16,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'tinyint',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'phase_code' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'phase_catalog' 
);
?>