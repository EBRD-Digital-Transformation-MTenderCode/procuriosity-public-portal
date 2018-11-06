<?php

use frontend\helpers\File;

$this->title = $model->metaTitle;
$this->registerMetaTag(['name' => 'description', 'content' => $model->metaDescription]);

$this->registerCssFile(File::getNameWithCreatedTime('/css/static/static.css'));
$this->registerJsFile(File::getNameWithCreatedTime('/js/static/static.js'));
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
</div>


