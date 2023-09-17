<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Plate Bootstrap',
    'description' => 'Is a basis Template that provides some js loading mechanisms and basic templating',
    'category' => 'fe',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Kolya von Droste zu Vischering',
    'author_email' => 'jasker@dipool-web.de',
    'author_company' => 'AtomicPlan',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.5.99'
        ]
    ]
];
