<?php

return [
    '__name' => 'admin-site-setting',
    '__version' => '0.4.0',
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
                'admin-setting' => null
            ],
            [
                'admin' => null
            ],
            [
                'site-setting' => null
            ],
            [
                'lib-event' => null
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
    'adminSetting' => [
        'menus' => [
            'site-frontpage' => [
                'module' => ['site'],
                'label' => 'Frontpage',
                'icon' => '<i class="fas fa-hand-pointer"></i>',
                'info' => 'Change site frontpage preference',
                'perm' => 'update_site_setting',
                'index' => 0,
                'options' => [
                    'site-frontpage' => [
                        'label' => 'Change settings',
                        'route' => ['adminSiteSettingSingle',['group' => 'Frontpage']]
                    ]
                ]
            ],
            'site-social-accounts' => [
                'module' => ['site'],
                'label' => 'Social Accounts',
                'icon' => '<i class="fas fa-share-alt-square"></i>',
                'info' => 'List of company social accounts',
                'perm' => 'update_site_setting',
                'index' => 1000,
                'options' => [
                    'site-frontpage' => [
                        'label' => 'Change settings',
                        'route' => ['adminSiteSettingSingle', ['group'=>'Social Accounts']]
                    ]
                ]
            ]
        ]
    ]
];
