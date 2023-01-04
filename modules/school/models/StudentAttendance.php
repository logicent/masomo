<?php

namespace crudle\ext\school\models;

use Yii;

/**
 * This is the model class for table "{{schl_Student_Attendance}}".
 */
class StudentAttendance extends Attendance
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{schl_Student_Attendance}}';
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'person_name' => Yii::t('app', 'Student name'),
        ]);
    }
}
