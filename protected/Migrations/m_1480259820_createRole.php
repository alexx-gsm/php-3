<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1480259820_createRole
    extends Migration
{

    public function up()
    {
        $this->createTable('roles', [
            'name' => ['type'=>'string'],
            'title' => ['type'=>'string'],
        ], [
            ['columns' => ['name']]
        ]);

        $adminRoleId = $this->insert('roles', [
            'name'  => 'admin',
            'title' => 'Администратор'
        ]);
        $this->insert('roles', [
            'name'  => 'user',
            'title' => 'Пользователь'
        ]);




    }

    public function down()
    {
        $this->dropTable('roles');
    }
    
}