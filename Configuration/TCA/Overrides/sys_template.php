<?php
defined('TYPO3') or die();

call_user_func(function()
{
    $extensionKey = 'plate_bootstrap';

    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Plate Bootstrap: BaseTemplate'
    );
});