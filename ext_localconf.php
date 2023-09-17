<?php

defined('TYPO3') or die();

call_user_func(function() {
    // Add default RTE configuration is already set in bootstrap package
    /// $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['bootstrap'] = 'EXT:bootstrap_package/Configuration/RTE/Default.yaml';

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['f'][] = 'AtomicPlan\\PlateBootstrap\\ViewHelpers';
});

$rootlinefields = &$GLOBALS["TYPO3_CONF_VARS"]["FE"]["addRootLineFields"];
/* Note the ampersand (&) symbol. Don’t Forget it!!! */

$NewRootlinefields = "slide_header,slide_post_content,slide_pre_footer,slide_footer";
$rootlinefields .= ($rootlinefields == '')?$NewRootlinefields:','.$NewRootlinefields;