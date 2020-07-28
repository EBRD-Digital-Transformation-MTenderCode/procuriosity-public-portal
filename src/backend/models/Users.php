<?php
namespace backend\models;

use common\models\User;
use Yii;

/**
 * Class Users
 * @package common\models
 */
class Users extends User
{
    public $password;
    public $password_repeat;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'message' => 'This email address has already been taken.'],

            ['password', 'required', 'on' => ['create']],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'skipOnEmpty' => false, 'message'=>"Passwords don't match"],

            ['role', 'required'],
            ['role', 'exist', 'targetClass' => Roles::className(), 'targetAttribute' => 'name'],
        ];
    }

    /**
     * @param bool $insert
     * @return bool
     */
    public function beforeSave($insert)
    {
        if(!empty($this->password)) {
            $this->setPassword($this->password);
            $this->generateAuthKey();
        }

        return parent::beforeSave($insert);
    }

    public function afterSave($insert, $changedAttributes)
    {
        $auth = Yii::$app->authManager;
        $getRole = $auth->getRole($this->role);
        $auth->revokeAll($this->id);
        $auth->assign($getRole, $this->id);

        parent::afterSave($insert, $changedAttributes);
    }

    public function beforeDelete()
    {
        $auth = Yii::$app->authManager;
        $auth->revokeAll($this->id);
        return parent::beforeDelete();
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        $roles = array_keys(Yii::$app->authManager->getRolesByUser($this->id));
        return (!empty($roles[0])) ? $roles[0] : null;
    }
}
