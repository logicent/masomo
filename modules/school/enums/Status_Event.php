<?php

namespace crudle\ext\school\enums;

use Yii;

class Status_Event
{
    const Planned = 'Planned';
    const Held = 'Held';
    const Postponed = 'Postponed';
    const Cancelled = 'Cancelled';

    public static function enums()
    {
        return [
            self::Planned =>  Yii::t('app', 'Planned'),
            self::Held =>  Yii::t('app', 'Held'),
            self::Postponed =>  Yii::t('app', 'Postponed'),
            self::Cancelled =>  Yii::t('app', 'Cancelled'),
        ];
    }

    public static function enumsColor()
    {
        return [
            self::Planned =>  'orange',
            self::Held =>  'green',
            self::Postponed =>  'brown',
            self::Cancelled =>  'red',
        ];
    }
}
