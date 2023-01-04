<?php

namespace crudle\ext\school\models;

use crudle\app\crud\enums\Type_Relation;
use crudle\app\main\enums\Status_Active;
use Yii;

/**
 * This is the model class for table "{{%School_Calendar}}".
 *
 * @property string $id
 * @property string $title
 * @property string $status
 * @property string $comments
 * @property string $academic_year
 * @property string $start_date
 * @property string $end_date
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class SchoolCalendar extends \crudle\app\crud\models\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->listSettings->listNameAttribute = 'academic_year';
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{schl_School_Calendar}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['academic_year'], 'required'],
            [['academic_year'], 'number', 'min' => 2000, 'max' => date('Y')],
            [['academic_year', 'start_date', 'end_date'], 'safe'],
            [['title'], 'string', 'max' => 140],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'title' => Yii::t('app', 'Title'),
            'academic_year' => Yii::t('app', 'Academic year'),
            'start_date' => Yii::t('app', 'Start date'),
            'end_date' => Yii::t('app', 'End date'),
        ]);
    }

    public static function relations()
    {
        return [
            'schoolCalendarPeriod' => [
                'class' => SchoolCalendarPeriod::class,
                'type' => Type_Relation::ChildModel,
            ],
        ];
    }

    public function getSchoolCalendarPeriod()
    {
        return $this->hasMany(SchoolCalendarPeriod::class, ['school_calendar_id' => 'id']);
    }

    public static function enums()
    {
        return [
            'status' => [
                'class' => Status_School_Period::class,
                'attribute' => 'status'
            ]
        ];
    }
}
