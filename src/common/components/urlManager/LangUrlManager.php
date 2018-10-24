<?php

namespace common\components\urlManager;

use yii\web\UrlManager;
use Yii;

class LangUrlManager extends UrlManager
{
    public $lang = 'en';
    public $langParam = 'language';
    public $languages;

    public function createUrl($params = array())
    {

        if (!isset($params[$this->langParam])) {
            if (Yii::$app->language != $this->lang) {
                $params[$this->langParam] = Yii::$app->language;
            }
        } elseif ($params[$this->langParam] == $this->lang){
            unset($params[$this->langParam]);
        }

        return parent::createUrl($params);
    }
}