<?php
/* @var $this yii\web\View */
/* @var $showLoadMore bool */
/* @var $news yii\easyii\modules\news\models\News[] */

$asset = \app\assets\AppAsset::register($this);
?>

<section  style="padding-top: 100px;"></section>

<section class="padding page-block" id="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 blog-post">
                <article>
                    <div class="sidebar-right-fixed">
                        <div class="project-info-page-description">
                            <h2>Новини</h2>
                            <div class="description">Слідкуйте та за нами в Instagram та дізнавайтесь про останні
                                новини акціЇ та проекти.</div>
                            <div class="button-order-container" style="margin-bottom: 45px;">
                                <a href="#" class="button-order">Фоловити</a>
                            </div>
                            <h2>Або</h2>
                            <div class="description">Заповніть форму та сформуйте Ваше унікальне замовлення.</div>
                            <div class="button-order-container" >
                                <div class="button-order">Замовити</div>
                            </div>
                        </div>
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