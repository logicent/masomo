<?php

namespace crudle\ext\school\models;

use crudle\ext\school\enums\Status_Announcement;
use Yii;

/**
 * This is the model class for table "{{schl_Announcement}}".
 *
 * @property string $id
 * @property string $title
 * @property string $status
 * @property string $comments
 * @property string $description
 * @property string $date_posted
 * @property string $action_required
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class Announcement extends \crudle\app\crud\models\ActiveRecord
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
        return '{{schl_Announcement}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['description'], 'required'],
            [['description', 'target_audience', 'action_description'], 'string', 'max' => 140],
            [['date_posted'], 'date', 'format' => 'php:Y-m-d'],
            [['action_required'], 'boolean'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'description' => Yii::t('app', 'Description'),
            'date_posted' => Yii::t('app', 'Date posted'),
            'action_required' => Yii::t('app', 'Action required?'),
            'action_description' => Yii::t('app', 'Action description'),
            'target_audience' => Yii::t('app', 'Target Audience'),
        ]);
    }

    public static function enums()
    {
        return [
            'status' => [
                'class' => Status_Announcement::class,
                'attribute' => 'status'
            ]
        ];
    }
}
