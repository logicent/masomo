<?php

namespace crudle\ext\school\models;

use crudle\app\main\enums\Status_Active;
use Yii;

/**
 * This is the model class for table "schl_Student".
 *
 * @property string $id
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $birth_date
 * @property string $sex
 * @property string $passport_photo
 * @property string $status
 * @property string $comments
 * @property string $date_joined
 * @property string $date_left
 * @property string $period_joined
 * @property string $period_left
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class Student extends \crudle\app\crud\models\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->listSettings->listNameAttribute = 'title';
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schl_Student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['first_name', 'last_name', 'period_joined'], 'required'],
            [['birth_date', 'date_joined'], 'date', 'format' => 'php:Y-m-d'],
            [['title', 'first_name', 'middle_name', 'last_name', 'passport_photo', 'status', 'period_joined'], 'string', 'max' => 140],
            [['sex'], 'string', 'max' => 1],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'id' => Yii::t('app', 'Student ID'),
            'title' => Yii::t('app', 'Student Name'),
            'first_name' => Yii::t('app', 'First Name'),
            'middle_name' => Yii::t('app', 'Middle Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'birth_date' => Yii::t('app', 'Birth Date'),
            'sex' => Yii::t('app', 'Sex'),
            'passport_photo' => Yii::t('app', 'Passport Photo'),
            'status' => Yii::t('app', 'Status'),
            'date_joined' => Yii::t('app', 'Date Joined'),
            'date_left' => Yii::t('app', 'Date Left'),
            'period_joined' => Yii::t('app', 'Period Joined'),
            'period_left' => Yii::t('app', 'Period Left'),
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
