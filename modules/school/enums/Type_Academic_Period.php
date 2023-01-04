<?php

namespace crudle\ext\school\enums;

use Yii;

class Type_Academic_Period
{
    const Term = 'Term';
    const Semester = 'Semester';
    const Trimester = 'Trimester';

    public static function enums()
    {
        return [
            self::Term =>  Yii::t('app', 'Term'),
            self::Semester =>  Yii::t('app', 'Semester'),
            self::Trimester =>  Yii::t('app', 'Trimester'),
        ];
    }
}
