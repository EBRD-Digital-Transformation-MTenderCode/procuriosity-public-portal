<?php
namespace backend\controllers;

use Yii;
use ustudio\service_mandatory\ExceptionHandler;
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

    /**
     * @return \yii\web\Response
     * @throws ServiceException
     */
    public function actionIndex()
    {
        $model = new LoginForm();
        if(Yii::$app->request->isAjax) {
            if ($model->load(Yii::$app->request->post(), '') && $model->login()) {
                return $this->redirect(['index']);
            } else {
                throw new ServiceException('Data Validation Failed.', 400, [
                    'model_errors' => $model->getErrors(),
                ]);
            }
        }
    }

}
