<?php

use crudle\app\user\enums\Type_Role;
use crudle\ext\school\enums\Type_Menu_Sub_Group;

$this->params['menuGroupClass'] = Type_Menu_Sub_Group::class;

return [
    [
        'route' => '/school/announcement/index',
        'label' => 'Announcement',
        'icon' => 'bullhorn',
        'group' => Type_Menu_Sub_Group::Tools_Templates,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/student-attendance/index',
        'label' => 'Student Attendance',
        'icon' => 'student',
        'group' => Type_Menu_Sub_Group::Tools_Templates,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/teacher-attendance/index',
        'label' => 'Teacher Attendance',
        'icon' => 'clipboard',
        'group' => Type_Menu_Sub_Group::Tools_Templates,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/event-planner/index',
        'label' => 'Event Planner',
        'icon' => 'calendar checked',
        'group' => Type_Menu_Sub_Group::Tools_Templates,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/school-activity/index',
        'label' => 'School Activity',
        'icon' => 'play',
        'group' => Type_Menu_Sub_Group::MasterData,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/school-calendar/index',
        'label' => 'School Calendar',
        'icon' => 'calendar alternate',
        'group' => Type_Menu_Sub_Group::MasterData,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/student-diary/index',
        'label' => 'Student Diary',
        'icon' => 'book',
        'group' => Type_Menu_Sub_Group::Tools_Templates,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/activity-type/index',
        'label' => 'Activity Type',
        'icon' => 'bell outline',
        'group' => Type_Menu_Sub_Group::Settings,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/calendar-period-type/index',
        'label' => 'Calendar Period Type',
        'icon' => 'calendar outline',
        'group' => Type_Menu_Sub_Group::Settings,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/employee/index',
        'label' => 'Employee',
        'icon' => 'id card',
        'group' => Type_Menu_Sub_Group::MasterData,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/sponsor/index',
        'label' => 'Sponsor',
        'icon' => 'money',
        'group' => Type_Menu_Sub_Group::MasterData,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/teacher/index',
        'label' => 'Teacher',
        'icon' => 'chalkboard',
        'group' => Type_Menu_Sub_Group::MasterData,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/employee-type/index',
        'label' => 'Employee Type',
        'icon' => 'users',
        'group' => Type_Menu_Sub_Group::Settings,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/teacher-diary/index',
        'label' => 'Teacher Diary',
        'icon' => 'open book',
        'group' => Type_Menu_Sub_Group::Tools_Templates,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    // [
    //     'route' => '/school/group-register/index',
    //     'label' => 'Group Register',
    //     'group' => Type_Menu_Sub_Group::Tools_Templates,
    //     'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    // ],
    // [
    //     'route' => '/school/team-roster/index',
    //     'label' => 'Team Roster',
    //     'group' => Type_Menu_Sub_Group::Tools_Templates,
    //     'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    // ],
    [
        'route' => '/school/timetable/index',
        'label' => 'Timetable Planner',
        'icon' => 'columns',
        'group' => Type_Menu_Sub_Group::Tools_Templates,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
    [
        'route' => '/school/school/index',
        'label' => 'School',
        'icon' => 'school',
        'group' => Type_Menu_Sub_Group::MasterData,
        'visible' => Yii::$app->user->can(Type_Role::SystemManager),
    ],
];
?>
