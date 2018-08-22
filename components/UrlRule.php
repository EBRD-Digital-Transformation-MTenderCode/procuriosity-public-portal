<?php

namespace app\components;
use yii\web\UrlRuleInterface;
use yii\base\Object;


class UrlRule extends Object implements UrlRuleInterface
{
    public function parseRequest($manager, $request)
    {
        $route = 'site/index';
        $outParams = [];

        return ($route) ? [$route, $outParams] : false;
    }

    public function createUrl($manager, $route, $params)
    {
        return false;
    }

}
