<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
$this->registerJs("$('.unlockslug').text('change');", yii\web\View::POS_READY);
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'slug')->widget(\heggi\slugwidget\SlugWidget::className(), ['title' => 'title_en']) ?>

    <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::class, [
        'options' => ['class' => 'form-control'],
        'language' => 'ro',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= Tabs::widget([
        'options' => [
            'class' => 'nav-tabs',
            'style' => 'margin-bottom: 15px',
        ],
        'items' => [
            [
                'label' => Yii::t('app/language', 'en'),
                'content' => $this->render('_form_language_tab', ['form' => $form, 'model' => $model, 'language' => 'en'])
            ],
            [
                'label' => Yii::t('app/language', 'ro'),
                'content' => $this->render('_form_language_tab', ['form' => $form, 'model' => $model, 'language' => 'ro'])
            ],
            [
                'label' => Yii::t('app/language', 'ru'),
                'content' => $this->render('_form_language_tab', ['form' => $form, 'model' => $model, 'language' => 'ru'])
            ]
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
