<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180918_125255_blog
 */
class m180918_125255_blog extends Migration
{
    public function up()
    {
         $this->createTable('posts', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'short_description' => Schema::TYPE_STRING,
            'main_image' => Schema::TYPE_STRING . ' NOT NULL',
            'body' => Schema::TYPE_TEXT,
            'tags' => Schema::TYPE_STRING,

            ],

            'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB'
        );
        
    }

    public function down()
    {
        $this->dropTable('posts');
    }
}
