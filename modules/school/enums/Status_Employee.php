<?php

namespace crudle\ext\school\enums;

use Yii;

class Status_Employee
{
    const Fulltime = 'FT';
    const Parttime = 'PT';
    const Exited = 'EX';

    public static function enums()
    {
        return [
            self::Fulltime =>  Yii::t('app', 'Full-time'),
            self::Parttime =>  Yii::t('app', 'Part-time'),
            self::Exited =>  Yii::t('app', 'Exited'),
        ];
    }

    public static function enumsColor()
    {
        return [
            self::Fulltime =>  'blue',
            self::Parttime =>  'teal',
            self::Exited =>  'brown',
        ];
    }
}
