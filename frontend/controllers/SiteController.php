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
        $servecies = \app\models\Servecies::find()->all();
        $feedbacks =\app\models\Feedbacks::find()
            ->orderBy(['id'=>'DESC'])
            ->all();
        return $this->render('services',
            [
                'feedbacks' => $feedbacks,
                'servecies' => $servecies,
            ]);
    }

    public function actionFotosets()
    {
        $alboms = \app\models\Alboms::find()->all();

        return $this->render('fotosets',
            [
                'alboms' => $alboms,
            ]
        );
    }

    public function actionContacts()
    {
        $site = \backend\objects\Getsettings::get();
        
        return $this->render('contacts',
            [
                'site' => $site,
            ]);
    }

    public function actionBlog()
    {
        $posts = \app\models\Posts::find()->all();
        return $this->render('blog', ['posts' => $posts]);
    }


}
