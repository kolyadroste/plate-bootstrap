<?php

namespace Atomicplan\Utility;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

class CheckExtension
{
    public function isExtensionInstalled($extensionKey)
    {
        return ExtensionManagementUtility::isLoaded($extensionKey) ? '1' : '0';
    }
}
