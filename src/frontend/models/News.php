<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

Class News extends ActiveRecord
{

    public static function tableName()
    {
        return "news";
    }

    public function getTitle()
    {
        $var = "title_" . Yii::$app->language;
        return $this->{$var};
    }

    public function getBody()
    {
        $var = "body_" . Yii::$app->language;
        return $this->{$var};
    }

    public function getMetaTitle()
    {
        $var = "meta_title_" . Yii::$app->language;
        return $this->{$var};
    }

    public function getMetaDescription()
    {
        $var = "meta_description_" . Yii::$app->language;
        return $this->{$var};
    }

    public static function getLastItems($limit = 3)
    {
        return self::find()->orderBy(['date' => SORT_DESC])->limit($limit)->all();
    }
}