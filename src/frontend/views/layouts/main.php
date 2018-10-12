<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

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
    <link href=/css/List.53cc2a28.css rel=prefetch>
    <link href=/js/List.145906fb.js rel=prefetch>
    <link href=/css/app.290517fc.css rel=preload as=style>
    <link href=/css/chunk-vendors.55d31a50.css rel=preload as=style>
    <link href=/js/app.3fcebbd4.js rel=preload as=script>
    <link href=/js/chunk-vendors.84347596.js rel=preload as=script>
    <link href=/css/chunk-vendors.55d31a50.css rel=stylesheet>
    <link href=/css/app.290517fc.css rel=stylesheet>
</head>
<body>
<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
<script src=/js/chunk-vendors.84347596.js></script>
<script src=/js/app.4f25b277.js></script>
</body>
</html>
<?php $this->endPage() ?>
