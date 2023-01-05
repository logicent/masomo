<?php

namespace crudle\ext\school\enums;

use Yii;

class Status_Activity
{
    const Planned = 'Planned';
    const Ongoing = 'Ongoing';
    const Postponed = 'Postponed';
    const Cancelled = 'Cancelled';

    public static function enums()
    {
        return [
            self::Planned =>  Yii::t('app', 'Planned'),
            self::Ongoing =>  Yii::t('app', 'Ongoing'),
            self::Postponed =>  Yii::t('app', 'Postponed'),
            self::Cancelled =>  Yii::t('app', 'Cancelled'),
        ];
    }

    public static function enumsColor()
    {
        return [
            self::Planned =>  'orange',
            self::Ongoing =>  'green',
            self::Postponed =>  'brown',
            self::Cancelled =>  'red',
        ];
    }
}
