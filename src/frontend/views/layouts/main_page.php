<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\helpers\File;

//AppAsset::register($this);
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

        <title>MTender Public Portal - <?= Html::encode($this->title) ?></title>

        <?/*= $this->render("/layouts/_include_css") */?><!--
        --><?/*= $this->render("/layouts/_include_js") */?>

        <link href=/js/ContractPage.js rel=prefetch>
        <link href=/js/TenderPage.js rel=prefetch>

        <link href=/css/app.css rel=preload as=style>
        <link href=/css/chunk-vendors.css rel=preload as=style>

        <link href=/js/app.js rel=preload as=script>
        <link href=/js/chunk-vendors.js rel=preload as=script>
        <link href=/css/chunk-vendors.css rel=stylesheet>

        <link href=/css/app.css rel=stylesheet>

        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <noscript>
            <strong>We're sorry but MTender Public Portal doesn't work properly without JavaScript enabled. Please  it to continue.</strong>
        </noscript>
        <div id="app"></div>

        <script src=/js/chunk-vendors.js> </script>
        <script src=/js/app.js> </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
