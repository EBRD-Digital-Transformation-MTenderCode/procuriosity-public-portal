<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link rel=icon href=/favicon.ico>
    <title>M Tender Public Portal</title>
    <link href=/css/List.css rel=prefetch>
    <link href=/js/List.js rel=prefetch>
    <link href=/css/app.css rel=preload as=style>
    <link href=/css/chunk-vendors.css rel=preload as=style>
    <link href=/js/app.js rel=preload as=script>
    <link href=/js/chunk-vendors.js rel=preload as=script>
    <link href=/css/chunk-vendors.css rel=stylesheet>
    <link href=/css/app.css rel=stylesheet>
</head>
<body>
<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
<script src=/js/chunk-vendors.js></script>
<script src=/js/app.js></script>
</body>
</html>
<?php $this->endPage() ?>
