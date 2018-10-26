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
        ['https://unpkg.com/element-ui/lib/theme-chalk/index.css'],
        ['/css/app.css']
    ];
    public $js = [
        ['https://cdn.jsdelivr.net/npm/vue/dist/vue.js', 'position' => View::POS_HEAD],
        ['https://unpkg.com/element-ui/lib/index.js', 'position' => View::POS_HEAD]
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
