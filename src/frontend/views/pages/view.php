<?php
$this->title = $model->metaTitle;
$this->registerMetaTag(['name' => 'description', 'content' => $model->metaDescription]);
?>

<h1><?=$model->title?></h1>

<?=$model->body?>
