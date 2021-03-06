<?php

namespace frontend\controllers;

class PostController extends \yii\web\Controller
{
    public $layout = 'fotolayout';
    public function actionIndex()
    {

        $id = \Yii::$app->request->get('id');
        $site = \backend\objects\Getsettings::get();
        

        $post = \app\models\Posts::findOne([$id]);
        return $this->render('index',
            [
                'post' => $post,
                'site' => $site,
            ]);
    }

}
