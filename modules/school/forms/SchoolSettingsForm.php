<?php

namespace crudle\ext\school\forms;

use crudle\app\crud\enums\Type_Relation;
use crudle\app\main\forms\UploadForm;
use crudle\app\setting\models\base\BaseSettingsForm;
use crudle\ext\school\models\SchoolCurriculum;
use crudle\ext\school\models\SchoolLevel;
use crudle\ext\school\models\SchoolSyllabus;
use Yii;

class SchoolSettingsForm extends BaseSettingsForm
{
    public $schoolBanner;

    public function init()
    {
        $this->uploadForm = new UploadForm();
        $this->fileAttribute = 'schoolBanner';
    }

    public function rules()
    {
        return [
            [[
                'schoolBanner',
            ], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'schoolBanner'    =>  Yii::t('app', 'Banner'),
        ];
    }

    public static function hasMixedValueFields(): bool
    {
        return true;
    }

    public static function mixedValueFields(): array
    {
        return [
            // Type_Mixed_Value::JsonFormatted => [
            // ]
        ];
    }
}
