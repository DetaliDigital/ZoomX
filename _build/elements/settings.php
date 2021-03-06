<?php

return [
    'zoomx_caching' => [
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'zoomx_main',
    ],
    'zoomx_default_tpl' => [
        'xtype' => 'textfield',
        'value' => 'base.tpl',
        'area' => 'zoomx_main',
    ],
    'zoomx_theme' => [
        'xtype' => 'textfield',
        'value' => 'default',
        'area' => 'zoomx_main',
    ],
    'zoomx_template_dir' => [
        'xtype' => 'textfield',
        'value' => '{core_path}components/zoomx/templates/',
        'area' => 'zoomx_main',
    ],
    'zoomx_routes_mode' => [
        'xtype' => 'numberfield',
        'value' => 1,
        'area' => 'zoomx_main',
    ],
    'zoomx_parser_class' => [
        'xtype' => 'textfield',
        'value' => 'ZoomSmarty',
        'area' => 'zoomx_main',
    ],
    'zoomx_request_class' => [
        'xtype' => 'textfield',
        'value' => 'ZoomRequest',
        'area' => 'zoomx_main',
    ],
    'zoomx_response_class' => [
        'xtype' => 'textfield',
        'value' => 'ZoomResponse',
        'area' => 'zoomx_main',
    ],
    /* Smarty */
    'zoomx_smarty_cache_dir' => [
        'xtype' => 'textfield',
        'value' => 'zoomx/smarty/cache/',
        'area' => 'zoomx_smarty',
    ],
    'zoomx_smarty_compile_dir' => [
        'xtype' => 'textfield',
        'value' => 'zoomx/smarty/compile/',
        'area' => 'zoomx_smarty',
    ],
    'zoomx_smarty_config_dir' => [
        'xtype' => 'textfield',
        'value' => '{core_path}config/',
        'area' => 'zoomx_smarty',
    ],
    'zoomx_smarty_custom_plugin_dir' => [
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'zoomx_smarty',
    ],
];