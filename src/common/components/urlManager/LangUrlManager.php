<?php

namespace common\components\urlManager;

use yii\web\UrlManager;
use Yii;

class LangUrlManager extends UrlManager
{
    private $default_language;
    public $languageParam = 'language';
    public $languages;

    public function init()
    {
        $this->default_language = Yii::$app->language;
        return parent::init();
    }

    public function createUrl($params = array())
    {

        if (!isset($params[$this->languageParam])) {
            if (Yii::$app->language != $this->default_language) {
                $params[$this->languageParam] = Yii::$app->language;
            }
        } elseif ($params[$this->languageParam] == $this->default_language){
            unset($params[$this->languageParam]);
        }

        return parent::createUrl($params);
    }

    public function parseRequest($request)
    {
        $get = Yii::$app->request->getQueryParams();
        if (!empty($get[$this->languageParam]) && in_array($get[$this->languageParam], $this->languages)) {
            Yii::$app->language = $get[$this->languageParam];
        }
        return parent::parseRequest($request);
    }
}