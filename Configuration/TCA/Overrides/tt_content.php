<?php
defined('TYPO3') or die();

// Adds the content element to the "Type" dropdown
call_user_func(function($extension = 'plate_bootstrap') {
    // TCA space_before_class with addintional items
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',[
        'space_before_class' => [
            'exclude' => true,
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', ''],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small', 'extra-small'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small', 'small'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium', 'medium'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large', 'large'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large', 'extra-large'],
                    ['Kein Abstand', 'no-space'],
                    ['Negativ extra klein', 'negative-extra-small'],
                    ['Negativ klein', 'negative-small'],
                    ['Negativ mittel', 'negative-medium'],
                    ['Negativ groß', 'negative-large'],
                    ['Negativ extra groß', 'negative-extra-large'],
                ],
                'default' => ''
            ]
        ],
    ]);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',[
        'space_after_class' => [
            'exclude' => true,
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', ''],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small', 'extra-small'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small', 'small'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium', 'medium'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large', 'large'],
                    ['LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large', 'extra-large'],
                    ['XXL', 'xxl'],
                    ['XXXL', 'xxxl'],
                    ['Kein Abstand', 'no-space'],
                    ['Negativ extra klein', 'negative-extra-small'],
                    ['Negativ klein', 'negative-small'],
                    ['Negativ mittel', 'negative-medium'],
                    ['Negativ groß', 'negative-large'],
                    ['Negativ extra groß', 'negative-extra-large'],
                ],
                'default' => ''
            ]
        ],
    ]);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',[
        'header_style' => [
            'exclude' => true,
            'label' => 'Layout',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 'default'],
                    ['H1', 'h1'],
                    ['H2', 'h2'],
                    ['H3', 'h3'],
                    ['H4', 'h4'],
                    ['H5', 'h5'],
                    ['Underline', '-underlined'],
                ],
                'default' => 'default'
            ]
        ],
    ]);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',[
        'frame_layout' => [
            'exclude' => true,
            'label' => 'Rahmen Layout',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 'default'],
                    ['Embedded', 'embedded'],
                    ['Volle Breite', '-full'],
                    ['Breiter', '-wider'],
                    ['schmal', '-slim'],
                    ['schmaler', '-moreslim'],
                    ['sehr schmal', '-veryslim'],
                ],
                'default' => 'default'
            ]
        ],
    ]);


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',[
        'frame_layout_inner_top' => [
            'exclude' => true,
            'label' => 'Innenabstand oben',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 'default'],
                    ['Innenabstand null', 'pt-0'],
                    ['Innenabstand klein', 'pt-small'],
                    ['Innenabstand mittel', 'pt-default'],
                    ['Innenabstand größer', 'pt-big'],
                    ['Innenabstand sehr groß', 'pt-large'],
                    ['Innenabstand XL', 'pt-xlarge'],
                    ['Innenabstand XXL', 'pt-xxlarge'],
                ],
                'default' => 'default'
            ]
        ],
    ]);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',[
        'frame_layout_inner_bottom' => [
            'exclude' => true,
            'label' => 'Innenabstand unten',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 'default'],
                    ['Innenabstand null', 'pb-0'],
                    ['Innenabstand klein', 'pb-small'],
                    ['Innenabstand mittel', 'pb-default'],
                    ['Innenabstand größer', 'pb-big'],
                    ['Innenabstand sehr groß', 'pb-large'],
                    ['Innenabstand XL', 'pb-xlarge'],
                    ['Innenabstand XXL', 'pb-xxlarge'],
                ],
                'default' => 'default'
            ]
        ],
    ]);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',[
        'header' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.header',
            'config' => [
                'type' => 'text',
                'default' => ''
            ]
        ],
    ]);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',[
        'overlay' => [
            'exclude' => true,
            'label' => 'Überlargern',
            'config' => [
                'type' => 'check'
            ]
        ],
    ]);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'frames',
        '--linebreak--, frame_layout_inner_top,  frame_layout_inner_bottom,--linebreak--,  overlay',
        'after:frame_layout'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'headers',
        'header_style',
        'after:header_layout'
    );

    // override bspackage image_options
    $GLOBALS['TCA']['tt_content']['columns']['background_image_options'] = [
        'exclude' => true,
        'displayCond' => 'FIELD:frame_class:!=:none',
        'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image_options',
        'config' => [
            'type' => 'flex',
            'ds' => [
                'default' => 'FILE:EXT:plate_bootstrap/Configuration/FlexForms/BackgroundImage.xml',
            ],
        ],
        'l10n_mode' => 'exclude',
    ];

});

