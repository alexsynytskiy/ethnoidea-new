<?php

/* @var $this yii\web\View */
/* @var $works yii\easyii\modules\news\api\NewsObject[] */
/* @var $block1 \yii\easyii\modules\page\api\PageObject */

$asset = \app\assets\AppAsset::register($this);
?>
<section  style="padding-top: 100px;"></section>

<section class="page-block padding portfolio-page" id="clients-info" style="padding-bottom: 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 col-xs-12 description-text nopadding">
                    <?= $block1->text ?>
                </div>
                <?php if(count($works) > 0): ?>
                    <div class="col-md-6 col-xs-12 portfolio-examples nopadding">
                        <div class="col-md-12 col-xs-12 portfolio-item nopadding">
                            <div class="portfolio-media" style="background:
                                    url(<?= $works[0]->image ?>); background-size: cover;"></div>
                            <div class="portfolio-text">
                                <a href="/portfolio/<?= $works[0]->slug ?>" class="title"><?= $works[0]->title ?></a>
                                <div class="description"><?= $works[0]->short ?></div>
                                <div class="date"><?= date('d.m.Y', $works[0]->time) ?></div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if(count($works) > 1): ?>

<section class="page-block padding portfolio-page" id="projects" style="padding: 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 col-xs-12 portfolio-examples nopadding">
                    <?php for ($i = 1; $i < count($works); $i++): ?>
                        <div class="col-md-4 col-xs-12 portfolio-item nopadding">
                            <div class="portfolio-media" style="background:
                                    url(<?= $works[$i]->image ?>); background-size: cover;"></div>
                            <div class="portfolio-text">
                                <a href="/portfolio/<?= $works[$i]->slug ?>" class="title"><?= $works[$i]->title ?></a>
                                <div class="description"><?= $works[$i]->short ?></div>
                                <div class="date"><?= date('d.m.Y', $works[$i]->time) ?></div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>