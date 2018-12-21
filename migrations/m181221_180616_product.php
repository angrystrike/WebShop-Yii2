<?php

use yii\db\Schema;
use yii\db\Migration;

class m181221_180616_product extends Migration
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
            '{{%product}}',
            [
                'id'=> $this->primaryKey(10)->unsigned(),
                'category_id'=> $this->integer(10)->unsigned()->notNull(),
                'name'=> $this->string(255)->notNull(),
                'content'=> $this->text()->null()->defaultValue(null),
                'price'=> $this->float()->notNull()->defaultValue("0"),
                'keywords'=> $this->string(255)->null()->defaultValue(null),
                'description'=> $this->string(255)->null()->defaultValue(null),
                'img'=> $this->string(255)->null()->defaultValue('no-image.png'),
                'hit'=> "enum('0', '1') NOT NULL DEFAULT '0'",
                'new'=> "enum('0', '1') NOT NULL DEFAULT '0'",
                'sale'=> "enum('0', '1') NOT NULL DEFAULT '0'",
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
