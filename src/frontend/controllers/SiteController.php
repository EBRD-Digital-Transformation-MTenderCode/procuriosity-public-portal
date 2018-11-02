<?php

namespace frontend\controllers;

use frontend\models\Pages;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex()
    {
        if(!$modelPage = Pages::findOne(['slug'=>'main-page'])) {
            throw new NotFoundHttpException('Not main page');
        }

        return $this->render('index', [
            'modelPage' => $modelPage
        ]);
    }

    /**
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionPublic()
    {
        $this->layout = 'main_page';

        return $this->render('public', [

        ]);
    }

}
