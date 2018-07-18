<?php
/* @var $work yii\easyii\modules\news\api\NewsObject */

$asset = \app\assets\AppAsset::register($this);
?>

<section  style="padding-top: 100px;"></section>

<section class="padding page-block portfolio-page" id="portfolio-item-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 blog-post">
                <article>
                    <div class="sidebar-right-fixed">
                        <div class="project-info-page-description">
                            <h2><?= $work->title ?></h2>
                            <time class="comment-date" datetime="1914-12-20 08:00"><?= date('d.m.Y', $work->time); ?></time>
                            <div class="description"><?= $work->short ?></div>
                        </div>
                        <div class="portfolio-item nopadding">
                            <div class="portfolio-text">
                                <div class="title">Cподобалось?</div>
                                <div class="description">Заповніть форму та сформуйте Ваше унікальне замовлення.</div>
                                <div class="button-order-container">
                                    <div class="button-order">Замовити</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-left-fixed">
                        <?php foreach ($work->photos as $photo): ?>
                            <img src="<?= \yii\helpers\Html::encode($photo->image) ?>" alt="<?= $photo->description ?>" />
                        <?php endforeach; ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>