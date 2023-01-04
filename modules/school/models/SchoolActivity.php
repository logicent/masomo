<?php

namespace crudle\ext\school\models;

use crudle\app\crud\enums\Type_Relation;
use crudle\app\main\enums\Status_Active;
use Yii;

/**
 * This is the model class for table "{{schl_School_Activity}}".
 *
 * @property string $id
 * @property string $school_id
 * @property string $title
 * @property string $status
 * @property string $comments
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
        $this->listSettings->listNameAttribute = 'id';
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{schl_School_Activity}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['school_id'], 'required'],
            [['school_id'], 'string', 'max' => 140],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'school_id' => Yii::t('app', 'School name'),
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
