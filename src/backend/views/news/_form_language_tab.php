<?php

use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

?>

    <?= $form->field($model, 'title_' . $language)->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_' . $language)->widget(CKEditor::className(),[
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'full',
            'inline' => false,
            'allowedContent' => true,
            'language' => 'en'
        ]),
    ]) ?>

    <?= $form->field($model, 'meta_title_' . $language)->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description_' . $language)->textInput(['maxlength' => true]) ?>

