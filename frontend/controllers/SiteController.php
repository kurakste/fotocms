<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $layout = 'fotolayout';

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->view->params['page'] = 0;
        $carusel = \app\models\Carusel::find()->all();
        $feedbacks = \app\models\Feedbacks::find()
            ->orderBy(['id'=>'DESC'])
            ->all();
        return $this->render('index', 
            [
                'carusel' => $carusel,
                'feedbacks' => $feedbacks,
            ]);
    }

    public function actionServices()
    {
        $this->view->params['page'] = 1;
        $servecies = \app\models\Servecies::find()->all();
        $feedbacks =\app\models\Feedbacks::find()
            ->orderBy(['id'=>'DESC'])
            ->all();
        $site = \backend\objects\Getsettings::get();


        return $this->render('services',
            [
                'feedbacks' => $feedbacks,
                'servecies' => $servecies,
                'site' => $site,
            ]);
    }

    public function actionFotosets()
    {
        $this->view->params['page'] = 2;
        $alboms = \app\models\Alboms::find()->all();

        return $this->render('fotosets',
            [
                'alboms' => $alboms,
            ]
        );
    }

    public function actionContacts()
    {
        $this->view->params['page'] = 4;
        $site = \backend\objects\Getsettings::get();
        
        return $this->render('contacts',
            [
                'site' => $site,
            ]);
    }

    public function actionBlog()
    {
        $this->view->params['page'] = 3;
        $posts = \app\models\Posts::find()->all();
        return $this->render('blog', ['posts' => $posts]);
    }


}
