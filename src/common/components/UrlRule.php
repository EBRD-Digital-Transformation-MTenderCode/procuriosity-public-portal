<?php

namespace common\components;

use yii\base\BaseObject;
use yii\web\UrlRuleInterface;


class UrlRule extends BaseObject implements UrlRuleInterface
{
    /**
     * @param \yii\web\UrlManager $manager
     * @param \yii\web\Request $request
     * @return array|bool
     * @throws \yii\base\InvalidConfigException
     */
    public function parseRequest($manager, $request)
    {
        $outParams = [];
        $pathInfo = $request->getPathInfo();

        if (stripos($pathInfo, "public") === 0) {
            $route = 'public/index';
            $url = str_replace("public", "", $pathInfo);
            $getParams = $request->getQueryString();
            $outParams = [
                'url' => $url . "?" . $getParams
            ];
        } elseif (strpos($pathInfo, 'budgets') !== false) {
            $route = 'site/public';
            $outParams['type'] = 'budgets';
        } elseif (strpos($pathInfo, 'plans') !== false) {
            $route = 'site/public';
            $outParams['type'] = 'plans';
        } elseif (strpos($pathInfo, 'tenders') !== false) {
            $route = 'site/public';
            $outParams['type'] = 'tenders';
        } elseif (strpos($pathInfo, 'contracts') !== false) {
            $route = 'site/public';
            $outParams['type'] = 'contracts';
        }

        //$route = 'site/index';

        return (!empty($route)) ? [$route, $outParams] : false;
    }

    public function createUrl($manager, $route, $params)
    {
        if ($route === 'site/public' & isset($params['type'])) {
            return $params['type'];
        }
        return false;
    }

}
