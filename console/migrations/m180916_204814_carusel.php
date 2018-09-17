<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180916_204814_carusel
 */
class m180916_204814_carusel extends Migration
{

    public function up()
    {
         $this->createTable('carusel', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'alt' => Schema::TYPE_TEXT,
            'filename' => Schema::TYPE_STRING . ' NOT NULL',
            'link' => Schema::TYPE_STRING . ' NOT NULL',
        ],
        'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB'
    );

    }

    public function down()
    {
        $this->dropTable('carusel');
    }
}
