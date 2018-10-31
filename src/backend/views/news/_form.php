<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
$this->registerJs("$('.unlockslug').text('change');", yii\web\View::POS_READY);
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'slug')->widget(\heggi\slugwidget\SlugWidget::className(), ['title' => 'title_en']) ?>

    <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::class, [
        'options' => ['class' => 'form-control'],
        'language' => 'ro',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_ro')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'body_en')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'body_ru')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'meta_title_ro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description_ro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description_ru')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
