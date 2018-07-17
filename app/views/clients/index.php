<?php

/* @var $this yii\web\View */
/* @var $block1 \yii\easyii\modules\page\api\PageObject */
/* @var $block2 \yii\easyii\modules\page\api\PageObject */

$asset = \app\assets\AppAsset::register($this);
?>

<section style="padding-top: 100px;"></section>
<section class="page-block padding clients-page" id="clients-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= $block1->text ?>
                <div class="clearfix"></div>
                <?= $block2->text ?>
            </div>
        </div>
    </div>
</section>

<section class="page-block nopadding" id="contact-page-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= yii\easyii\modules\feedback\api\FeedbackFull::form(['successUrl' => \yii\helpers\Url::to(['/clients']),
                    'errorUrl' => \yii\helpers\Url::to(['/clients'])]); ?>
            </div>
        </div>
    </div>
</section>
