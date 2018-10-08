<?php
namespace frontend\controllers;


use yii\rest\Controller;
use Yii;
use yii\web\Response;

class ParamsController extends Controller
{

    public function actionIndex()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'elastic_service_url' => Yii::$app->params['elastic_service_url']
        ];
    }
}