<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<footer class="el-footer footer">
    <section class="el-container">
        <div class="el-row">
            <div class="el-col el-col-24">
                <div class="footer-logo">
                    <a href="<?=Url::to(['/site/index'])?>" class="router-link-exact-active router-link-active">
                        <img
                            class="footer-logo__img"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIsAAAAYCAMAAAD9Nf4gAAAAWlBMVEUAAABgYGBeXl5hYWFeXl5fX19fX19gYGBeXl5fX19fX19gYGBfX19gYGBfX19gYGBfX19fX19cXFxfX19dXV1fX19fX19fX19fX19eXl5eXl5fX19fX19fX1/SUo3BAAAAHXRSTlMAkOQPB13xQCLAtKBQL9xxaIAbmDfsyorTp0n3eEC3zQIAAALQSURBVEjHvdZHsqswEAXQViAHkfPd/zY/WJIBYZf+wPV6YtPFhQMtY+ivKgEEeSrYq3h0o6N964jArfjnFmBmPHKBnKUIb60YbuU/t4RV2XQ8cihxzIO/t6zSYFyKvFtkrqsHAv2t+bkFqcG4lERb3OLnMX8/o9liHEr7Hxa5bGMdNHZLCHks8r11OW2hxm2R2vI9JaO8oFDeMZWlkN+iQryqla9NBkSm19sraxIcxXNrOVPsnSqo6vcMIbphqtJScq+FAeBDCSC12/spdXF9IlHC1AqIb6kuw2sTPJKpxvQ57R8vykw591kioF+OIZS7wRw1BOalCEJgoaMyoFz2XRhgcssltZjUBAyszinseMRCg2kNpVc5L3yW1BCoAFJ7xVNBe21AbR4EYaP3Mbkz1V1SpR7pKjo+bPrOjKj0gOqUF43HIoDS9AaE5qiztLesPT5rYLv8ju6pCb1JDebqMIkuVK8xcQB6rdR90ZRvi5iH/GnpgMz0WqCxa9feqcwA4qvFKu38hF27usJtEkzRjlE4KtgpVKumrN6WGljlwxIAU6ZrAuKbJTYWjpUuFp0a3NRpoW2aFe2YF0Wz67GsyGNRuFbx0QJwx+Kk7haMtEGRxdg5V9ReZjTl9MmSsHc1/2nZ3NTVsg4jzYo0xg6zHqn1/QdUgLr0P1pW1+KmnBmJYWSKDKY1U1FtIj2WHGA+CwfkY72MXy3oxNAbqqzIWHgiI48lBhKfJTWd0xID6XcL78SknBPWO8X73OXvH2whv1g2PXTzZyDc1GNGEe/Yw6L2rs9S24dUFJbRZ0tsX7kWDpM7U+sUuRaKePKwpLwjn0WUQJgpNQNoP1toBJDWbAKsxabSI+VY1iDI8LCgDQKfheISpmb52XI+tcYEEE4qk46FHeW+ey9Hc/xoqRmTZEpWaQ/0aa43c8bMUhCMBXaXYQXPCqpM7kwt75R5rfoHDDJYxXQDj8kAAAAASUVORK5CYII="
                            alt="Footer logo">
                    </a>
                    <div class="footer-logo__cr">

                        <?= date("Y") ?> ©, <?=Yii::t("app/footer", "copyright") ?>
                    </div>
                </div>
                <nav class="footer-nav">
                    <div>
                    <?php
                    $i = 0;
                    foreach (\frontend\models\Pages::getItems() as $key => $item):
                        if($key == 0){ continue; }
                        $i++;
                    if(($i%3)==0){echo"</div><div>";}
                        ?>
                        <?php
                        $options = [];
                        if(Yii::$app->request->get('slug') == $item->slug) {
                            $options = ['class' => 'footer-nav_active'];
                        }
                        echo Html::a($item->title, ['/pages/view', 'slug' => $item->slug], $options)."<br>";
                        ?>
                    <?php
                    endforeach;
                    ?>
                    </div>
                </nav>
                <div class="footer-info">
                    <div class="footer-info__text">
                        <?=Yii::t("app/footer", "info") ?>:
                    </div>
                    <div class="footer-info__tel">
                        <a href="tel:+373022822038" id="footer-phone">022 822 038</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
