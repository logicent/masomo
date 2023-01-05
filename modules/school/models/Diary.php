<?php

namespace crudle\ext\school\models;

use crudle\ext\school\enums\Status_Diary;
use Yii;

/**
 * This is the base model class for Diary models.
 */
class Diary extends Attendance
{
    public static function enums()
    {
        return [
            'status' => [
                'class' => Status_Diary::class,
                'attribute' => 'status'
            ]
        ];
    }
}
