<?php

/* @var $this yii\web\View */
/* @var $partners yii\easyii\modules\gallery\api\PhotoObject[] */
/* @var $portfolioExamples yii\easyii\modules\news\api\NewsObject[] */
/* @var $block1 \yii\easyii\modules\page\api\PageObject */
/* @var $block2 \yii\easyii\modules\page\api\PageObject */
/* @var $block3 \yii\easyii\modules\page\api\PageObject */
/* @var $block5 \yii\easyii\modules\page\api\PageObject */

$asset = \app\assets\AppAsset::register($this);

$baseUrl = $asset->baseUrl;
?>
<section  style="padding-top: 100px;"></section>

<?= str_replace('{baseUrl}', $baseUrl, $block1->text) ?>

<section class="page-block padding" id="main-works">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= $block2->text ?>
                <div class="col-md-9 col-xs-12 portfolio-examples nopadding">
                    <?php foreach ($portfolioExamples as $portfolioItem): ?>
                        <div class="col-md-6 col-xs-12 portfolio-item nopadding">
                            <div class="portfolio-media" style="background:
                                    url(<?= $portfolioItem->image ?>); background-size: cover;"></div>
                            <div class="portfolio-text">
                                <a href="/portfolio/<?= $portfolioItem->slug ?>" class="title"><?= $portfolioItem->title ?></a>
                                <div class="description"><?= $portfolioItem->short ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= str_replace('{baseUrl}', $baseUrl, $block3->text) ?>

<?php if(count($partners)): ?>
    <section class="padding page-block partners-main" id="partners">
        <div class="container">
            <?= $block5->text ?>
            <div class="row text-center wow fadeInDown">
                <ul class="logos big">
                    <?php foreach ($partners as $partner): ?>
                        <?php $activeLink = isset($partner->link) && !empty($partner->link); ?>
                        <li class="item">
                            <?php if($activeLink): ?>
                                <a target="_blank" href="<?= \yii\helpers\Html::encode($partner->link) ?>">
                            <?php endif; ?>
                                    <img style="max-height: 70px;" src="<?= \yii\helpers\Html::encode($partner->image) ?>" alt="<?= $partner->description ?>" />
                            <?php if($activeLink): ?>
                                </a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <ul class="logos slider-1">
                    <?php foreach ($partners as $partner): ?>
                        <?php $activeLink = isset($partner->link) && !empty($partner->link); ?>
                        <li class="item">
                            <?php if($activeLink): ?>
                            <a target="_blank" href="<?= \yii\helpers\Html::encode($partner->link) ?>">
                                <?php endif; ?>
                                <img src="<?= \yii\helpers\Html::encode($partner->image) ?>" alt="<?= $partner->description ?>" />
                                <?php if($activeLink): ?>
                            </a>
                        <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>