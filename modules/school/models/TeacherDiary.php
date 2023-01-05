<?php

namespace crudle\ext\school\models;

use Yii;

/**
 * This is the model class for table "{{schl_Teacher_Diary}}".
 * teacher_remarks
 * supervisor_remarks
 */
class TeacherDiary extends Diary
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{schl_Teacher_Diary}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['supervisor_remarks'], 'required'],
            [['teacher_remarks', 'supervisor_remarks'], 'string', 'max' => 280],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'person_name' => Yii::t('app', 'Teacher name'),
            'teacher_remarks' => Yii::t('app', 'Teacher remarks'),
            'supervisor_remarks' => Yii::t('app', 'Supervisor remarks'),
        ]);
    }
}
