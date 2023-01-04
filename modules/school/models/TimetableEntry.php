<?php

namespace crudle\ext\school\models;

use crudle\app\crud\enums\Type_Relation;
use crudle\ext\school\enums\Status_Timeslot;
use crudle\ext\school\enums\Status_Timetable;
use Yii;

/**
 * This is the model class for table "{{schl_Timetable_Entry}}".
 *
 * @property string $id
 * @property string $title
 * @property string $status
 * @property string $comments
 * @property string $description
 * @property string $school_period
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class TimetableEntry extends \crudle\app\crud\models\ActiveRecordDetail
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->listSettings->listNameAttribute = 'description';
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{schl_Timetable_Entry}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['description'], 'required'],
            [['start_at', 'end_at'], 'date', 'format' => 'php:Y-m-d HH::mm'],
            [['description'], 'string', 'max' => 140],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'description' => Yii::t('app', 'Description'),
            'start_at' => Yii::t('app', 'Start at'),
            'end_at' => Yii::t('app', 'End at'),
        ]);
    }

    public static function relations()
    {
        return [
            'timetableSlot' => [
                'class' => TimetableEntry::class,
                'type' => Type_Relation::ChildModel,
            ],
        ];
    }

    public function getTimetableEntry()
    {
        return $this->hasMany(TimetableEntry::class, ['timetable_id' => 'id']);
    }

    public static function enums()
    {
        return [
            'status' => [
                'class' => Status_Timeslot::class,
                'attribute' => 'status'
            ]
        ];
    }
}
