<?php

namespace common\components\urlManager;

use Yii;
use yii\web\Request;

class LangRequest extends Request
{
    protected function resolvePathInfo()
    {
        $get = $this->getQueryParams();
        if (!empty($get['language']) && in_array($get['language'], Yii::$app->urlManager->languages)) {
            Yii::$app->language = $get['language'];
        }
        return parent::resolvePathInfo();
    }
}