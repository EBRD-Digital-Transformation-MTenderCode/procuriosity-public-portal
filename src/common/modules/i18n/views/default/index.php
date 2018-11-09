<?php
/**
 * @link https://github.com/Vintage-web-production/yii2-i18n
 * @copyright Copyright (c) 2017 Vintage Web Production
 * @license BSD 3-Clause License
 */

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;
use common\modules\i18n\Module;
use common\modules\i18n\models\Message;

/**
 * @var \yii\web\View $this
 * @var \vintage\i18n\models\search\SourceMessageSearch $searchModel
 * @var \yii\data\ActiveDataProvider $dataProvider
 */

$this->title = Module::t('Translations');
echo Breadcrumbs::widget(['links' => [$this->title]]);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
    </div>

    <div class="panel-body">
        <?php
        Pjax::begin();
        echo GridView::widget([
            'filterModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'columns' => [
                [
                    'attribute' => 'id',
                    'value' => function ($model, $index, $dataColumn) {
                        return $model->id;
                    },
                    'filter' => false
                ],
                [
                    'attribute' => 'message',
                    'format' => 'raw',
                    'value' => function ($model, $index, $widget) {
                        return Html::a($model->message, ['update', 'id' => $model->id], ['data' => ['pjax' => 0]]);
                    }
                ],
                [
                    'attribute' => 'translation',
                    'format' => 'raw',
                    'value' => function ($model, $index, $widget) {
                        return StringHelper::truncate($model->getDefaultLangTranslation(),120);
                    }
                ],
                [
                    'attribute' => 'category',
                    'value' => function ($model, $index, $dataColumn) {
                        return $model->category;
                    },
                    'filter' => ArrayHelper::map($searchModel::getCategories(), 'category', 'category')
                ],
                [
                    'attribute' => 'status',
                    'value' => function ($model, $index, $widget) {
                        return Message::isModelFullyTranslated($model->id)
                            ? Module::t('Translated')
                            : Module::t('Not translated');
                    },
                    'filter' => Html::dropDownList($searchModel->formName() . '[status]', $searchModel->status, $searchModel->getStatus(), [
                        'class' => 'form-control',
                        'prompt' => ''
                    ])
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update} ' . (Yii::$app->user->can('admin') ? '{delete}' : '')
                ],
            ]
        ]);
        Pjax::end();
        ?>
    </div>
</div>
