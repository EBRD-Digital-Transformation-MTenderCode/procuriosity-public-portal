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
        if(!$auth->getRole(self::ADMIN_ROLE)) {
            $admin = $auth->createRole(self::ADMIN_ROLE);
            $auth->add($admin);
        } else {
            echo("Role " . self::ADMIN_ROLE . " already exist\n");
        }
    }

    public function actionCreateUser()
    {
        if(Yii::$app->db->createCommand('SELECT COUNT(*) FROM auth_assignment WHERE item_name=:item_name')
            ->bindValue(':item_name', self::ADMIN_ROLE)
            ->queryScalar()) {
            exit("User with role " . self::ADMIN_ROLE . " already exist\n");
        }

        $modelSignup = new SignupForm();
        $modelSignup->username = Yii::$app->params['admin_user'];
        $modelSignup->email = Yii::$app->params['admin_email'];
        $modelSignup->password = Yii::$app->params['admin_password'];
        $user = $modelSignup->signup();

        $auth = Yii::$app->authManager;
        $role = self::ADMIN_ROLE;
        $getRole = $auth->getRole($role);
        try {
            $auth->assign($getRole, $user->id);
        }catch (\Exception $e) {
            echo("User " . $modelSignup->username . " already have role " . $role . "\n");
        }
    }
}