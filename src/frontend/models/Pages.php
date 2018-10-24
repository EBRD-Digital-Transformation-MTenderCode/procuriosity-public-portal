<?php
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

Class Pages extends ActiveRecord
{
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
        $var = "title_" . Yii::$app->language;
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
}