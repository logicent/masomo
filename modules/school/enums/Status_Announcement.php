<?php

namespace crudle\ext\school\enums;

use Yii;

class Status_Announcement
{
    const Planned = 'Planned';
    const Made = 'Made';
    const OnHold = 'On hold';

    public static function enums()
    {
        return [
            self::Planned =>  Yii::t('app', 'Planned'),
            self::Made =>  Yii::t('app', 'Made'),
            self::OnHold =>  Yii::t('app', 'On hold'),
        ];
    }

    public static function enumsColor()
    {
        return [
            self::Planned =>  'orange',
            self::Made =>  'green',
            self::OnHold =>  'brown',
        ];
    }
}
