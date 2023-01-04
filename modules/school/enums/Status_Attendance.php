<?php

namespace crudle\ext\school\enums;

use Yii;

class Status_Attendance
{
    const Present = 'P';
    const Absent = 'A';
    const Halfday = 'H';

    public static function enums()
    {
        return [
            self::Present =>  Yii::t('app', 'Present'),
            self::Absent =>  Yii::t('app', 'Absent'),
            self::Halfday =>  Yii::t('app', 'Half-day'),
        ];
    }

    public static function enumsColor()
    {
        return [
            self::Present =>  'green',
            self::Absent =>  'red',
            self::Halfday =>  'yellow',
        ];
    }
}
