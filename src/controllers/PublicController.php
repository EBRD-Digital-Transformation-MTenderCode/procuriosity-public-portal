<?php

namespace app\controllers;

use Yii;
use app\models\Curl;
use yii\web\Controller;

class PublicController extends Controller
{
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