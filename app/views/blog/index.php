<?php
/* @var $this yii\web\View */
/* @var $news yii\easyii\modules\news\models\News[] */
/* @var $block1 \yii\easyii\modules\page\api\PageObject */

$asset = \app\assets\AppAsset::register($this);
?>

<section  style="padding-top: 100px;"></section>

<section class="padding page-block" id="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 blog-post">
                <article>
                    <div class="sidebar-right-fixed">
                        <?= $block1->text ?>
                    </div>
                    <div class="content-left">
                        <?php foreach ($news as $item): ?>
                            <?= $item->text ?>
                            <br>
                        <?php endforeach; ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>