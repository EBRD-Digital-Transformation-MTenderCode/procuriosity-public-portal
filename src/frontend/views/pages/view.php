<?php

use yii\helpers\Html;
use frontend\helpers\File;
use frontend\models\News;
use yii\helpers\StringHelper;

$this->title = $model->metaTitle;
$this->registerMetaTag(['name' => 'description', 'content' => $model->metaDescription]);

$this->registerCssFile(File::getNameWithCreatedTime('/css/static/static.css'));
$this->registerJsFile(File::getNameWithCreatedTime('/js/static/static.js'));

if ($model->slug == 'faq') {
    $this->registerCssFile(File::getNameWithCreatedTime('/css/static/accordion.css'));
    $this->registerJsFile(File::getNameWithCreatedTime('/js/static/accordion.js'));
}

?>
<div class="static">
    <div class="static-banner">
        <section class="el-container">
            <h1 class="static-banner__title">
                <?= $model->title ?>
            </h1>
            <section class="static-banner__text">
                <?= $model->body ?>
            </section>
        </section>
    </div>
    <?= $model->content ?>
    <?php if ($model->slug == 'legal-framework'): ?>
        <section class="el-container is-vertical">
            <div class="main-news">
                <div class="main-news__title">
                    <?= Yii::t("app/main", "news-title") ?>
                </div>
                <div class="main-news__cards-wp">
                    <?php foreach (News::getLastItems() as $item):?>
                        <div class="main-news__card"><img src="/uploads/news/ico/<?=$item->image?>" alt="<?=Html::encode($item->title)?>" class="main-news__img">
                            <div class="main-news__text">
                                <?= StringHelper::truncate($item->body, 360) ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>
