<?php

return [
    '__name' => 'admin-site-setting',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-site-setting.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-site-setting' => ['install','update','remove'],
        'theme/admin/site-setting'   => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'admin' => NULL
            ],
            [
                'site-setting' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'AdminSiteSetting\\Controller' => [
                'type' => 'file',
                'base' => 'modules/admin-site-setting/controller'
            ]
        ],
        'files' => []
    ],
    'routes' => [
        'admin' => [
            'adminSiteSettingIndex' => [
                'path' => [
                    'value' => '/setting'
                ],
                'handler' => 'AdminSiteSetting\\Controller\\Setting::index'
            ],
            'adminSiteSettingSingle' => [
                'path' => [
                    'value' => '/setting/(:group)',
                    'params' => [
                        'group' => 'any'
                    ]
                ],
                'handler' => 'AdminSiteSetting\\Controller\\Setting::single'
            ],
            'adminSiteSettingEdit' => [
                'path' => [
                    'value' => '/setting/(:group)/(:item)',
                    'params' => [
                        'group' => 'any',
                        'item'  => 'number'
                    ]
                ],
                'method' => 'GET|POST',
                'handler' => 'AdminSiteSetting\\Controller\\Setting::edit'
            ]
        ]
    ],
    'adminUi' => [
        'sidebarMenu' => [
            'items' => [
                'site-setting' => [
                    'label' => 'Setting',
                    'icon' => '<i class="fas fa-tools"></i>',
                    'route' => ['adminSiteSettingIndex',[],[]],
                    'priority' => 10000,
                    'perms' => 'read_site_setting',
                    'filterable' => true,
                    'visible' => true
                ]
            ]
        ]
    ],
    'adminSiteSetting' => [
        'editable' => []
    ]
];