<?php

namespace frontend\controllers;

use Yii;
use common\models\Curl;
use yii\web\Controller;

class PublicController extends Controller
{

    /**
     * @todo УДАЛИТЬ!!!!
     * @return array
     */
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

    /**
     * @param string $url
     * @return null
     * @throws \yii\web\HttpException
     */
    public function actionIndex($url)
    {
        $requestUrl = Yii::$app->params['public_url'] . $url;
        $result = Curl::sendRequest($requestUrl . '', "GET") ;
        if ($result['code'] == 200) {
            header('Content-Type: application/json');
            exit($result['body']);
        }
        return null;

    }

}