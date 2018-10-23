<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->textInput(['maxlength' => true])->passwordInput() ?>

    <?= $form->field($model, 'password_repeat')->textInput(['maxlength' => true])->passwordInput() ?>


    <?= $form->field($model, 'role')->dropDownList(
        \yii\helpers\ArrayHelper::map(\backend\models\Roles::find()->all(), 'name', 'name'),
        [
            'prompt' => 'Change role',
        ]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
