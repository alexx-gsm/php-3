<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1480259628_createUsers
    extends Migration
{

    public function up()
    {
        $this->createTable('__users', [
            'name'       => ['type' => 'string'],
            'email'      => ['type' => 'string'],
            'password'   => ['type'=>'string'],
            'registered' => ['type' => 'date'],
            '__role_id'  => ['type'=>'link'],
        ], [
            ['columns' => ['email']],
        ]);

        $this->insert('__users', [
            'email'     => 'alexx-gsm@yandex.ru',
            'password'  => '$2y$10$C.y7Li3jIQIoycYuPKvExuB7/C.mALI8JureDx9rEUb3pEYmJa0ee',
        ]);
    }

    public function down()
    {
        $this->dropTable('__users');
    }
    
}