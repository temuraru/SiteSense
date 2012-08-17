<?php

function languages_modules_admin_en_us(){
	return array(
		'core'                                => array(
			'modules'                            => 'Modules',
			'enabled'                            => 'Enabled'
		),
		'manageSidebarsHeading'               => 'Manage Sidebars For',
		'manageModulesHeading'                => 'Manage Modules',
		'noModulesExist'                      => 'No Modules Could Be Found',
		'installLanguage'                     => 'Install Language',
		'selectSidebars'                      => 'Select Sidebars',
		'moduleInstallSuccessMessage'         => 'Module successfully installed!',
		'moduleInstallSuccessHeading'         => 'Success!',
		'returnToModuleList'                  => 'Return To Modules',
		'moduleDisableOfferUninstall'         => 'You have successfully disabled the module. The data stored by this module are still in the database, but the module is disabled from user access. If you would like to remove all of the data stored by this module from the database then click uninstall. But beware, this data will be gone forever.',
		'moduleDisableSuccessHeading'         => 'Module Disabled!',
		'uninstallModule'                     => 'Uninstall Module',
		'updateLanguageHeading'               => 'Update Language For',
		'language'                            => 'Language',
		'phraseAction'                        => 'Phrase Action:',
		'updateActionClear'                   => 'Clear Existing Phrases And Start Fresh',
		'updateActionNew'                     => 'Only Install Phrases That Don\'t Currently Exist',
		'updateActionAll'                     => 'Update Existing Phrases And Install New Ones',
		'updateLanguageSubmitButton'          => 'Update Language',
		'updateLanguageSuccessMessage'        => 'The language has been updated for the module: ',
		'insufficientParameterModuleName'     => 'No module name was provided.',
		'insufficientParameters'              => 'Insufficient Parameters',
		'errorHeading'                        => 'Error',
		'errorModuleNotFound'                 => 'Module Not Found',
		'errorInstallFileNotFound'            => 'The installer for the module could not be found.',
		'errorSettingsFunctionNotFound'       => 'The module settings function could not be found within the module installation file.',
		'errorInstallFunctionNotFound'        => 'The module install function could not be found within the module installation file.',
		'errorExistingPhrasesFound'           => 'Existing phrases were found for the module in this language.',
		'linkSelectLanguageAction'            => 'Please click here to select an action.',
		'languageNotFound'                    => 'The language you specified could not be found.',
		'languageTablesCreated'               => 'The language tables for this module were created.',
		'installLanguageErrorMissingUserEnd'  => 'The user-end phrase installation file for this module is either corrupt or missing the function.',
		'installLanguageErrorSaveUserEnd'     => 'There was an error in saving the user-end phrases to the database.',
		'installLanguageSuccessUserEnd'       => 'The user side phrases were saved to the database.',
		'installLanguageErrorMissingAdminEnd' => 'The administrator panel phrase installation file for this module is either corrupt or missing the function.',
		'installLanguageErrorSaveAdminEnd'    => 'There was an error in saving the administrator panel phrases to the database.',
		'installLanguageSuccessAdminEnd'      => 'The administrator panel phrases were saved to the database.',
		'errorUninstallFunctionNotFound'      => 'The module uninstall function could not be found within the module installation file.',
		
	);	
}
?>