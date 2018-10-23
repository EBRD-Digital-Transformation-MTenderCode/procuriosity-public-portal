<?php
namespace console\controllers;

use common\models\SignupForm;
use Yii;
use yii\console\Controller;

Class AdminController extends Controller
{
    public function actionIndex()
    {
        $modelSignup = new SignupForm();
        $modelSignup->username = Yii::$app->params['admin_user'];
        $modelSignup->email = Yii::$app->params['admin_email'];
        $modelSignup->password = Yii::$app->params['admin_password'];
        $user = $modelSignup->signup();

        $auth = Yii::$app->authManager;
        $role = 'admin';
        $getRole = $auth->getRole($role);
        $auth->assign($getRole, $user->id);
    }
}