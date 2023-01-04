<?php

namespace crudle\ext\school\models;

use crudle\app\main\enums\Status_Active;
use Yii;

/**
 * This is the model class for table "schl_Employee_Type".
 *
 * @property string $id
 * @property string $title
 * @property string $status
 * @property int $is_group
 * @property string $comments
 * @property string $tags
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $updated_by
 */
class EmployeeType extends \crudle\app\crud\models\ActiveRecord
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
        return 'schl_Employee_Type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['id'], 'required'],
            [['is_group'], 'integer'],
            [['comments', 'tags'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'title', 'status', 'created_by', 'updated_by'], 'string', 'max' => 140],
            [['id'], 'unique'],
        ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'status' => Yii::t('app', 'Status'),
            'is_group' => Yii::t('app', 'Is Group'),
            'comments' => Yii::t('app', 'Comments'),
            'tags' => Yii::t('app', 'Tags'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
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
                'attribute' => 'inactive'
            ]
        ];
    }
}
