<?php 

return [
    'LibUserPerm\\Model\\UserPerm' => [
        'data' => [
            'name' => [
                'read_site_setting'   => ['group'=>'Admin','about'=>'Allow user to view site setting'],
                'update_site_setting' => ['group'=>'Admin','about'=>'Allow user to change the value of site setting']
            ]
        ]
    ]
];