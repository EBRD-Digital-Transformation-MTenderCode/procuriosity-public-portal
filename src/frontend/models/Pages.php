<?php
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

Class Pages extends ActiveRecord
{
    public static $items;

    public static function tableName()
    {
        return "pages";
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

    public function getContent()
    {
        $var = "content_" . Yii::$app->language;
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

    public static function getItems()
    {
        if(!self::$items) {
            self::$items = self::find()->where(['menu' => 0])->orderBy('id')->all();
        }
        return self::$items;
    }
}