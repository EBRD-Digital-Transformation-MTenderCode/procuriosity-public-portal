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

    //' . $this->translateCurrentRequest('ru') . '
    public function run()
    {
        return '
            <ul class="el-dropdown-menu el-popper locale-dropdown-menu el-dropdown-menu--small" id="locale-menu">
                <li tabindex="-1" class="el-dropdown-menu__item el-dropdown-menu__item--divided">
                    <a class="locale-lang  active" data-lang="ro" href="">' . Yii::t('app/language', 'ro') . '</a>
                </li>
                <li tabindex="-1" class="el-dropdown-menu__item el-dropdown-menu__item--divided">
                    <a class="locale-lang" data-lang="en" href="">' . Yii::t('app/language', 'en') . '</a>
                </li>
                <li tabindex="-1" class="el-dropdown-menu__item el-dropdown-menu__item--divided">
                    <a class="locale-lang" data-lang="ru" href="">' . Yii::t('app/language', 'ru') . '</a>
                </li>
            </ul>';
    }
}

?>