<?php

namespace crudle\ext\school\enums;

use crudle\app\crud\enums\Type_Menu_Group;
use yii\helpers\ArrayHelper;
use Yii;

class Type_Menu_Sub_Group extends Type_Menu_Group
{
    const Tools_Templates = 'TnT';

    public static function enums()
    {
        return ArrayHelper::merge([
            self::Tools_Templates => Yii::t('app', 'Tools & Templates'),
        ], parent::enums());
    }

    public static function enumIcons()
    {
        return ArrayHelper::merge([
            self::Tools_Templates => 'ruler',
        ], parent::enums());
    }
}
