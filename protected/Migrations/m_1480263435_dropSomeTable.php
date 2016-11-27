<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1480263435_dropSomeTable
    extends Migration
{

    public function up()
    {
        if ($this->existsTable('some_table')) {
            $this->dropTable('some_table');
        }
    }

    public function down()
    {
        if (!$this->existsTable('some_table')) {
            $this->createTable('some_table',[
                'field_1' => ['type' => 'string'],
                'field_2' => ['type' => 'string']
                // etc
            ]);
        }
    }
    
}