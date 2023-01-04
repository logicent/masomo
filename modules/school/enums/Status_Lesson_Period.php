<?php

namespace crudle\ext\school\enums;

use Yii;

class Status_Lesson_Period
{
    const Planned = 'Planned';
    const NotStarted = 'Not started';
    const Ongoing = 'Ongoing';
    const Completed = 'Completed';
    const Postponed = 'Postponed';
    const Cancelled = 'Cancelled';

    public static function enums()
    {
        return [
            self::Planned =>  Yii::t('app', 'Planned'),
            self::NotStarted =>  Yii::t('app', 'Not started'),
            self::Ongoing =>  Yii::t('app', 'Ongoing'),
            self::Completed =>  Yii::t('app', 'Completed'),
            self::Postponed =>  Yii::t('app', 'Postponed'),
            self::Cancelled =>  Yii::t('app', 'Cancelled'),
        ];
    }

    public static function enumsColor()
    {
        return [
            self::Planned =>  'orange',
            self::NotStarted =>  'red',
            self::Ongoing =>  'green',
            self::Completed =>  'blue',
            self::Postponed =>  'yellow',
            self::Cancelled =>  'red',
        ];
    }
}
