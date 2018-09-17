<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carusel".
 *
 * @property int $id
 * @property string $title
 * @property string $alt
 * @property string $filename
 * @property string $link
 */
class Carusel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carusel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['filename'], 'required'],
            [['alt'], 'string'],
            [['title', 'filename', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'alt' => 'Alt',
            'filename' => 'Filename',
            'link' => 'Link',
        ];
    }
}
