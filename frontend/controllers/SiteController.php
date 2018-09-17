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
        return $this->render('index', ['carusel' => $carusel]);
    }

    public function actionServices()
    {
        return $this->render('services');
    }

    public function actionFotosets()
    {
        return $this->render('fotosets');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionBlog()
    {
        return $this->render('blog');
    }

}
