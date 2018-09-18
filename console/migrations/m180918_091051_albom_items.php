<?php

use yii\db\Migration;
use yii\db\Schema;


/**
 * Class m180918_091051_albom_items
 */
class m180918_091051_albom_items extends Migration
{
    public function up()
    {
         $this->createTable('alboms', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'short_description' => Schema::TYPE_STRING,
            'main_image' => Schema::TYPE_STRING . ' NOT NULL',
            'images' => Schema::TYPE_STRING . '(2048) NOT NULL',
            'description' => Schema::TYPE_TEXT,
            ],

            'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB'
        );
        
    }

    public function down()
    {
        $this->dropTable('alboms');
    }
    
}
