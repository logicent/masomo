<?php

namespace crudle\ext\school\forms;

use crudle\app\main\models\Model;
use crudle\ext\school\enums\Status_Timetable;
use crudle\ext\school\enums\Type_Visibility;
use Yii;

class TimetableForm extends Model
{
    public $academicYear;
    public $academicPeriod;
    public $timeSlotDuration = 40;
    public $firstTimeSlotOfDay = '8:00 AM';
    public $lastTimeSlotOfDay = '3:20 PM';
    public $blockedTimeSlots = 'None';
    public $revisions;
    public $status = Status_Timetable::Draft;
    public $owner;
    public $visibility = Type_Visibility::Everyone;

    public function rules()
    {
        return [
            [[
                'academicYear',
                'academicPeriod',
                'timeSlotDuration',
                'firstTimeSlotOfDay',
                'lastTimeSlotOfDay',
                'blockedTimeSlots',
                'revisions',
                'status',
                'owner',
                'visibility',
            ], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'academicYear' => Yii::t('app', 'Academic Year'),
            'academicPeriod' => Yii::t('app', 'Academic Period'),
            'timeSlotDuration' => Yii::t('app', 'Time Slot Duration'),
            'firstTimeSlotOfDay' => Yii::t('app', 'First Time Slot of Day'),
            'lastTimeSlotOfDay' => Yii::t('app', 'Last Time Slot of Day'),
            'blockedTimeSlots' => Yii::t('app', 'Blocked Time Slots'),
            'revisions' => Yii::t('app', 'Revisions'),
            'status' => Yii::t('app', 'Status'),
            'owner' => Yii::t('app', 'Owner'),
            'visibility' => Yii::t('app', 'Visibility'),
        ];
    }
}