<?php
namespace frontend\controllers;

use Yii;
use ustudio\service_mandatory\ServiceException;
use yii\web\Controller;
use common\models\LoginForm;

/**
 * Class LoginController
 * @package backend\controllers
 */
class LoginController extends Controller
{
    public $enableCsrfValidation = false;

    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\AjaxFilter',
                'only' => ['index']
            ],
        ];
    }

    /**
     * @return \yii\web\Response
     */
    public function actionIndex()
    {
        $model = new LoginForm();
        if(Yii::$app->request->isAjax && Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post(), '') && $model->login()) {
                return $this->redirect(['/admin/index']);
            } else {
                $e = new ServiceException('Data Validation Failed.', 400, [
                    'model_errors' => $model->getErrors(),
                ]);
                $e->dies();
            }
        }
    }

}
