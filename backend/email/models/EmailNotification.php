<?php

namespace crudle\app\email\models;

use crudle\app\crud\models\BaseActiveRecord;
use crudle\app\main\enums\Status_Active;
use crudle\app\user\enums\Permission_Group;
use crudle\app\user\enums\Type_Permission;
use Yii;

class EmailNotification extends BaseActiveRecord
{
    public function init()
    {
        parent::init();
        $this->listSettings->listNameAttribute = 'id';
    }

    public static function tableName()
    {
        return '{{%Email_Notification}}';
    }

    public function rules()
    {
        return [
            // TODO: valid cc_recipients email addresses
            [['cc_recipients', 'cc_if_statuses', 'cc_paused', 
                'notifications_paused'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Name'),
            'cc_recipients' => Yii::t('app', 'List cc. recipients'),
            'cc_if_statuses' => Yii::t('app', 'Only cc. recipients if status is'),
            'cc_paused' => Yii::t('app', 'Pause notifications to cc. recipients listed above'),
            'notifications_paused' => Yii::t('app', 'Pause system notifications to primary recipients'),
        ];
    }

    public function attributeHints()
    {
        return [
            'cc_recipients' => Yii::t('app', 'comma-separated addresses of people to be notified in addition to the main recipients'),
            'cc_if_statuses' => Yii::t('app', 'i.e. restrict the notifications to when selected statuses apply')
        ];
    }

    public function populateAttributes( $settings )
    {
        foreach ( $settings as $setting )
        {
            if ($setting['attribute'] === 'cc_if_statuses')
            {
                $this->{$setting['attribute']} = explode(',', $setting['value']);
                continue;
            }
            $this->{$setting['attribute']} = $setting['value'];
        }
    }

    public static function permissions()
    {
        return array_merge(
            Type_Permission::enums(Permission_Group::Crud),
            Type_Permission::enums(Permission_Group::Data),
        );
    }

    // ActiveRecord Interface
    public static function enums()
    {
        return [
            'status' => [
                'class' => Status_Active::class,
                'attribute' => 'inactive'
            ],
        ];
    }

    public static function autoSuggestIdValue()
    {
        return false;
    }

    public function afterFind()
    {
        $this->cc_if_statuses = explode(',', $this->cc_if_statuses);
        return parent::find();
    }
}
