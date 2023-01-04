<?php

namespace crudle\ext\school\enums;

use Yii;

class Type_Lesson_Duration
{
    const Single = 'Single';
    const Double = 'Double';
    const Triple = 'Triple';

    public static function enums()
    {
        return [
            self::Single =>  Yii::t('app', 'Single'),
            self::Double =>  Yii::t('app', 'Double'),
            self::Triple =>  Yii::t('app', 'Triple'),
        ];
    }
}
