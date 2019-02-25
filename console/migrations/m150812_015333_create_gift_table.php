<?php

use yii\db\Schema;
use yii\db\Migration;

class m150812_015333_create_gift_table extends Migration
{
    public function up()
    {
        $this->createTable('gift', [
            'code' => Schema::TYPE_STRING . ' NOT NULL',
            'type' => Schema::TYPE_STRING . ' NOT NULL',
            'value' => Schema::TYPE_STRING . ' NOT NULL',
            'status' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('gift');

        return false;
    }
}
