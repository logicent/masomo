<?php

namespace crudle\ext\school\models;

use crudle\app\crud\enums\Type_Relation;
use crudle\app\main\enums\Status_Active;
use Yii;

/**
 * This is the model class for table "{{schl_School_Group}}".
 *
 * @property string $id
 * @property string $title
 * @property string $status
 * @property string $comments
 * @property string $name
 * @property string $tags
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class SchoolGroup extends \crudle\app\crud\models\ActiveRecord
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
        return '{{schl_School_Group}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(),
            [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 140],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'name' => Yii::t('app', 'Group name'),
        ]);
    }

    public static function relations()
    {
        return [
            'groupMember' => [
                // 'class' => GroupMember::class,
                // 'type' => Type_Relation::ChildModel,
            ],
        ];
    }

    // public function getGroupMember()
    // {
    //     return $this->hasMany(GroupMember::class, ['team_id' => 'id']);
    // }

    public static function enums()
    {
        return [
            'status' => [
                'class' => Status_Active::class,
                'attribute' => 'status'
            ]
        ];
    }
}
