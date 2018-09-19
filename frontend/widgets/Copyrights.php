<?php

namespace frontend\widgets; 

use yii\base\Widget;

class Copyrights extends Widget 
{
    public $cp;
    public function init()
    {
        if ($this->cp === null) {
            $site = \backend\objects\Getsettings::get();
            $this->cp = $site->copyrights;
        }
        parent::init();
    }

    public function run()
    {
        return $this->cp;
    }
}
