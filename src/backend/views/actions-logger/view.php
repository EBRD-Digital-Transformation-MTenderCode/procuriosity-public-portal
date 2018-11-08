<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ActionsLogger */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Actions Loggers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actions-logger-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ip',
            'user_id',
            'username',
            'type',
            'type_id',
            'data',
            'created_at:datetime',
        ],
    ]) ?>

</div>
