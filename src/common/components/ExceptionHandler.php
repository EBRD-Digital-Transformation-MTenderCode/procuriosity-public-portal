<?php

namespace common\components;

use Yii;
use yii\web\ErrorHandler;

class ExceptionHandlerService extends \ustudio\service_mandatory\ExceptionHandler
{
    public function renderException($exception)
    {
        return parent::renderException($exception);
    }
}

class ExceptionHandler extends ErrorHandler
{
    protected function renderException($exception)
    {
        if (Yii::$app->request->isAjax) {
            $handler = new ExceptionHandlerService;
            $handler->renderException($exception);
        } else {
            parent::renderException($exception);
        }

    }
}