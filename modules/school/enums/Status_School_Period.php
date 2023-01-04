<?php

namespace crudle\ext\school\enums;

use Yii;

class Status_School_Period
{
    const NotStarted = 'Not started';
    const Open = 'Open';
    const Closed = 'Closed';
    const Postponed = 'Postponed';
    const Cancelled = 'Cancelled';

    public static function enums()
    {
        return [
            self::NotStarted =>  Yii::t('app', 'Not started'),
            self::Open =>  Yii::t('app', 'Open'),
            self::Closed =>  Yii::t('app', 'Closed'),
            self::Postponed =>  Yii::t('app', 'Postponed'),
            self::Cancelled =>  Yii::t('app', 'Cancelled'),
        ];
    }

    public static function enumsColor()
    {
        return [
            self::NotStarted =>  'red',
            self::Open =>  'green',
            self::Closed =>  'blue',
            self::Postponed =>  'yellow',
            self::Cancelled =>  'red',
        ];
    }
}
