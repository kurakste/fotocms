<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title
 * @property string $short_description
 * @property string $main_image
 * @property string $body
 * @property string $tags
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'main_image'], 'required'],
            [['body'], 'string'],
            [['title', 'short_description', 'main_image', 'tags'], 'string', 'max' => 255],
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
            'short_description' => 'Short Description',
            'main_image' => 'Main Image',
            'body' => 'Body',
            'tags' => 'Tags',
        ];
    }
}
