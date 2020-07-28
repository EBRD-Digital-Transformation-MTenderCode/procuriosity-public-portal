<?php
namespace frontend\controllers;

use frontend\models\Pages;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

Class PagesController extends Controller
{

    public function actionView($slug)
    {
        $this->layout = 'main';
        if(!$model = Pages::findOne(['slug' => $slug])) {
            throw new NotFoundHttpException('Not found page!');
        }

        return $this->render('view', [
            'model' => $model
        ]);
    }
}