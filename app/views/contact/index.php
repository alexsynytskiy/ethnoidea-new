<?php

/* @var $this yii\web\View */
/* @var $block1 \yii\easyii\modules\page\api\PageObject */
/* @var $block2 \yii\easyii\modules\page\api\PageObject */

$asset = \app\assets\AppAsset::register($this);

$baseUrl = $asset->baseUrl;
?>
<section  style="padding-top: 100px;"></section>
<section class="page-block padding" id="owner-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= str_replace('{baseUrl}', $baseUrl, $block1->text) ?>
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
                    <?= $block2->text ?>
                    <div id="map-canvas" class="col-lg-12 col-xs-12 clearfix"></div>
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
    'icon' => $asset->baseUrl.'/img/maps-marker.png',
]);

$this->registerJs("MapPage({$pageOptions});");
?>