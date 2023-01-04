<?php

namespace crudle\ext\school\models;

use crudle\app\main\enums\Status_Active;
use Yii;

/**
 * This is the model class for the {{schl_Calendar_Period_Type}} database table".
 *
 * @property string $id
 * @property string $title
 * @property string $status
 * @property string $unit_measure
 * @property boolean $is_learning_period
 * @property boolean $is_group
 * @property string $comments
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class CalendarPeriodType extends \crudle\app\crud\models\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->listSettings->listNameAttribute = 'id';
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{schl_Calendar_Period_Type}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
                ['unit_measure', 'string'],
                [['is_learning_period', 'is_group'], 'boolean']
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'id' => Yii::t('app', 'Name'),
            'unit_measure' => Yii::t('app', 'Unit of measure'),
            'is_learning_period' => Yii::t('app', 'Is learning period'),
            'is_group' => Yii::t('app', 'Is group'),
        ]);
    }

    public static function enums()
    {
        return [
            'status' => [
                'class' => Status_Active::class,
                'attribute' => 'status'
            ]
        ];
    }

    public static function autoSuggestIdValue()
    {
        return false;
    }
}
