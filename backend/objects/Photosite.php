<?php 

namespace backend\objects;

use yii\base\Model;

class Photosite extends Model 
{
    public $phone;
    public $aboutText;
    public $contacts;
    public $copyrights;
    public $services_main_image;
    public $services_second_image;
    public $services_video_link;
    public $services_video_article;
    public $contacts_photo;
    public $script_1;
    public $script_2;


    public function __destruct()
    {
        $this->save();
    }
    public function rules()
    {
        return [
                [[
                    'phone', 'aboutText', 'contacts', 'copyrights',
                    'services_main_image', 'services_second_image',
                    'services_video_link', 'services_video_article',
                    'contacts_photo', 'script_1', 'script_2', 
                ], 
                'safe'],
            ];
    }

    public function save()
    {
        $webroot = \Yii::getAlias('@webroot');
        $file =$webroot.'/../../db/store';

        if (!file_exists($file)) {
            fclose(fopen($file, 'w+'));
        }

        $f = fopen($file, "r+b");
        flock($f, LOCK_EX);
        fwrite($f, serialize($this));
        fclose($f);
    }

}
