<?php

namespace crudle\ext\school\models;

use crudle\app\main\enums\Status_Active;
use Yii;

/**
 * This is the model class for the {{schl_Activity_Type}} database table".
 *
 * @property string $id
 * @property string $title
 * @property string $status
 * @property string $comments
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class ActivityType extends \crudle\app\crud\models\ActiveRecord
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
        return '{{schl_Activity_Type}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
                ['is_mandatory', 'boolean']
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'id' => Yii::t('app', 'Name'),
            'is_mandatory' => Yii::t('app', 'Is mandatory'),
            'status' => Yii::t('app', 'Inactive'),
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
