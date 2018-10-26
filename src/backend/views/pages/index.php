<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'slug',
            'title_ro',
            'title_en',
            'title_ru',
            //'body_ro:ntext',
            //'body_en:ntext',
            //'body_ru:ntext',
            //'meta_title_ro',
            //'meta_title_en',
            //'meta_title_ru',
            //'meta_description_ro',
            //'meta_description_en',
            //'meta_description_ru',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
