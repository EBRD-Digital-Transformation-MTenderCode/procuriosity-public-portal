<?php

namespace common\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

class LangWidget extends Widget
{

    public function translateCurrentRequest($language)
    {
        $params = ArrayHelper::merge(
            ['/' . ltrim(Yii::$app->requestedRoute, '/')],
            Yii::$app->request->getQueryParams(),
            [
                'language' => $language,
            ]
        );
        return Url::to($params);
    }

    public function run()
    {
        return '<ul>
			<li><a href="' . $this->translateCurrentRequest('ro') . '" ' . ((Yii::$app->language == 'ro') ? 'class="active"' : '') . '>RO</a></li>
			<li><a href="' . $this->translateCurrentRequest('en') . '" ' . ((Yii::$app->language == 'en') ? 'class="active"' : '') . '>EN</a></li>
			<li><a href="' . $this->translateCurrentRequest('ru') . '" ' . ((Yii::$app->language == 'ru') ? 'class="active"' : '') . '>RU</a></li>
        </ul>';
    }
}

?>