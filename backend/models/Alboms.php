<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alboms".
 *
 * @property int $id
 * @property string $name
 * @property string $short_description
 * @property string $main_image
 * @property string $images
 * @property string $description
 */
class Alboms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alboms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'main_image', 'images'], 'required'],
            [['description'], 'string'],
            [['name', 'short_description', 'main_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'short_description' => 'Short Description',
            'main_image' => 'Main Image',
            'images' => 'Images',
            'description' => 'Description',
        ];
    }
    /*
     * returns array of images for this item
     */
    public function getImagesArray()
    {
        return explode(',', $this->images);
    }
}
