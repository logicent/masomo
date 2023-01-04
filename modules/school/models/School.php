<?php

namespace crudle\ext\school\models;

use crudle\app\crud\enums\Type_Relation;
use crudle\ext\school\enums\Status_School_Period;
use Yii;

/**
 * This is the model class for table "{{schl_School}}".
 *
 * @property string $id
 * @property string $title
 * @property string $status
 * @property string $comments
 * @property string $name
 * @property string $established
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class School extends \crudle\app\crud\models\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->listSettings->listNameAttribute = 'name';
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{schl_School}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['name', 'email_address', 'established'], 'required'],
            [['established'], 'date', 'format' => 'php:Y-m-d'],
            [[
                'name', 'email_address', 'phone_number', 'paybill_no', 'phone_account_no', 'badge'
            ], 'string', 'max' => 140],
            ['email_address', 'email'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'id' => Yii::t('app', 'School code'),
            'name' => Yii::t('app', 'School name'),
            'established' => Yii::t('app', 'Established'),
            'email_address'    =>  Yii::t('app', 'Email address'),
        ]);
    }

    public static function relations(): array
    {
        return [
            'schoolCurriculum' => [
                'class' => SchoolCurriculum::class,
                'type' => Type_Relation::ChildModel,
            ],
            // 'schoolSyllabus' => [
            //     'class' => SchoolSyllabus::class,
            //     'type' => Type_Relation::ChildModel,
            // ],
            'schoolLevel' => [
                'class' => SchoolLevel::class,
                'type' => Type_Relation::ChildModel,
            ],
        ];
    }

    public function getSchoolCurriculum()
    {
        return $this->hasMany(SchoolCurriculum::class, ['school_id' => 'id']);
    }

    public function getSchoolSyllabus()
    {
        return $this->hasMany(SchoolSyllabus::class, ['school_id' => 'id']);
    }

    public function getSchoolLevel()
    {
        return $this->hasMany(SchoolLevel::class, ['school_id' => 'id']);
    }

    public static function enums()
    {
        return [
            'status' => [
                'class' => Status_School_Period::class,
                'attribute' => 'status'
            ]
        ];
    }

    public static function autoSuggestIdValue()
    {
        return false;
    }
}
