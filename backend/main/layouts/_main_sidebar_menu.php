<?php

use crudle\app\user\enums\Type_Role;

return [
        [
                'icon' => 'grey dashboard large',
                'route' => 'dashboards',
                'label' => 'Dashboards',
                'inactive' => true,
        ],
        [
                'icon' => 'grey bar chart large',
                'route' => 'reports',
                'label' => 'Reports',
                'inactive' => true,
        ],
        [
                'icon' => 'grey school large',
                'route' => 'school',
                'label' => 'School',
                'inactive' => true,
        ],
        [
                'icon' => 'grey book large',
                'route' => 'admin',
                'label' => 'Admin',
                'inactive' => true,
        ],
        [
                'icon' => 'grey toggle on large',
                'route' => 'setup',
                'label' => 'Setup',
                'inactive' => Yii::$app->user->can(Type_Role::SystemManager),
        ],
];
