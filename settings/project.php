<?php
$runnerProjectSettings = array(
	'restAPIReturnEncodedBinary' => true,
	'restAPIAuthType' => 'basic',
	'menuIds' => array( 
		'main' 
	),
	'tablesAdvSecurity' => array(
		'users' => array(
			'table' => 12277 
		),
		'subphases' => array(
			'table' => 12308 
		),
		'settings' => array(
			'table' => 12352 
		),
		'projects' => array(
			'table' => 12369 
		),
		'phase_catalog' => array(
			'table' => 12400 
		),
		'phases' => array(
			'table' => 12420 
		),
		'default_subphases' => array(
			'table' => 12454 
		),
		'company_holidays' => array(
			'table' => 12474 
		),
		'calendar_dim' => array(
			'table' => 12488 
		),
		'projects view' => array(
			'table' => 12520 
		) 
	),
	'styleOverrides' => array(
		'projects1_list' => true,
		'undefined_list' => true,
		'subphases_list' => true,
		'subphases_list1' => true 
	),
	'hasCustomFunctionsJs' => true,
	'userTableKeys' => array( 
		'user_id' 
	),
	'phpSpreadsheet' => false,
	'ext' => 'php',
	'security' => array(
		'projectName' => '',
		'loginDataSource' => 'users',
		'loginForm' => 0,
		'dynamicPermissions' => false,
		'dpTablePrefix' => '',
		'dpTableConnId' => '',
		'providers' => array( 
			array(
				'type' => '%hardcoded',
				'name' => 'hardcoded',
				'active' => true,
				'label' => array(
					'text' => 'Hardcoded',
					'type' => 0 
				),
				'code' => '01',
				'username' => 'admin',
				'password' => 'admin' 
			) 
		),
		'enabled' => true,
		'advancedSecurityAvailable' => false,
		'userGroupsAvailable' => false,
		'hardcodedLogin' => true,
		'defaultProviderCode' => '01',
		'adOnlyLogin' => false,
		'sessionControl' => array(
			'lifeTime' => 15,
			'sessionName' => 'Pvq0jcSHFh4S19AsrQo8',
			'JWTSecret' => 'Wig3F5Q1x6xMGbxqBy7T' 
		),
		'registration' => array(
			'remindMethod' => 0,
			'hashAlgorithm' => 0,
			'passwordValidation' => array(
				'strong' => false,
				'minimumLength' => 8,
				'uniqueCharacters' => 4,
				'digitsAndSymbols' => 2,
				'upperAndLowerCase' => false 
			),
			'registerPage' => false 
		),
		'captchaSettings' => array(
			'captchaType' => 0,
			'siteKey' => '',
			'secretKey' => '',
			'passesCount' => 5 
		),
		'emailSettings' => array(
			'fromEmail' => '',
			'usePHPDefinedSMTP' => false,
			'useBuiltInMailer' => false,
			'SMTPServer' => 'localhost',
			'SMTPPort' => 25,
			'SMTPUser' => '',
			'SMTPPassword' => '',
			'securityProtocol' => 0 
		),
		'advancedSecurity' => array(
			'allowGuestLogin' => false 
		),
		'auditAndLocking' => array(
			'loggingMode' => 1,
			'loggingTable' => array(
				'connId' => 'conn',
				'table' => 'design__audit' 
			),
			'loggingFile' => 'audit.log',
			'logSecurityActions' => false,
			'lockAfterUnsuccessfulLogin' => false,
			'enableLocking' => false,
			'lockingTable' => array(
				'connId' => 'conn',
				'table' => '˂Create new˃' 
			),
			'tables' => array(
				'users' => array(
					'logModifications' => true,
					'logFieldValues' => true 
				),
				'subphases' => array(
					'logModifications' => true,
					'logFieldValues' => true 
				),
				'settings' => array(
					'logModifications' => true,
					'logFieldValues' => true 
				),
				'projects' => array(
					'logModifications' => true,
					'logFieldValues' => true 
				),
				'phase_catalog' => array(
					'logModifications' => true,
					'logFieldValues' => true 
				),
				'phases' => array(
					'logModifications' => true,
					'logFieldValues' => true 
				),
				'default_subphases' => array(
					'logModifications' => true,
					'logFieldValues' => true 
				),
				'company_holidays' => array(
					'logModifications' => true,
					'logFieldValues' => true 
				),
				'calendar_dim' => array(
					'logModifications' => true,
					'logFieldValues' => true 
				),
				'projects view' => array(
					'logModifications' => true,
					'logFieldValues' => true 
				),
				'' => array(
					'logModifications' => true,
					'logFieldValues' => true 
				) 
			) 
		),
		'twoFactorSettings' => array(
			'available' => false,
			'required' => false,
			'enable' => true,
			'remember' => true,
			'types' => array(
				 
			),
			'twoFactorField' => '',
			'emailField' => '',
			'phoneField' => '',
			'codeField' => '',
			'projectName' => '' 
		),
		'staticPermissions' => array(
			'groups' => array(
				'<Default>' => array(
					'permissions' => array(
						'users' => array(
							'mask' => 'ADESPI',
							'table' => 'users',
							'restrictedPages' => array(
								 
							) 
						),
						'subphases' => array(
							'mask' => 'ADESPI',
							'table' => 'subphases',
							'restrictedPages' => array(
								 
							) 
						),
						'settings' => array(
							'mask' => 'ADESPI',
							'table' => 'settings',
							'restrictedPages' => array(
								 
							) 
						),
						'subphase_status' => array(
							'mask' => 'ADESPI',
							'table' => 'subphase_status',
							'restrictedPages' => array(
								 
							) 
						),
						'projects' => array(
							'mask' => 'ADESPI',
							'table' => 'projects',
							'restrictedPages' => array(
								 
							) 
						),
						'phase_catalog' => array(
							'mask' => 'ADESPI',
							'table' => 'phase_catalog',
							'restrictedPages' => array(
								 
							) 
						),
						'phases' => array(
							'mask' => 'ADESPI',
							'table' => 'phases',
							'restrictedPages' => array(
								 
							) 
						),
						'default_subphases' => array(
							'mask' => 'ADESPI',
							'table' => 'default_subphases',
							'restrictedPages' => array(
								 
							) 
						),
						'company_holidays' => array(
							'mask' => 'ADESPI',
							'table' => 'company_holidays',
							'restrictedPages' => array(
								 
							) 
						),
						'calendar_dim' => array(
							'mask' => 'ADESPI',
							'table' => 'calendar_dim',
							'restrictedPages' => array(
								 
							) 
						),
						'projects view' => array(
							'mask' => 'ADESPI',
							'table' => 'projects view',
							'restrictedPages' => array(
								 
							) 
						),
						'<global>' => array(
							'mask' => 'ADESPI',
							'table' => '<global>',
							'restrictedPages' => array(
								 
							) 
						) 
					),
					'admin' => false,
					'username' => '<Default>' 
				) 
			) 
		),
		'hardcodedProvider' => array(
			'type' => '%hardcoded',
			'name' => 'hardcoded',
			'active' => true,
			'label' => array(
				'text' => 'Hardcoded',
				'type' => 0 
			),
			'code' => '01',
			'username' => 'admin',
			'password' => 'admin' 
		),
		'adAdminGroups' => array( 
			 
		),
		'showUserSource' => false,
		'dbProviderCodes' => array( 
			 
		) 
	),
	'notifications' => array(
		'enabled' => false,
		'table' => array(
			'connId' => '',
			'table' => '' 
		) 
	),
	'allTables' => array(
		'users' => array(
			'gid' => 12277,
			'name' => 'users',
			'shortName' => 'users',
			'type' => 0,
			'caption' => array(
				'English' => 'Users' 
			),
			'connId' => 'conn',
			'color' => '4682b4',
			'originalTable' => 'users' 
		),
		'subphases' => array(
			'gid' => 12308,
			'name' => 'subphases',
			'shortName' => 'subphases',
			'type' => 0,
			'caption' => array(
				'English' => 'Subphases' 
			),
			'connId' => 'conn',
			'color' => 'cd5c5c',
			'originalTable' => 'subphases' 
		),
		'settings' => array(
			'gid' => 12352,
			'name' => 'settings',
			'shortName' => 'settings',
			'type' => 0,
			'caption' => array(
				'English' => 'Settings' 
			),
			'connId' => 'conn',
			'color' => '00c2c5',
			'originalTable' => 'settings' 
		),
		'projects' => array(
			'gid' => 12369,
			'name' => 'projects',
			'shortName' => 'projects',
			'type' => 0,
			'caption' => array(
				'English' => 'Projects' 
			),
			'connId' => 'conn',
			'color' => '3cb371',
			'originalTable' => 'projects' 
		),
		'phase_catalog' => array(
			'gid' => 12400,
			'name' => 'phase_catalog',
			'shortName' => 'phase_catalog',
			'type' => 0,
			'caption' => array(
				'English' => 'Phase Catalog' 
			),
			'connId' => 'conn',
			'color' => 'd2af80',
			'originalTable' => 'phase_catalog' 
		),
		'phases' => array(
			'gid' => 12420,
			'name' => 'phases',
			'shortName' => 'phases',
			'type' => 0,
			'caption' => array(
				'English' => 'Phases' 
			),
			'connId' => 'conn',
			'color' => '71e414',
			'originalTable' => 'phases' 
		),
		'default_subphases' => array(
			'gid' => 12454,
			'name' => 'default_subphases',
			'shortName' => 'default_subphases',
			'type' => 0,
			'caption' => array(
				'English' => 'Default Subphases' 
			),
			'connId' => 'conn',
			'color' => 'edca00',
			'originalTable' => 'default_subphases' 
		),
		'company_holidays' => array(
			'gid' => 12474,
			'name' => 'company_holidays',
			'shortName' => 'company_holidays',
			'type' => 0,
			'caption' => array(
				'English' => 'Company Holidays' 
			),
			'connId' => 'conn',
			'color' => 'd2af80',
			'originalTable' => 'company_holidays' 
		),
		'calendar_dim' => array(
			'gid' => 12488,
			'name' => 'calendar_dim',
			'shortName' => 'calendar_dim',
			'type' => 0,
			'caption' => array(
				'English' => 'Calendar Dim' 
			),
			'connId' => 'conn',
			'color' => 'b22222',
			'originalTable' => 'calendar_dim' 
		),
		'projects view' => array(
			'gid' => 12520,
			'name' => 'projects view',
			'shortName' => 'projects1',
			'type' => 1,
			'caption' => array(
				'English' => 'Projects View' 
			),
			'connId' => 'conn',
			'color' => '3cb371',
			'originalTable' => 'projects' 
		) 
	),
	'tablesByShort' => array(
		'users' => 'users',
		'subphases' => 'subphases',
		'settings' => 'settings',
		'projects' => 'projects',
		'phase_catalog' => 'phase_catalog',
		'phases' => 'phases',
		'default_subphases' => 'default_subphases',
		'company_holidays' => 'company_holidays',
		'calendar_dim' => 'calendar_dim',
		'projects1' => 'projects view' 
	),
	'tablesByGood' => array(
		'users' => 'users',
		'subphases' => 'subphases',
		'settings' => 'settings',
		'projects' => 'projects',
		'phase_catalog' => 'phase_catalog',
		'phases' => 'phases',
		'default_subphases' => 'default_subphases',
		'company_holidays' => 'company_holidays',
		'calendar_dim' => 'calendar_dim',
		'projects_view' => 'projects view' 
	),
	'events' => array( 
		array(
			'gid' => 12272,
			'type' => 'EVENT_BUTTON',
			'name' => 'Delete' 
		),
		array(
			'gid' => 12273,
			'type' => 'EVENT_BUTTON',
			'name' => 'MarkDone' 
		),
		array(
			'gid' => 12274,
			'type' => 'EVENT_BUTTON',
			'name' => 'MarkDown' 
		),
		array(
			'gid' => 12275,
			'type' => 'EVENT_FIELD',
			'name' => 'start_date_checked' 
		),
		array(
			'gid' => 12276,
			'type' => 'EVENT_FIELD',
			'name' => 'completed_date_checked' 
		) 
	),
	'languages' => array( 
		array(
			'name' => 'English',
			'nativeName' => 'English',
			'rtl' => false,
			'filename' => 'English.lng' 
		) 
	),
	'languageNames' => array( 
		'English' 
	),
	'defaultLanguage' => 'English',
	'detectDefaultLanguage' => true,
	'charset' => 'utf-8',
	'codepage' => 65001,
	'defaultConnID' => 'conn',
	'wrConnectionID' => '',
	'settingsTable' => array(
		'connId' => '',
		'table' => '' 
	),
	'wizardBuild' => '43634',
	'projectBuild' => 'aMTLyZUKUZjn',
	'projectTheme' => 'cerulean',
	'projectSize' => 'small',
	'customErrorMsg' => array(
		'text' => 'Error occured.',
		'type' => 0 
	),
	'cloudSettings' => array(
		'cloudAmazonRegion' => '',
		'cloudAmazonBucket' => '',
		'cloudAmazonAccessKey' => '',
		'cloudAmazonSecretKey' => '',
		'cloudWasabiRegion' => '',
		'cloudWasabiBucket' => '',
		'cloudWasabiAccessKey' => '',
		'cloudWasabiSecretKey' => '',
		'cloudGDriveClientId' => '',
		'cloudGDriveClientSecret' => '',
		'cloudOneDriveClientId' => '',
		'cloudOneDriveClientSecret' => '',
		'cloudOneDriveDrive' => '',
		'cloudOneDriveAccountType' => 0,
		'cloudOneDriveDirectoryId' => '',
		'cloudDropboxClientId' => '',
		'cloudDropboxClientSecret' => '' 
	),
	'mapSettings' => array(
		'embed' => true,
		'provider' => 0,
		'apikey' => '' 
	),
	'viewPluginsWithJS' => array( 
		 
	),
	'rtlLanguages' => array(
		'English' => false 
	),
	'smsSettings' => array(
		'smsProvider' => 4,
		'iBusername' => '',
		'iBpassword' => '',
		'iBsender' => '',
		'essUsername' => '',
		'essPassword' => '',
		'essSender' => '',
		'gwApiToken' => '',
		'gwSender' => '',
		'mbAuth' => '',
		'mbSender' => '',
		'twilioSID' => '',
		'twilioAuth' => '',
		'twilioNumber' => '',
		'phoneField' => '',
		'counryCode' => '+1',
		'wauUsername' => '',
		'wauPassword' => '',
		'wauSender' => '' 
	) 
);

?>