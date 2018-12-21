<?php

use yii\db\Schema;
use yii\db\Migration;

class m181221_180607_order_items extends Migration
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
            '{{%order_items}}',
            [
                'id'=> $this->primaryKey(10)->unsigned(),
                'order_id'=> $this->integer(10)->unsigned()->notNull(),
                'product_id'=> $this->integer(10)->unsigned()->notNull(),
                'name'=> $this->string(255)->notNull(),
                'price'=> $this->float()->notNull(),
                'qty_item'=> $this->integer(11)->notNull(),
                'sum_item'=> $this->float()->notNull(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%order_items}}');
    }
}
