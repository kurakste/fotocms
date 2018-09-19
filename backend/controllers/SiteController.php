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
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'settings' =>['post' , 'get']

                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    /* public function actions() */
    /* { */
    /*     return [ */
    /*         'error' => [ */
    /*             'class' => 'yii\web\ErrorAction', */
    /*         ], */
    /*     ]; */
    /* } */

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSettings()
    {
        $webroot = \Yii::getAlias('@webroot');
        $file =$webroot.'/../../db/store';
        if (!file_exists($file)) {
            $site = new \backend\objects\Photosite;

        } else {
            $site = unserialize(file_get_contents($file));
        }

        $request = \Yii::$app->request;
        if ($request->isPost) {
            $site->phone = $request->post('phone') ?? "";
            $site->aboutText = $request->post('aboutText') ?? "";
            $site->contacts = $request->post('contacts') ?? "";

            if ($site->validate()) {
                 $site->save();
                 return $this->redirect(Url::to(['site/settings']));
            } else {
                throw new NotAcceptableHttpException('Переданы не корректные данные');
                return;
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
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

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
