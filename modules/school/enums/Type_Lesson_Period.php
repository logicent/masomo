<?php

namespace crudle\ext\school\enums;

use Yii;

class Type_Lesson_Period
{
    const One = 1;
    const Two = 2;
    const Three = 3;
    const Four = 4;
    const Five = 5;
    const Six = 6;
    const Seven = 7;
    const Eight = 8;
    const Nine = 9;

    public static function enums()
    {
        return [
            self::One => Yii::t('app', 'One'),
            self::Two => Yii::t('app', 'Two'),
            self::Three => Yii::t('app', 'Three'),
            self::Four => Yii::t('app', 'Four'),
            self::Five => Yii::t('app', 'Five'),
            self::Six => Yii::t('app', 'Six'),
            self::Seven => Yii::t('app', 'Seven'),
            self::Eight => Yii::t('app', 'Eight'),
            self::Nine => Yii::t('app', 'Nine'),
        ];
    }
}
