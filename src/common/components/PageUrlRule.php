<?php

namespace common\components;
use frontend\models\Pages;
use yii\base\BaseObject;
use yii\web\UrlRuleInterface;


class PageUrlRule extends BaseObject implements UrlRuleInterface
{
    /**
     * @param \yii\web\UrlManager $manager
     * @param \yii\web\Request $request
     * @return array|bool
     * @throws \yii\base\InvalidConfigException
     */
    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
        if($model = Pages::findOne(['slug' => $pathInfo])) {
            $getParams = ['slug' => $model->slug];
            $route = 'pages/view';
            return [$route, $getParams];
        }
        return false;
    }

    public function createUrl($manager, $route, $params)
    {
        if ($route === 'pages/view' & isset($params['slug'])) {
            $url = $params['slug'];
            if(!empty($params['language'])) {
                $url .= '?language=' . $params['language'];
            }
            return $url;
        }
        return false;
    }

}
