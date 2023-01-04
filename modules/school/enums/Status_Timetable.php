<?php

namespace crudle\ext\school\enums;

use Yii;

class Status_Timetable
{
    const Draft = 'Draft';
    const Submitted = 'Submitted';
    const Reviewed = 'Reviewed';
    const Approved = 'Approved';
    const Rejected = 'Rejected';
    const Published = 'Published';
    const Archived = 'Archived';

    public static function enums()
    {
        return [
            self::Draft => Yii::t('app', 'Draft'),
            // self::Submitted => Yii::t('app', 'Submitted'),
            // self::Reviewed => Yii::t('app', 'Reviewed'),
            // self::Approved => Yii::t('app', 'Approved'),
            // self::Rejected => Yii::t('app', 'Rejected'),
            self::Published => Yii::t('app', 'Published'),
            self::Archived => Yii::t('app', 'Archived'),
        ];
    }

    public static function enumsColor()
    {
        return [
            self::Draft => 'brown',
            // self::Submitted => 'blue',
            // self::Reviewed => 'teal',
            // self::Approved => 'yellow',
            // self::Rejected => 'red',
            self::Published => 'green',
            self::Archived => 'black',
        ];
    }
}
