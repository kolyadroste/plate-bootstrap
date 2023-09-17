<?php
defined('TYPO3') or die();

$GLOBALS['TCA']['pages']['columns']['slide_options'] = [
    'exclude' => true,
    'label' => 'Inhalts Slides deaktivieren',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectCheckBox',
        'items' => [
            [
                'Slide "Header" deaktivieren',
                'disable-slide-rand'
            ],
            [
                'Slide "Vor dem Inhalt" deaktivieren',
                'disable-slide-before-content'
            ],
            [
                'Slide "Footer" deaktivieren',
                'disable-slide-footer'
            ],
        ],
    ],
    'l10n_mode' => 'exclude',
];

$checkbox = function(string $label, bool $exclude = false, int $default = 0): array {
    return [
        "label" => $label,
        "exclude" => $exclude,
        "config" => [
            "type" => "check",
            "renderType" => "checkboxToggle",
            "default" => $default,
            "items" => [
                [
                    0 => '',
                    1 => '',
                ]
            ],
        ],
    ];
};
$select= function(string $label, bool $exclude = false, $default = ''): array {
    return [
        "label" => $label,
        "exclude" => $exclude,
        "config" => [
            "type" => "select",
            "renderType" => "selectSingle",
            "items" => [
                ['', ''],
                ['Vererben', -1],
                ['Nicht Vererben', 1],
            ],
        ],
    ];
};
$GLOBALS["TCA"]["pages"]["columns"]["slide_header"] = $select("Header vererben für Unterseitem", true, '');
$GLOBALS["TCA"]["pages"]["columns"]["slide_post_content"] = $select("Inhalts-Header vererben für Unterseitem", true, '');
$GLOBALS["TCA"]["pages"]["columns"]["slide_pre_footer"] = $select("Pre-Footer vererben für Unterseitem", true, '');
$GLOBALS["TCA"]["pages"]["columns"]["slide_footer"] = $select("Footer vererben für Unterseitem", true, '');
$GLOBALS["TCA"]["pages"]["columns"]["disable_footer"] = $checkbox("Footer verbergen", true, 0);
$GLOBALS["TCA"]["pages"]["columns"]["disable_pre_footer"] = $checkbox("Pre Footer verbergen", true, 0);
$GLOBALS["TCA"]["pages"]["columns"]["disable_header"] = $checkbox("Header verbergen", true, 0);
$GLOBALS["TCA"]["pages"]["columns"]["disable_post_content"] = $checkbox("Inhaltsheader verbergen", true, 0);
$GLOBALS["TCA"]["pages"]["columns"]["disable_post_content_subpages"] = $checkbox("Inhaltsheader für Unterseiten verbergen", true, 0);
$GLOBALS["TCA"]["pages"]["columns"]["plate_icon_fullcolor"] = $checkbox("Icon Full-Color", true, 0);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('pages', 'layout', '--linebreak--,slide_header, slide_post_content,slide_pre_footer, slide_footer, disable_header, disable_post_content, disable_footer, disable_pre_footer,disable_post_content_subpages,icon_fullcolor', 'after:backend_layout_next_level');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('pages', 'title', ',plate_icon_fullcolor', 'after:tx_bwicons_icon' );
