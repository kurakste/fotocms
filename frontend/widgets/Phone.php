<?php

namespace frontend\widgets; 

use yii\base\Widget;

class Phone extends Widget 
{
    public $phone;
    public function init()
    {
        if ($this->phone === null) {
            $site = \backend\objects\Getsettings::get();
            $this->phone = $site->phone;
        }
        parent::init();
    }

    public function run()
    {
        return $this->phone;
    }
}
