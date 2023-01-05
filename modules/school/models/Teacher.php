<?php

namespace crudle\ext\school\models;

use crudle\ext\school\enums\Status_Employee;
use Yii;

/**
 * This is the model class for table "schl_Teacher".
 *
 * @property string $id
 * @property string $employee_id
 * @property string $title
 * @property string $teacher_name
 * @property string $TSC_number
 * @property string $status
 * @property string $comments
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class Teacher extends \crudle\app\crud\models\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->listSettings->listNameAttribute = 'teacher_name';
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schl_Teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['id', 'teacher_name'], 'required'],
            [['comments', 'tags'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'employee_id', 'title', 'teacher_name', 'TSC_number', 'status', 'created_by', 'updated_by'], 'string', 'max' => 140],
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
            'employee_id' => Yii::t('app', 'Employee ID'),
            'title' => Yii::t('app', 'Title'),
            'teacher_name' => Yii::t('app', 'Teacher Name'),
            'TSC_number' => Yii::t('app', 'Tsc Number'),
            'status' => Yii::t('app', 'Status'),
            'comments' => Yii::t('app', 'Comments'),
            'tags' => Yii::t('app', 'Tags'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
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
                'class' => Status_Employee::class,
                'attribute' => 'status'
            ]
        ];
    }
}
