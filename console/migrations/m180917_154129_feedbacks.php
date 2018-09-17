<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180917_154129_feedbacks
 */
class m180917_154129_feedbacks extends Migration
{
    public function up()
    {
         $this->createTable('feedbacks', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'body' => Schema::TYPE_TEXT,
            'image' => Schema::TYPE_STRING . ' NOT NULL',
            'tags' => Schema::TYPE_STRING,
        ],
        'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB'
    );

    }

    public function down()
    {
        $this->dropTable('feedbacks');
    }
}
