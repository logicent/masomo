<?php

namespace crudle\ext\school\enums;

use Yii;

class Type_Duration_Measure
{
    const Days = 'D';
    const Weeks = 'W';
    // const Months = 'M';

    public static function enums()
    {
        return [
            self::Days =>  Yii::t('app', 'Days'),
            self::Weeks =>  Yii::t('app', 'Weeks'),
            // self::Months =>  Yii::t('app', 'Months'),
        ];
    }
}
