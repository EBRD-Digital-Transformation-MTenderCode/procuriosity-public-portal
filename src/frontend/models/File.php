<?php

namespace frontend\models;


use yii\helpers\Url;

class File
{
    public static function getNameWithCreatedTime($filePath) {
        $filePath = Url::to('@web' . $filePath) . '?v=' . filemtime(Url::to('@frontend/web' . $filePath));
        return $filePath;
    }

}