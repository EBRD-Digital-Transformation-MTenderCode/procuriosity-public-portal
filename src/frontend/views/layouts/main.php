<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use frontend\models\File;

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
    <link href='<?= File::getNameWithCreatedTime('/css/List.css')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/css/app.css')?>' rel=preload as=style>
    <link href='<?= File::getNameWithCreatedTime('/css/chunk-vendors.css')?>' rel=preload as=style>
    <link href='<?= File::getNameWithCreatedTime('/css/chunk-vendors.css')?>' rel=stylesheet>
    <link href='<?= File::getNameWithCreatedTime('/css/app.css')?>' rel=stylesheet>
    <link href='<?= File::getNameWithCreatedTime('/js/List.js')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/js/app.js')?>' rel=preload as=script>
    <link href='<?= File::getNameWithCreatedTime('/js/chunk-vendors.js')?>' rel=preload as=script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
<script src='<?= File::getNameWithCreatedTime('/js/chunk-vendors.js')?>'></script>
<script src='<?= File::getNameWithCreatedTime('/js/app.js')?>'></script>
</body>
</html>
<?php $this->endPage() ?>
