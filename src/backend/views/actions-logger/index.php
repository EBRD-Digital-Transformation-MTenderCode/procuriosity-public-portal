<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ActionsLoggerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actions Loggers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actions-logger-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_at:datetime',
            'ip',
            'user_id',
            'username',
            'type',
            'type_id',
            'method',
            //'data',
            //'created_at',
            //'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}'
            ],
        ],
    ]); ?>
</div>
