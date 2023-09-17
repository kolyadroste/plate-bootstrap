<?php
declare(strict_types=1);

namespace Atomicplan\Plate\Utility;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\Exception\InvalidConfigurationTypeException;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManager;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;

/**
 * @package Plate Bootstrap
 * @subpackage Utility
 */
class SettingsUtility
{
    public const EXTENSION_NAME = 'Plate Bootstrap';
    public const EXTENSION_KEY = 'plate_bootstrap';
    public const EXTENSION_TYPOSCRIPT_KEY = 'tx_' . self::EXTENSION_NAME;
}
