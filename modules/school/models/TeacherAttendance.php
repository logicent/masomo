<?php

namespace crudle\ext\school\models;

use Yii;

/**
 * This is the model class for table "{{schl_Teacher_Attendance}}".
 */
class TeacherAttendance extends Attendance
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{schl_Teacher_Attendance}}';
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'person_name' => Yii::t('app', 'Teacher name'),
        ]);
    }
}
