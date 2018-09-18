<?php

namespace frontend\controllers;

class FotosetController extends \yii\web\Controller
{
    public $layout = 'fotolayout';    
    public function actionIndex()
    {
        $id = \Yii::$app->request->get('id');
        $fotoset = \app\models\Alboms::findOne([$id]);
        return $this->render('index', ['fotoset' => $fotoset]);
    }

}
