<?php

namespace crudle\ext\school\enums;

use Yii;

class Status_Timeslot
{
    const Scheduled = 'Scheduled';
    const Held = 'Held';
    const Switched = 'Switched';
    const Skipped = 'Skipped';
    const Postponed = 'Postponed';
    const Canceled = 'Canceled';

    public static function enums()
    {
        return [
            self::Scheduled => Yii::t('app', 'Scheduled'),
            self::Held => Yii::t('app', 'Held'),
            self::Switched => Yii::t('app', 'Switched'),
            self::Skipped => Yii::t('app', 'Skipped'),
            self::Postponed => Yii::t('app', 'Postponed'),
            self::Canceled => Yii::t('app', 'Canceled'),
        ];
    }

    public static function enumsColor()
    {
        return [
            self::Scheduled =>'orange',
            self::Held => 'green',
            self::Switched => 'blue',
            self::Skipped => 'brown',
            self::Postponed => 'yellow',
            self::Canceled => 'red',
        ];
    }
}
