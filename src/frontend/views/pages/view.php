<?php
use frontend\models\File;

$this->title = $model->metaTitle;
$this->registerMetaTag(['name' => 'description', 'content' => $model->metaDescription]);

$this->registerCssFile(File::getNameWithCreatedTime('/css/static.css'));
$this->registerJsFile(File::getNameWithCreatedTime('/js/static.js'));
?>

<section class="el-container">
    <div class="static">
        <aside class="static-aside">
            <div class="static-aside__title">
                <?= $model->title ?>
            </div>
        </aside>
        <section class="static-content"><h1><?= $model->title ?></h1>
            <?= $model->body ?>
        </section>
    </div>
</section>

