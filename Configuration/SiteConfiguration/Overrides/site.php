<?php

call_user_func(function(){
    // extend site config
    $GLOBALS['SiteConfiguration']['site']['columns']['plateVarsPath'] = [
        'label' => 'Vars Pfad (zb. fileadmin oder eigene Extension, "zb_ ext:theme/Resources/Public/Styles/vars.css")',
        'config' => [
            'type' => 'input',
            'default' => '',
        ]
    ];

    // Config
    $GLOBALS['SiteConfiguration']['site']['types']['0']['showitem'] .= ",--div--;Plate CSSVars,plateVarsPath";
});
