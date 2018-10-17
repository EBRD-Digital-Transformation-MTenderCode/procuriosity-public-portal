<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

Class RoleController extends Controller
{
    public function actionIndex()
    {
        $auth = Yii::$app->authManager;
        $admin = $auth->createRole('admin');
        $auth->add($admin);
    }
}