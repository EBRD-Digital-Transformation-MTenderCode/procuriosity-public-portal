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
        return '
            <ul class="el-dropdown-menu el-popper locale-dropdown-menu el-dropdown-menu--small" id="dropdown-menu-207" style="display: none;">
                <li tabindex="-1" class="el-dropdown-menu__item el-dropdown-menu__item--divided">
                    <span class="locale-lang">
                        <a href="' . $this->translateCurrentRequest('ro') . '" ' . ((Yii::$app->language == 'ro') ? 'class="active"' : '') . '>RO</a>
                    </span>
                </li>
                <li tabindex="-1" class="el-dropdown-menu__item el-dropdown-menu__item--divided">
                    <span class="locale-lang">
                        <a href="' . $this->translateCurrentRequest('en') . '" ' . ((Yii::$app->language == 'en') ? 'class="active"' : '') . '>EN</a>
                    </span>
                </li>
                <li tabindex="-1" class="el-dropdown-menu__item el-dropdown-menu__item--divided">
                    <span class="locale-lang">
                        <a href="' . $this->translateCurrentRequest('ru') . '" ' . ((Yii::$app->language == 'ru') ? 'class="active"' : '') . '>RU</a>
                    </span>
                </li>
            </ul>';
    }
}

?>