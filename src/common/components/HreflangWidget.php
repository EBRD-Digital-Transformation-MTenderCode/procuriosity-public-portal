<?php
namespace common\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;


class HreflangWidget extends Widget{

    public function init(){
        parent::init();
    }

    public function translateCurrentRequest($language)
    {
        if($language === 'ro') {
            $language = '';
        }
        $params = ArrayHelper::merge(
            ['/' . ltrim(Yii::$app->requestedRoute, '/')],
            Yii::$app->request->getQueryParams(),
            [
                'language' => $language,
            ]
        );
        return Url::to($params);
    }

    public function run(){

        $result = '';
        foreach (Yii::$app->urlManager->languages as $language) {
            if ($language === Yii::$app->language) {
                continue;
            }

            $result.= Html::tag(
                'link',
                '',
                [
                    'rel' => 'alternate',
                    'hreflang' => $language,
                    'href' => $this->translateCurrentRequest($language),
                ]
            ). "\n";
        }
        return $result;
    }
}
?>