<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<header class="header">
    <!--v. 1.0.1-->
    <div class="header-first">
        <section class="el-container">
            <div class="el-row">
                <div class="el-col el-col-24">
                    <div class="header-logo-ebrd">
                        <img
                            data-v-1a837c44=""
                            src="data:image/png;base64,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"
                            alt="EBRD"
                            class="header-logo-ebrd__img"
                        >
                        <div class="header-logo-ebrd__text">
                            <div>Pilot Project Funded by the European Bank</div>
                            <div>for Reconstruction and Development</div>
                        </div>
                    </div>
                    <div class="locale-toggle el-dropdown">
                        <span class="el-dropdown-link el-dropdown-selfdefine" id="locale-toggle" role="button" tabindex="0">
                            <span class="locale-lang">
                                <?= Yii::t('app/language', Yii::$app->language) ?>
                            </span>
                            <span class="caret">&#8227;</span>
                        </span>
                        <?=\common\components\LangWidget::widget()?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="header-second">
        <section class="el-container is-vertical">
            <div class="el-row">
                <div class="el-col el-col-24">
                    <a href="<?=Url::to(['/site/index'])?>" class="header-logo-mtender__link router-link-active">
                       <img
                            src="data:image/png;base64,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"
                            alt="MTender"
                            class="header-logo-mtender__img"
                        >
                    </a>
                    <button class="header-dropdown header-dropdown-hamb" id="header-dropdown">
                        <?=Yii::t("app/header", "menu") ?>
                    </button>
                    <nav class="header-static-nav" id="header-static-nav">
                        <?php foreach (\frontend\models\Pages::getItems() as $item):?>
                            <?php
                            $options = [];
                            if(Yii::$app->request->get('slug') == $item->slug) {
                                $options = ['class' => 'header-static-nav_active'];
                            }
                            echo Html::a($item->title, ['/pages/view', 'slug' => $item->slug], $options);
                            ?>
                        <?php endforeach;?>
                    </nav>
                </div>
                <div class="el-col el-col-24">
                    <div class="header-info">
                        <div class="header-info__text">
                            <?=Yii::t("app/header", "info") ?>:
                        </div>
                        <div class="header-info__tel">
                            <a href="tel:+373022822038" id="header-phone">022 822 038</a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="header-entity-nav">
                <a <?=(Yii::$app->request->get('type')=='plans')?'class="is-active"':''?> href="<?=Url::to(['/site/public', 'type' => 'plans'])?>"><?=Yii::t("app/header", "nav-plans") ?></a>
                <a <?=(Yii::$app->request->get('type')=='tenders')?'class="is-active"':''?> href="<?=Url::to(['/site/public', 'type' => 'tenders'])?>"> <?=Yii::t("app/header", "nav-tenders") ?></a>
                <a <?=(Yii::$app->request->get('type')=='contracts')?'class="is-active"':''?> href="<?=Url::to(['/site/public', 'type' => 'contracts'])?>"><?=Yii::t("app/header", "nav-contracts") ?></a>
            </nav>
        </section>
    </div>
</header>