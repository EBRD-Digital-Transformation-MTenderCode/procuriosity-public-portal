<?php
namespace frontend\controllers;


use yii\rest\Controller;
use Yii;
use yii\web\Response;

class ParamsController extends Controller
{
    public function behaviors()
    {
        return [
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
                'cors' => [
                    'Origin' => ['*'],
                    'Access-Control-Request-Method' => ['GET'],
                    'Access-Control-Max-Age' => 3600,
                ],

            ],
        ];
    }

    public function actionIndex()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'elastic_service_url' => Yii::$app->params['elastic_service_url'],
            'public_url' => Yii::$app->params['public_url']
        ];
    }
}