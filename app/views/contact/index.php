<?php

/* @var $this yii\web\View */

$asset = \app\assets\AppAsset::register($this);
?>
<section  style="padding-top: 100px;"></section>
<section class="page-block padding" id="owner-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5 col-xs-12 description-text nopadding">
                    <div class="description">
                        <div class="title">Маєте питання?</div>
                        <div class="sub-title">
                            Ми завжди раді відповісти, заповніть електронну форму або зв’яжіться з нами напряму.
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-xs-12 description-media nopadding">
                    <div class="owner-media-layout clearfix">
                        <div class="media">
                            <img src="<?= $asset->baseUrl ?>/img/anna-pic-min.png">
                        </div>
                        <div class="owner-data">
                            <div class="owner-data-vertical">
                                <div class="name">Анна Оксимець</div>
                                <div class="position">Засновниця ЕтноІдея</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="page-block padding" id="contact-page-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= yii\easyii\modules\feedback\api\Feedback::form(['successUrl' => \yii\helpers\Url::to(['/contact']),
                    'errorUrl' => \yii\helpers\Url::to(['/contact'])]); ?>

                <div class="col-md-6 address-block">
                    <div class="address-block-title">Адреса студії та робочі години</div>
                    <div class="graphic clearfix">
                        <div class="item">
                            <div class="point"></div>
                            <div class="text">
                                Понеділок - П'ятниця<br>
                                09:00 - 18:00
                                <div class="divider"></div>
                                Субота<br>
                                12:00 - 15:00 
                                <div class="divider"></div>
                                Неділя та свята<br>
                                Зачинено
                                <div class="divider"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="point"></div>
                            <div class="text">
                                м. Київ<br>
                                вул.Пожарського, 8 (біля метро Дарниця)
                            </div>
                        </div>
                    </div>
                    <div id="map-canvas" style="height: 300px;" class="col-lg-12 col-xs-12 clearfix"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pageOptions = \yii\helpers\Json::encode([
    'coordinates' => [
        '50.453818', '30.623036'
    ],
    'icon' => $asset->baseUrl.'/img/marker.png',
]);

$this->registerJs("MapPage({$pageOptions});");
?>