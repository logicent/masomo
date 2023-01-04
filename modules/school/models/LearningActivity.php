<?php

namespace crudle\ext\school\models;

use crudle\app\main\enums\Status_Active;
use Yii;

/**
 * This is the model class for table "{{schl_Learning_Activity}}".
 *
 * @property string $id
 * @property string $activity_id
 * @property string $curriculum_id
 * @property string $title
 * @property string $status
 * @property string $comments
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class LearningActivity extends \crudle\app\crud\models\ActiveRecord
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
        return '{{schl_Learning_Activity}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['activity_id', 'curriculum_id'], 'required'],
            [['activity_id', 'curriculum_id'], 'string', 'max' => 140],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'activity_id' => Yii::t('app', 'School activity'),
            'curriculum_id' => Yii::t('app', 'Curriculum'),
        ]);
    }

    public static function relations()
    {
        return [
        ];
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
}
