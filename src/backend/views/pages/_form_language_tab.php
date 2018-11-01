<?php
use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;

?>

    <?= $form->field($model, 'title_' . $language)->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_' . $language)->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'meta_title_' . $language)->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description_' . $language)->textInput(['maxlength' => true]) ?>

