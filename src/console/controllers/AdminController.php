<?php
namespace console\controllers;

use common\models\SignupForm;
use Yii;
use yii\console\Controller;

Class AdminController extends Controller
{
    const ADMIN_ROLE = 'admin';

    public function actionCreateRole()
    {
        $auth = Yii::$app->authManager;
        $admin = $auth->createRole(self::ADMIN_ROLE);
        $auth->add($admin);
    }

    public function actionCreateUser()
    {
        $modelSignup = new SignupForm();
        $modelSignup->username = Yii::$app->params['admin_user'];
        $modelSignup->email = Yii::$app->params['admin_email'];
        $modelSignup->password = Yii::$app->params['admin_password'];
        $user = $modelSignup->signup();

        $auth = Yii::$app->authManager;
        $role = self::ADMIN_ROLE;
        $getRole = $auth->getRole($role);
        $auth->assign($getRole, $user->id);
    }
}