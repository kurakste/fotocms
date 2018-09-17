<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180917_173248_servicies
 */
class m180917_173248_servicies extends Migration
{
    public function up()
    {
         $this->createTable('servecies', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'body' => Schema::TYPE_TEXT,
        ],
        'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB'
    );

    }

    public function down()
    {
        $this->dropTable('servecies');
    }
}
