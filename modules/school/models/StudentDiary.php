<?php

namespace crudle\ext\school\models;

use crudle\ext\school\enums\Status_Diary;
use Yii;

/**
 * This is the model class for table "{{schl_Student_Diary}}".
 * sponsor_remarks
 * teacher_remarks
 */
class StudentDiary extends Diary
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{schl_Student_Diary}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['teacher_remarks'], 'required'],
            [['sponsor_remarks', 'teacher_remarks'], 'string', 'max' => 280],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'person_name' => Yii::t('app', 'Student name'),
            'sponsor_remarks' => Yii::t('app', 'Parent/Guardian remarks'),
            'teacher_remarks' => Yii::t('app', 'Teacher remarks'),
        ]);
    }

    public static function enums()
    {
        return [
            'status' => [
                'class' => Status_Diary::class,
                'attribute' => 'status'
            ]
        ];
    }
}
