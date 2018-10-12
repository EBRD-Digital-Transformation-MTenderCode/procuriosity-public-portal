<?php

namespace frontend\assets;

use yii\web\View;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        ['css/List.css', 'rel' => 'prefetch'],
//        ['css/app.css', 'rel' => 'preload', 'as' => 'style'],
//        ['css/chunk-vendors.css', 'rel' => 'preload', 'as' => 'style'],
//        ['css/chunk-vendors.css', 'rel' => 'stylesheet'],
//        ['css/app.css', 'rel' => 'stylesheet'],
    ];
    public $js = [
//        ['js/List.js', 'rel' => 'prefetch', 'position' => View::POS_HEAD],
//        ['js/app.js', 'rel' => 'preload', 'as' => 'script', 'position' => View::POS_HEAD],
//        ['js/chunk-vendors.js', 'rel' => 'preload', 'as' => 'script', 'position' => View::POS_HEAD],
//        ['js/chunk-vendors.js', 'position' => View::POS_END],
//        ['js/app.js', 'position' => View::POS_END],
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
