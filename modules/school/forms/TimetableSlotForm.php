<?php

namespace crudle\ext\school\forms;

use crudle\app\main\models\Model;
use Yii;

class TimetableSlotForm extends Model
{
    public $period;
    public $duration;
    public $lessonName;
    public $startTime;
    public $endTime;
    public $type;
    public $teacherResponsible;
    public $status;
    public $reasonNotHeld; // postponed / cancelled
    public $switchWithTimeslot;
    public $reasonSwitched;

    public function rules()
    {
        return [
            [[
                'period',
                'duration',
                'lessonName',
                'startTime',
                'endTime',
                'type',
                'teacherResponsible',
                'status',
                'reasonNotHeld',
                'switchWithTimeslot',
                'reasonSwitched',
            ], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'period'  => Yii::t('app', 'Period'),
            'duration'  => Yii::t('app', 'Duration'),
            'lessonName'  => Yii::t('app', 'Lesson'),
            'startTime'  => Yii::t('app', 'Start time'),
            'endTime'  => Yii::t('app', 'End time'),
            'type'  => Yii::t('app', 'Type'),
            'teacherResponsible'  => Yii::t('app', 'Teacher'),
            'status'  => Yii::t('app', 'Status'),
            'reasonNotHeld'  => Yii::t('app', 'Reason not held'),
            'switchWithTimeslot'  => Yii::t('app', 'Switched with T/S'),
            'reasonSwitched'  => Yii::t('app', 'Reason switched'),
        ];
    }
}