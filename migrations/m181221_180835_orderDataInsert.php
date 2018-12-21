<?php

use yii\db\Schema;
use yii\db\Migration;

class m181221_180835_orderDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%order}}',
                           ["id", "created_at", "updated_at", "qty", "sum", "status", "name", "email", "phone", "address"],
                            [
    [
        'id' => '3',
        'created_at' => '2018-12-11 21:39:51',
        'updated_at' => '2018-12-11 21:39:51',
        'qty' => '5',
        'sum' => '280',
        'status' => '1',
        'name' => 'Екатерина Валентиновна',
        'email' => 'karakoch.kate@ukr.net',
        'phone' => '+380963836429',
        'address' => 'б. Центральный, 29-23',
    ],
    [
        'id' => '4',
        'created_at' => '2018-12-11 21:43:03',
        'updated_at' => '2018-12-11 21:43:03',
        'qty' => '5',
        'sum' => '280',
        'status' => '0',
        'name' => 'Анжела Васильевна',
        'email' => 'alena_89@mail.ru',
        'phone' => '+380984261010',
        'address' => 'Пархоменка вул. д. 14 кв 109',
    ],
    [
        'id' => '5',
        'created_at' => '2018-12-11 22:05:09',
        'updated_at' => '2018-12-11 22:05:09',
        'qty' => '1',
        'sum' => '56',
        'status' => '0',
        'name' => 'Кристина Сергеевна',
        'email' => 'deynegakristina@icloud.com',
        'phone' => '+380996707805',
        'address' => 'б. Центральный, 20-20',
    ],
    [
        'id' => '6',
        'created_at' => '2018-12-11 22:13:25',
        'updated_at' => '2018-12-11 22:13:25',
        'qty' => '3',
        'sum' => '132',
        'status' => '0',
        'name' => 'Алена Юрьевна',
        'email' => 'melnik.max00@gmail.com',
        'phone' => '+380999722216',
        'address' => 'б. Центральный',
    ],
    [
        'id' => '7',
        'created_at' => '2018-12-11 22:19:37',
        'updated_at' => '2018-12-11 22:19:37',
        'qty' => '1',
        'sum' => '56',
        'status' => '0',
        'name' => 'adasadada',
        'email' => 'melnik.max00@gmail.com',
        'phone' => '+380671915057',
        'address' => 'Патриотическая д. 55 кв. 63',
    ],
    [
        'id' => '8',
        'created_at' => '2018-12-11 22:21:46',
        'updated_at' => '2018-12-11 22:21:46',
        'qty' => '1',
        'sum' => '20',
        'status' => '0',
        'name' => 'melnik.max00@gmail.com',
        'email' => 'melnik.max00@gmail.com',
        'phone' => '4564',
        'address' => 'melnik.max00@gmail.com',
    ],
    [
        'id' => '9',
        'created_at' => '2018-12-11 22:25:06',
        'updated_at' => '2018-12-11 22:25:06',
        'qty' => '2',
        'sum' => '76',
        'status' => '0',
        'name' => 'mlnk2326@mail.ru',
        'email' => 'mlnk2326@mail.ru',
        'phone' => '+380999722216',
        'address' => 'б. Центральный',
    ],
    [
        'id' => '10',
        'created_at' => '2018-12-14 22:07:00',
        'updated_at' => '2018-12-14 22:07:00',
        'qty' => '2',
        'sum' => '112',
        'status' => '0',
        'name' => 'Мария Ильинична',
        'email' => 'zharkova.lyubov@ukr.net',
        'phone' => '+380500187350',
        'address' => 'Мира  д. 23 кв.5',
    ],
    [
        'id' => '11',
        'created_at' => '2018-12-14 22:16:09',
        'updated_at' => '2018-12-14 22:16:09',
        'qty' => '3',
        'sum' => '168',
        'status' => '0',
        'name' => 'Ирина Павловна',
        'email' => 'melnik.max00@gmail.com',
        'phone' => '+380635357682',
        'address' => 'ул. Троицкая',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%order}} CASCADE');
    }
}
