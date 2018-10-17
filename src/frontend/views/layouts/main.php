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
    <link rel=apple-touch-icon sizes=57x57 href=/img/favicon/apple-icon-57x57.png>
    <link rel=apple-touch-icon sizes=60x60 href=/img/favicon/apple-icon-60x60.png>
    <link rel=apple-touch-icon sizes=72x72 href=/img/favicon/apple-icon-72x72.png>
    <link rel=apple-touch-icon sizes=76x76 href=/img/favicon/apple-icon-76x76.png>
    <link rel=apple-touch-icon sizes=114x114 href=/img/favicon/apple-icon-114x114.png>
    <link rel=apple-touch-icon sizes=120x120 href=/img/favicon/apple-icon-120x120.png>
    <link rel=apple-touch-icon sizes=144x144 href=/img/favicon/apple-icon-144x144.png>
    <link rel=apple-touch-icon sizes=152x152 href=/img/favicon/apple-icon-152x152.png>
    <link rel=apple-touch-icon sizes=180x180 href=/img/favicon/apple-icon-180x180.png>
    <link rel=icon type=image/png sizes=192x192 href=/img/favicon/android-icon-192x192.png>
    <link rel=icon type=image/png sizes=32x32 href=/img/favicon/favicon-32x32.png>
    <link rel=icon type=image/png sizes=96x96 href=/img/favicon/favicon-96x96.png>
    <link rel=icon type=image/png sizes=16x16 href=/img/favicon/favicon-16x16.png>
    <meta name=msapplication-TileImage content=/img/favicon/ms-icon-144x144.png>
    <meta name=msapplication-TileColor content=#ffffff>
    <meta name=theme-color content=#ffffff>

    <title>MTender Public Portal</title>

    <link href='<?= File::getNameWithCreatedTime('/css/List.css')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/css/News.css')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/js/About.js')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/js/ForCivil.js')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/js/JoinMTender.js')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/js/LegalFramework.js')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/js/List.js')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/js/News.js')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/js/Register.js')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/js/SecurityAndConfidentiality.js')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/js/TenderPage.js')?>' rel=prefetch>
    <link href='<?= File::getNameWithCreatedTime('/css/app.css')?>' rel=preload as=style>
    <link href='<?= File::getNameWithCreatedTime('/css/chunk-vendors.css')?>' rel=preload as=style>
    <link href='<?= File::getNameWithCreatedTime('/js/app.js')?>' rel=preload as=script>
    <link href='<?= File::getNameWithCreatedTime('/js/chunk-vendors.js')?>' rel=preload as=script>
    <link href='<?= File::getNameWithCreatedTime('/css/chunk-vendors.css')?>' rel=stylesheet>
    <link href='<?= File::getNameWithCreatedTime('/css/app.css')?>' rel=stylesheet>
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
