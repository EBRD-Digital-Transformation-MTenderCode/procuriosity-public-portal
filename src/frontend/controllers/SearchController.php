<?php

namespace frontend\controllers;

use Yii;
use common\models\Curl;
use yii\web\Controller;
use yii\web\Response;

class SearchController extends Controller
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
     * @return null
     * @throws \yii\web\HttpException
     */
    public function actionBudgets()
    {
        $requestUrl = Yii::$app->params['elastic_service_url'] . '/search/budgets';
        $queryString = Yii::$app->request->getQueryString();
        $queryString = $queryString ? "?" . $queryString : "";

        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $result = Curl::sendRequest($requestUrl . $queryString, "GET") ;
        if ($result['code'] == 200) {
            $response->content = $result['body'];
        }
        return $response;
    }

    /**
     * @return \yii\console\Response|Response
     * @throws \yii\web\HttpException
     */
    public function actionTenders()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $requestUrl = Yii::$app->params['elastic_service_url'] . '/search/tenders';
        $queryString = Yii::$app->request->getQueryString();
        $queryString = $queryString ? "?" . $queryString : "";

        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $result = Curl::sendRequest($requestUrl . $queryString, "GET") ;
        $response->content = $result['body'];
        return $response;
    }

    /**
     * @return \yii\console\Response|Response
     * @throws \yii\web\HttpException
     */
    public function actionContracts()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $requestUrl = Yii::$app->params['elastic_service_url'] . '/search/contracts';
        $queryString = Yii::$app->request->getQueryString();
        $queryString = $queryString ? "?" . $queryString : "";

        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $result = Curl::sendRequest($requestUrl . $queryString, "GET") ;
        $response->content = $result['body'];
        return $response;
    }

    /**
     * @return \yii\console\Response|Response
     * @throws \yii\web\HttpException
     */
    public function actionPlans()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $requestUrl = Yii::$app->params['elastic_service_url'] . '/search/plans';
        $queryString = Yii::$app->request->getQueryString();
        $queryString = $queryString ? "?" . $queryString : "";

        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $result = Curl::sendRequest($requestUrl . $queryString, "GET") ;
        $response->content = $result['body'];
        return $response;
    }

    /**
     * @return \yii\console\Response|Response
     * @throws \yii\web\HttpException
     */
    public function actionCpv()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $requestUrl = Yii::$app->params['elastic_service_url'] . '/search/cpv';
        $queryString = Yii::$app->request->getQueryString();
        $queryString = $queryString ? "?" . $queryString : "";

        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $result = Curl::sendRequest($requestUrl . $queryString, "GET") ;
        $response->content = $result['body'];
        return $response;
    }

}