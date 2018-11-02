<?php
use frontend\helpers\File;

$this->title = $model->metaTitle;
$this->registerMetaTag(['name' => 'description', 'content' => $model->metaDescription]);

$this->registerCssFile(File::getNameWithCreatedTime('/css/static/static.css'));
$this->registerJsFile(File::getNameWithCreatedTime('/js/static/static.js'));
?>

<section class="el-container">
    <div class="static">
        <aside class="static-aside">
            <div class="static-aside__title">
                <?= $model->title ?>
            </div>
        </aside>
        <section class="static-content">
            <?= $model->body ?>
        </section>
    </div>
</section>

