<?php

use yii\db\Schema;
use yii\db\Migration;

class m181221_180648_user extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%user}}',
            [
                'id'=> $this->primaryKey(10)->unsigned(),
                'username'=> $this->string(255)->notNull(),
                'password'=> $this->string(255)->notNull(),
                'auth_key'=> $this->string(255)->null()->defaultValue(null),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
