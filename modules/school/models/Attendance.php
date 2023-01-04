<?php

namespace crudle\ext\school\models;

use crudle\ext\school\enums\Status_Attendance;
use Yii;

/**
 * This is the base model class for Attendance tables".
 *
 * @property string $id
 * @property string $title
 * @property string $status
 * @property string $comments
 * @property string $person_name
 * @property string $school_day
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class Attendance extends \crudle\app\crud\models\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->listSettings->listNameAttribute = 'person_name';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['person_name'], 'required'],
            [['school_day'], 'date', 'format' => 'php:Y-m-d'],
            [['person_name'], 'string', 'max' => 140],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'person_name' => Yii::t('app', 'Person name'),
            'school_day' => Yii::t('app', 'School day'),
        ]);
    }

    public static function enums()
    {
        return [
            'status' => [
                'class' => Status_Attendance::class,
                'attribute' => 'status'
            ]
        ];
    }
}
