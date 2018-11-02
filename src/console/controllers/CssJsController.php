<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\helpers\FileHelper;

Class CssJsController extends Controller
{

    public function actionJs()
    {
        $files = \yii\helpers\FileHelper::findFiles(Yii::getAlias('@frontend/web/js'),['only'=>['*.js'], 'recursive'=>FALSE]);
        $out = '';
        foreach ($files as $file) {
            $fileName = strrchr($file, '/');
            $out .= '<script src="/js' . $fileName . '?v='.filemtime($file).'"></script>';
        }
        file_put_contents(Yii::getAlias('@frontend/views/layouts/_include_js.php'), $out);
    }

    public function actionCss()
    {
        $files = \yii\helpers\FileHelper::findFiles(Yii::getAlias('@frontend/web/css'),['only'=>['*.css'], 'recursive'=>FALSE]);
        $out = '';
        foreach ($files as $file) {
            $fileName = strrchr($file, '/');
            $out .= '<link href="/css' . $fileName . '?v='.filemtime($file).'" rel="stylesheet">';
        }
        file_put_contents(Yii::getAlias('@frontend/views/layouts/_include_css.php'), $out);
    }
}