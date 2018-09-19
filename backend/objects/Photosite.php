<?php 

namespace backend\objects;

use yii\base\Model;

class Photosite extends Model 
{
    public $phone;
    public $aboutText;
    public $contacts;
    public $copyrights;

    public function __destruct()
    {
        $this->save();
    }

    public function rules()
{
    return [

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
