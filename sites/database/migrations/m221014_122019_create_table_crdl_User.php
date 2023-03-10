<?php

use yii\db\Migration;

class m221014_122019_create_table_crdl_User extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%User}}',
            [
                'id' => $this->string(140)->notNull()->append('PRIMARY KEY'),
                'firstname' => $this->string(140)->notNull(),
                'surname' => $this->string(140)->notNull(),
                'title_of_courtesy' => $this->string(140),
                'sex' => $this->char(),
                'personal_email' => $this->string(140),
                'mobile_no' => $this->string(140),
                'official_status' => $this->string(140)->defaultValue('On Duty'),
                'status' => $this->string(140),
                'avatar' => $this->string(140),
                'notes' => $this->text(),
                'user_role' => $this->string(140),
                'user_group' => $this->string(140),
                'comments' => $this->text(),
                'created_at' => $this->dateTime(),
                'created_by' => $this->string(140),
                'updated_at' => $this->dateTime(),
                'updated_by' => $this->string(140),
            ],
            $tableOptions
        );

        $this->createIndex('created_by', '{{%User}}', ['created_by']);
        $this->createIndex('user_group', '{{%User}}', ['user_group']);
        $this->createIndex('updated_by', '{{%User}}', ['updated_by']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%User}}');
    }
}
