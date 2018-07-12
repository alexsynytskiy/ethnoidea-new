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