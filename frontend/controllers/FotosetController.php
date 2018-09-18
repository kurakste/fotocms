<?php

namespace frontend\controllers;

class FotosetController extends \yii\web\Controller
{
    public $layout = 'fotolayout';    
    public function actionIndex()
    {
        $id = \Yii::$app->request->get('id');
        return $this->render('index');
    }

}
