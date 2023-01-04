<?php

namespace crudle\ext\school\models;

class SchoolCurriculum extends \crudle\app\crud\models\ActiveRecordDetail
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{schl_School_Curriculum}}';
    }

    public function rules()
    {
        return [
            ['name', 'string', 'max' => 140]
        ];
    }

    public static function foreignKeyAttribute()
    {
        return 'school_id';
    }
}