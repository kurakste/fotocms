<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedbacks".
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $image
 * @property string $tags
 */
class Feedbacks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedbacks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'image'], 'required'],
            [['body'], 'string'],
            [['title', 'image', 'tags'], 'string', 'max' => 255],
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
            'body' => 'Body',
            'image' => 'Image',
            'tags' => 'Tags',
        ];
    }
}
