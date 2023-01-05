<?php

namespace crudle\ext\school\enums;

use Yii;

class Status_Diary
{
    const Seen = 'S';
    const NotSeen = 'NS';

    public static function enums()
    {
        return [
            self::Seen =>  Yii::t('app', 'Seen'),
            self::NotSeen =>  Yii::t('app', 'Not seen'),
        ];
    }

    public static function enumsColor()
    {
        return [
            self::Seen =>  'blue',
            self::NotSeen =>  'red',
        ];
    }
}
