<?php

use yii\db\Schema;
use yii\db\Migration;

class m181221_180934_userDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%user}}',
                           ["id", "username", "password", "auth_key"],
                            [
    [
        'id' => '1',
        'username' => 'admin',
        'password' => '$2y$13$1Ch5sE9cGOZ/CE1juwkfauw/pvpPI06BC8XlpdY5DB0ixe60KXFFq',
        'auth_key' => 'z4yD3BC8KbcNDTmxAZZVejtsGoukvcoG',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%user}} CASCADE');
    }
}
