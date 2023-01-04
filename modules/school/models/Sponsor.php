<?php

namespace crudle\ext\school\models;

use crudle\app\main\enums\Status_Active;
use Yii;

/**
 * This is the model class for table "schl_Sponsor".
 *
 * @property string $id
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $sex
 * @property string $ID_type
 * @property string $ID_no
 * @property string $mobile_phone_no
 * @property string $personal_email
 * @property string $status
 * @property string $comments
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class Sponsor extends \crudle\app\crud\models\ActiveRecord
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
        return 'schl_Sponsor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['id', 'first_name', 'last_name'], 'required'],
            [['comments', 'tags'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'title', 'first_name', 'middle_name', 'last_name', 'ID_type', 'ID_no', 'mobile_phone_no', 'personal_email', 'status', 'created_by', 'updated_by'], 'string', 'max' => 140],
            [['sex'], 'string', 'max' => 1],
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
            'title' => Yii::t('app', 'Title'),
            'first_name' => Yii::t('app', 'First Name'),
            'middle_name' => Yii::t('app', 'Middle Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'sex' => Yii::t('app', 'Sex'),
            'ID_type' => Yii::t('app', 'Id Type'),
            'ID_no' => Yii::t('app', 'Id No'),
            'mobile_phone_no' => Yii::t('app', 'Mobile Phone No'),
            'personal_email' => Yii::t('app', 'Personal Email'),
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
                'class' => Status_Active::class,
                'attribute' => 'inactive'
            ]
        ];
    }
}
