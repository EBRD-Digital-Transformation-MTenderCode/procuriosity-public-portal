<?php

namespace app\controllers;

use Yii;
use app\models\Curl;
use yii\web\Controller;

class SearchController extends Controller
{
    /**
     * @return null
     * @throws \yii\web\HttpException
     */
    public function actionBudgets()
    {
        $requestUrl = Yii::$app->params['elastic_service_url'] . '/rest-api/v1/budgets/search';
        $queryString = Yii::$app->request->getQueryString();
        $queryString = $queryString ? "?" . $queryString : "";

        $result = Curl::sendRequest($requestUrl . $queryString, "GET") ;
        if ($result['code'] == 200) {
            header('Content-Type: application/json');
            exit($result['body']);
        }
        return null;

    }

    /**
     * @return array
     * @throws \yii\web\HttpException
     */
    public function actionTenders()
    {
        $requestUrl = Yii::$app->params['elastic_service_url'] . '/rest-api/v1/tenders/search';
        $queryString = Yii::$app->request->getQueryString();
        $queryString = $queryString ? "?" . $queryString : "";

        $result = Curl::sendRequest($requestUrl . $queryString, "GET") ;
        if ($result['code'] == 200) {
            header('Content-Type: application/json');
            exit($result['body']);
        }
        return null;
    }

}