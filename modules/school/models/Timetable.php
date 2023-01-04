<?php

namespace crudle\ext\school\models;

use crudle\app\crud\enums\Type_Relation;
use crudle\ext\school\enums\Status_Timetable;
use Yii;

/**
 * This is the model class for table "{{schl_Timetable}}".
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
class Timetable extends \crudle\app\crud\models\ActiveRecord
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
        return '{{schl_Timetable}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['description'], 'required'],
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
        ]);
    }

    public static function relations()
    {
        return [
            'timetableEntry' => [
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
                'class' => Status_Timetable::class,
                'attribute' => 'status'
            ]
        ];
    }
}
