<?php

use yii\db\Schema;
use yii\db\Migration;

class m181221_180340_category extends Migration
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
            '{{%category}}',
            [
                'id'=> $this->primaryKey(10)->unsigned(),
                'parent_id'=> $this->integer(10)->unsigned()->notNull()->defaultValue('0'),
                'name'=> $this->string(255)->notNull(),
                'keywords'=> $this->string(255)->null()->defaultValue(null),
                'description'=> $this->string(255)->null()->defaultValue(null),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
