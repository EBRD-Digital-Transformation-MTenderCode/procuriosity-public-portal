<?php

namespace frontend\controllers;

use frontend\models\Complaints;
use common\models\User;
use yii\web\HttpException;
use yii\web\Controller;
use yii\validators\DateValidator;

/**
 * Class ComplaintsController
 * @package backend\controllers
 */
class ComplaintsController extends Controller
{
    public function behaviors()
    {
        return [
            'basicAuth' => [
                'class' => \yii\filters\auth\HttpBasicAuth::className(),
                'auth' => function ($username, $password) {
                    $user = User::find()->where(['username' => $username])->one();

                    if ($user->validatePassword($password)) {
                        return $user;
                    }
                    return null;
                },
            ],
        ];
    }

    /**
     * Complaints api action
     * @param string $type
     * @param null $offset
     * @return string
     * @throws HttpException
     * @throws \yii\base\InvalidConfigException
     * @throws \yii\httpclient\Exception
     */
    public function actionIndex($type = Complaints::TYPE_CONTESTATII, $offset = null)
    {
        if (!in_array($type, Complaints::TYPES)) {
            throw new HttpException(400, 'Unknown type "' . $type . '"');
        }

        if ($offset
            && !(new DateValidator(['format' => 'php:Y-m-d\TH:i:s.uP']))->validate($offset)
            && !(new DateValidator(['format' => 'php:Y-m-d\TH:i:sP']))->validate($offset)) {
            throw new HttpException(400, 'Wrong offset format');
        }

        return Complaints::request($type, $offset);
    }
}
