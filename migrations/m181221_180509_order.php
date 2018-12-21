<?php

use yii\db\Schema;
use yii\db\Migration;

class m181221_180509_order extends Migration
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
            '{{%order}}',
            [
                'id'=> $this->primaryKey(10)->unsigned(),
                'created_at'=> $this->datetime()->notNull(),
                'updated_at'=> $this->datetime()->notNull(),
                'qty'=> $this->integer(10)->notNull(),
                'sum'=> $this->float()->notNull(),
                'status'=> "enum('0', '1') NOT NULL DEFAULT '0'",
                'name'=> $this->string(255)->notNull(),
                'email'=> $this->string(255)->notNull(),
                'phone'=> $this->string(255)->notNull(),
                'address'=> $this->string(255)->notNull(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
