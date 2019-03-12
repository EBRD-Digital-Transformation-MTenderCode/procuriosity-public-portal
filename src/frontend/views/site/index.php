<?php
use yii\helpers\Html;
use frontend\helpers\File;
use yii\helpers\Url;
use frontend\models\News;
use yii\helpers\StringHelper;

$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.7/tiny-slider.css');
$this->registerCssFile(File::getNameWithCreatedTime('/css/static/main.css'));

$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.7/min/tiny-slider.js', ['position' => yii\web\View::POS_END]);
$this->registerJsFile(File::getNameWithCreatedTime('/js/static/main.js'));

?>

<?=$modelPage->body?>

<div class="main">
    <div class="main-banner">
        <section class="el-container is-vertical">
            <div class="main-title">
                <?=Yii::t("app/main", "title") ?>
                <span class="carousel-indicators" id="carousel-indicators">
                    <span class="carousel-indicator is-active"></span>
                    <span class="carousel-indicator"></span>
                    <span class="carousel-indicator"></span>
                </span>
            </div>
            <div class="main-carousel" id="main-carousel">
                <div class="carousel__item">
                    <div class="slide-item">
                        <div class="slide-item__part">
                            <div class="slide-item__ico slide-item__ico_active-procedures"></div>
                            <div class="slide-item__number"><?=Yii::t("app/main", "slide-item1-number") ?></div>
                        </div>
                        <div class="slide-item__text">
                            <div><?=Yii::t("app/main", "slide-item1-text1") ?></div>
                            <?=Yii::t("app/main", "slide-item1-text2") ?>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="slide-item__part">
                            <div class="slide-item__ico slide-item__ico_concluded-contracts"></div>
                            <div class="slide-item__number"><?=Yii::t("app/main", "slide-item2-number") ?></div>
                        </div>
                        <div class="slide-item__text">
                            <div><?=Yii::t("app/main", "slide-item2-text1") ?></div>
                            <?=Yii::t("app/main", "slide-item2-text2") ?>
                        </div>
                    </div>
                </div>
                <div class="carousel__item">
                    <div class="slide-item">
                        <div class="slide-item__part">
                            <div class="slide-item__ico slide-item__ico_contracting-entities"></div>
                            <div class="slide-item__number"><?=Yii::t("app/main", "slide-item3-number") ?></div>
                        </div>
                        <div class="slide-item__text">
                            <div><?=Yii::t("app/main", "slide-item3-text1") ?></div>
                            <?=Yii::t("app/main", "slide-item3-text2") ?>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="slide-item__part">
                            <div class="slide-item__ico slide-item__ico_economic-operators"></div>
                            <div class="slide-item__number"><?=Yii::t("app/main", "slide-item4-number") ?></div>
                        </div>
                        <div class="slide-item__text">
                            <div><?=Yii::t("app/main", "slide-item4-text1") ?></div>
                            <?=Yii::t("app/main", "slide-item4-text2") ?>
                        </div>
                    </div>
                </div>
                <div class="carousel__item">
                    <div class="slide-item">
                        <div class="slide-item__part">
                            <div class="slide-item__ico slide-item__ico_total-savings"></div>
                            <div class="slide-item__number"><?=Yii::t("app/main", "slide-item5-number") ?></div>
                        </div>
                        <div class="slide-item__text">
                            <div><?=Yii::t("app/main", "slide-item5-text1") ?></div>
                            <?=Yii::t("app/main", "slide-item5-text2") ?>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?=Url::to(['/pages/view', 'slug'=>'join-mtender'])?>" class="main__join-button"><?=Yii::t("app/main", "join") ?></a>
        </section>
    </div>
    <div class="main-news-wp">
        <section class="el-container is-vertical">
            <div class="main-news">
                <div class="main-news__title">
                    <?=Yii::t("app/main", "news-title") ?>
                </div>
                <div class="main-news__cards-wp">
                    <?php foreach (News::getLastItems() as $item):?>
                    <div class="main-news__card"><img src="/uploads/news/ico/<?=$item->image?>" alt="<?=Html::encode($item->title)?>" class="main-news__img">
                        <div class="main-news__text">
                            <?=StringHelper::truncate(strip_tags($item->body), 360)?>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
    </div>
    <div class="main-about">
        <section class="el-container is-vertical">
            <div class="main-about__title">
                <?=Yii::t("app/main", "about-title") ?>
            </div>
            <div class="main-about__text">
                <?=Yii::t("app/main", "about-text") ?>
            </div>
            <div class="main-about__cards-wp">
                <div class="main-about__card">
                    <img src="/img/main-ico1.png" alt="main ico 1" class="main-about__img">
                    <div class="main-about__card-text">
                        <?=Yii::t("app/main", "about-card-1") ?>
                    </div>
                </div>
                <div class="main-about__card">
                    <img src="/img/main-ico2.png" alt="main ico 2" class="main-about__img">
                    <div class="main-about__card-text">
                        <?=Yii::t("app/main", "about-card-2") ?>
                    </div>
                </div>
                <div class="main-about__card">
                    <img src="/img/main-ico3.png" alt="main ico 3" class="main-about__img">
                    <div class="main-about__card-text">
                        <?=Yii::t("app/main", "about-card-3") ?>
                    </div>
                </div>
            </div>
            <hr class="main-about__line">
            <div class="main-about__sub-title">
                <?=Yii::t("app/main", "about-sub-title") ?>
            </div>
            <div class="main-about__sub-text">
                <?=Yii::t("app/main", "about-sub-text") ?>
            </div>
            <div class="main-about__partners">
                <div class="main-about__partners_title">
                    <?=Yii::t("app/main", "about-partners-title") ?>
                </div>
                <div class="main-about__partners_links">
                    <a href="https://yptender.md/" target="_blank">
                        <img src="/img/yptender.png" alt="yptender">
                    </a>
                    <a href="https://e-licitatie.md/" target="_blank">
                        <img src="/img/e-lici.png" alt="e-lici">
                    </a>
                    <a href="https://achizitii.md/" target="_blank">
                        <img src="/img/achizitii.md.png" alt="achizitii">
                    </a>
                    <a href="http://lonar-it.com" target="_blank">
                        <img src="/img/lonar.png" alt="lonar">
                    </a>
                    <a href="https://ebs-integrator.com/" target="_blank">
                        <img src="/img/ebs-integrator.png" alt="ebs-integrator">
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>