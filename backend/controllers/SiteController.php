<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\NotAcceptableHttpException;
use yii\helpers\Url;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index', 'settings', 'logout'],
                        'roles' => ['@'],
                    ],
                    [
                        //see captcha and error added here, this fixes the issue
                        'actions' => ['forgot', 'reset-password', 'captcha', 'error'],
                        'allow' => true,
                        'roles' => ['?', '@'],
                    ],
                ],
            ],
        ];
    }

    /**
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        phpinfo();
        die;
        return $this->render('index');
    }

    public function actionSettings()
    {
        $site = \backend\objects\Getsettings::get();
        $request = \Yii::$app->request;

        if ($request->isPost) {

            $site->load($request->post('Photosite'), ''); 

            if ($site->validate()) {
                 $site->save();
                 return $this->redirect(Url::to(['site/settings']));
            } else {
                throw new NotAcceptableHttpException('Переданы не корректные данные');
                return false;
            }
        }

        

        return $this->render('settings', ['site' => $site ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout='loginadminlte';
        /* if (!Yii::$app->user->isGuest) { */
        /*     return $this->goHome(); */
        /* } */

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
