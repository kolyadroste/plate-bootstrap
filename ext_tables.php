<?php

defined('TYPO3') or die();

// disable sys_templates - could be done as an option of the extension dynamically
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:plate_bootstrap/Configuration/TsConfig/All.tsconfig"');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig("@import 'EXT:plate_bootstrap/Configuration/TsConfig/user.tsconfig'");

