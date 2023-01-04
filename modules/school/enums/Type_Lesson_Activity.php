<?php

namespace crudle\ext\school\enums;

use Yii;

class Type_Lesson_Activity
{
    const Theory = 'Theory';
    const Practical = 'Practical';
    const Outdoor = 'Outdoor';
    const Field = 'Field';

    public static function enums()
    {
        return [
            self::Theory => Yii::t('app', 'Theory'),
            self::Practical => Yii::t('app', 'Practical'),
            self::Outdoor => Yii::t('app', 'Outdoor'),
            self::Field => Yii::t('app', 'Field'),
        ];
    }
}
