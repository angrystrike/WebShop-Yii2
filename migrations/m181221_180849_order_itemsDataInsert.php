<?php

use yii\db\Schema;
use yii\db\Migration;

class m181221_180849_order_itemsDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%order_items}}',
                           ["id", "order_id", "product_id", "name", "price", "qty_item", "sum_item"],
                            [
    [
        'id' => '1',
        'order_id' => '3',
        'product_id' => '2',
        'name' => 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие',
        'price' => '56',
        'qty_item' => '5',
        'sum_item' => '280',
    ],
    [
        'id' => '2',
        'order_id' => '4',
        'product_id' => '2',
        'name' => 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие',
        'price' => '56',
        'qty_item' => '5',
        'sum_item' => '280',
    ],
    [
        'id' => '3',
        'order_id' => '5',
        'product_id' => '2',
        'name' => 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие',
        'price' => '56',
        'qty_item' => '1',
        'sum_item' => '56',
    ],
    [
        'id' => '4',
        'order_id' => '6',
        'product_id' => '2',
        'name' => 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие',
        'price' => '56',
        'qty_item' => '2',
        'sum_item' => '112',
    ],
    [
        'id' => '5',
        'order_id' => '6',
        'product_id' => '3',
        'name' => 'Блуза Mango 53005681-05 M Бежевая',
        'price' => '20',
        'qty_item' => '1',
        'sum_item' => '20',
    ],
    [
        'id' => '6',
        'order_id' => '7',
        'product_id' => '2',
        'name' => 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие',
        'price' => '56',
        'qty_item' => '1',
        'sum_item' => '56',
    ],
    [
        'id' => '7',
        'order_id' => '8',
        'product_id' => '3',
        'name' => 'Блуза Mango 53005681-05 M Бежевая',
        'price' => '20',
        'qty_item' => '1',
        'sum_item' => '20',
    ],
    [
        'id' => '8',
        'order_id' => '9',
        'product_id' => '3',
        'name' => 'Блуза Mango 53005681-05 M Бежевая',
        'price' => '20',
        'qty_item' => '1',
        'sum_item' => '20',
    ],
    [
        'id' => '9',
        'order_id' => '9',
        'product_id' => '2',
        'name' => 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие',
        'price' => '56',
        'qty_item' => '1',
        'sum_item' => '56',
    ],
    [
        'id' => '10',
        'order_id' => '10',
        'product_id' => '2',
        'name' => 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие',
        'price' => '56',
        'qty_item' => '2',
        'sum_item' => '112',
    ],
    [
        'id' => '11',
        'order_id' => '11',
        'product_id' => '2',
        'name' => 'Джинсы MR520 MR 227 20002 0115 29-34 р Синие',
        'price' => '56',
        'qty_item' => '3',
        'sum_item' => '168',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%order_items}} CASCADE');
    }
}
