<?php

namespace crudle\ext\school\enums;

use Yii;

class Type_Visibility
{
    const Everyone = 'Public';
    const Selected = 'Private';

    public static function enums()
    {
        return [
            self::Everyone =>  Yii::t('app', 'Public'),
            self::Selected =>  Yii::t('app', 'Private'),
        ];
    }
}
