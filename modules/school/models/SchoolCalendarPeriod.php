<?php

namespace crudle\ext\school\models;

use crudle\app\crud\enums\Type_Relation;
use Yii;

/**
 * This is the model class for table "{{%School_Calendar_Period}}".
 *
 * @property string $id
 * @property string $school_calendar_id
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 */
class SchoolCalendarPeriod extends \crudle\app\crud\models\ActiveRecordDetail
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{schl_School_Calendar_Period}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['start_date', 'end_date'], 'date', 'format' => 'php:Y-m-d'],
            [['id', 'school_calendar_id', 'name', 'duration'], 'string', 'max' => 140],
            [['is_learning_period'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'school_calendar_id' => Yii::t('app', 'School Calendar'),
            'name' => Yii::t('app', 'Name'),
            'start_date' => Yii::t('app', 'Start date'),
            'end_date' => Yii::t('app', 'End date'),
            'duration' => Yii::t('app', 'Duration'),
        ];
    }

    public static function relations()
    {
        return [
            'schoolCalendar' => [
                'class' => SchoolCalendar::class,
                'type' => Type_Relation::ParentModel,
            ],
        ];
    }

    public function getSchoolCalendar()
    {
        return $this->hasOne(SchoolCalendar::class, ['id' =>'school_calendar_id']);
    }

    public static function foreignKeyAttribute()
    {
        return 'school_calendar_id';
    }
}
