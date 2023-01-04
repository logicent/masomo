<?php

namespace crudle\ext\school\models;

use Yii;

/**
 * This is the model class for table "{{schl_School_Event}}".
 *
 * @property string $id
 * @property string $title
 * @property string $status
 * @property string $comments
 * @property string $description
 * @property string $start_at
 * @property string $end_at
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class EventPlanner extends \crudle\app\crud\models\ActiveRecord
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
        return '{{schl_School_Event}}';
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
            [['start_at', 'end_at'], 'date', 'format' => 'php:Y-m-d HH:mm'],
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

    // public static function relations()
    // {
    //     return [
    //         'EventPlannerItem' => [
    //             'class' => EventPlannerItem::class,
    //             'type' => Type_Relation::ChildModel,
    //         ],
    //     ];
    // }

    // public function getEventPlannerItem()
    // {
    //     return $this->hasMany(EventPlannerItem::class, ['event_planner_id' => 'id']);
    // }

    public static function enums()
    {
        return [
            'status' => [
                'class' => Status_Event::class,
                'attribute' => 'status'
            ]
        ];
    }
}
