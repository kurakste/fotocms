<?php

namespace backend\objects;


class Getsettings 
{
    public static function get()
    {
        $webroot = \Yii::getAlias('@webroot');
        $file =$webroot.'/../../db/store';
        if (!file_exists($file)) {
            $site = new \backend\objects\Photosite;

        } else {
            $site = unserialize(file_get_contents($file));
        }

        return $site;
    
    }
}
