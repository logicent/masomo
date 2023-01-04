<?php

namespace crudle\ext\school\models;

use crudle\app\main\enums\Status_Active;
use Yii;

/**
 * This is the model class for table "schl_Employee".
 *
 * @property string $id
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $type
 * @property string $birth_date
 * @property string $sex
 * @property string $passport_photo
 * @property string $passport_no
 * @property string $national_ID_no
 * @property string $mobile_phone_no
 * @property string $personal_email
 * @property string $school_email
 * @property string $NHIF_no
 * @property string $NSSF_no
 * @property string $KRA_PIN
 * @property string $status
 * @property string $date_joined
 * @property string $date_left
 * @property string $period_joined
 * @property string $period_left
 * @property string $comments
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class Employee extends \crudle\app\crud\models\ActiveRecord
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
        return 'schl_Employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['first_name', 'last_name', 'type', 'period_joined'], 'required'],
            [['birth_date', 'date_joined', 'date_left'], 'safe'],
            [['first_name', 'middle_name', 'last_name', 'type', 'passport_photo', 'passport_no', 'national_ID_no', 'mobile_phone_no', 'personal_email', 'school_email', 'NHIF_no', 'NSSF_no', 'KRA_PIN', 'status', 'period_joined', 'period_left'], 'string', 'max' => 140],
            [['sex'], 'string', 'max' => 1],
        ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'id' => Yii::t('app', 'Employee No.'),
            'first_name' => Yii::t('app', 'First Name'),
            'middle_name' => Yii::t('app', 'Middle Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'type' => Yii::t('app', 'Type'),
            'birth_date' => Yii::t('app', 'Birth Date'),
            'sex' => Yii::t('app', 'Sex'),
            'passport_photo' => Yii::t('app', 'Passport Photo'),
            'passport_no' => Yii::t('app', 'Passport No.'),
            'national_ID_no' => Yii::t('app', 'National ID No.'),
            'mobile_phone_no' => Yii::t('app', 'Mobile Phone No.'),
            'personal_email' => Yii::t('app', 'Personal Email'),
            'school_email' => Yii::t('app', 'School Email'),
            'NHIF_no' => Yii::t('app', 'NHIF No.'),
            'NSSF_no' => Yii::t('app', 'NSSF No.'),
            'KRA_PIN' => Yii::t('app', 'KRA PIN'),
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
