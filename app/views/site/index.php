<?php

/* @var $this yii\web\View */
/* @var $partners yii\easyii\modules\gallery\api\PhotoObject[] */

$asset = \app\assets\AppAsset::register($this);
?>
<section  style="padding-top: 100px;"></section>

<section class="padding page-block" id="main-about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5 col-xs-12 description-text nopadding">
                    <div class="description">
                        <div class="title">Краса, Ідея, Сучасність</div>
                        <div class="sub-title">
                            Осередок краси на святі, відображення бренду,
                            гармонійний простір офісу та унікальний декор
                            домашнього інтер‘єру.
                        </div>
                        <div class="button-order-container">
                            <div class="button-order">Замовити</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-xs-12 description-media nopadding">
                    <div class="media">
                        <img src="<?= $asset->baseUrl ?>/img/start-pic-1-min.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-block padding" id="main-works">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3 col-xs-12 description-text nopadding">
                    <div class="description">
                        <div class="title">Наші роботи</div>
                        <div class="sub-title">
                            Декор, декорації і дизайн інтер‘єру актуальний для сучасної України.
                            Загально-європейська класична, мінімалістична та етнічна стилістика
                            є основними напрямами. Наші постійні клієнти компанії, рекламні та
                            event-агенції, фізичні особи, що цінують надійність комплексного обслуговування
                            і репутацію.
                        </div>
                        <div class="button-order-container">
                            <div class="button-order">Портфоліо</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-xs-12 portfolio-examples nopadding">
                    <div class="col-md-6 col-xs-12 portfolio-item nopadding">
                        <div class="portfolio-media" style="background:
                                url(<?= $asset->baseUrl ?>/img/portfolio-pic-1-min.jpg); background-size: cover;"></div>
                        <div class="portfolio-text">
                            <a href="#" class="title">Назва Проекту</a>
                            <div class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut…</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 portfolio-item nopadding">
                        <div class="portfolio-media" style="background:
                                url(<?= $asset->baseUrl ?>/img/portfolio-pic-2-min.png); background-size: cover;"></div>
                        <div class="portfolio-text">
                            <a href="#" class="title">Назва Проекту</a>
                            <div class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut…</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-block padding" id="owner-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5 col-xs-12 description-text nopadding">
                    <div class="description">
                        <div class="title">Хто ми?</div>
                        <div class="sub-title">
                            Надійний підрядник у галузі декору та декорацій, що надає якісні послуги в середньому
                            та преміальному сегменті. В студії працює мінімальний постійний склад команди, в
                            залежності від поставлених задач, під кожен проект формується команда, що є
                            найефективнішою у вирішенні задач конкретного проекту.
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

<section class="page-block padding" id="clients-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3 col-xs-12 description-text nopadding">
                    <div class="description">
                        <div class="title">Наша мета</div>
                        <div class="sub-title">
                            Щасливі задоволені люди, процес творення краси навколо. Розвиток індустрії декору
                            та декорацій українських виробників та дизайнерів, що експонуються на світовому рівні.
                            Позиціонування України у Світі на найвищому рівні, входження українських дизайнерів і
                            компаній у плеяду кращих світових трендів. Пізнаваність унікального українського стилю
                            серед інших країн.
                        </div>
                        <div class="button-order-container">
                            <div class="button-order">Замовити</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-xs-12 portfolio-examples nopadding">
                    <div class="col-md-6 col-xs-12 portfolio-item nopadding">
                        <div class="portfolio-text">
                            <div class="header">
                                <div class="title">Фізичним особам</div>
                                <div class="description">Комплексне обслуговування</div>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>декорування весілля, особистих свят і визначних подій </li>
                                    <li>букети, композиції </li>
                                    <li>декорування до нового року будь яких приміщень </li>
                                    <li>озеленення та супровід</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 portfolio-item nopadding">
                        <div class="portfolio-text">
                            <div class="header">
                                <div class="title">Юридичним особам</div>
                                <div class="description">Компаніям та Агенціям</div>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>декорації до свят, рекламних кампаній </li>
                                    <li>виготовляємо власноруч </li>
                                    <li>декор і оформлення стилізованих та тематичних вечірок </li>
                                    <li>обслуговування зйомок кліпів, реклами </li>
                                    <li>флористичне обслуговування та озеленення</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if(count($partners)): ?>
    <section class="padding page-block partners-main" id="partners">
        <div class="container">
            <div class="col-md-12">
                <div class="description">
                    <div class="title">Наші Клієнти</div>
                </div>
            </div>
            <div class="row text-center wow fadeInDown">
                <ul class="logos big">
                    <?php foreach ($partners as $partner): ?>
                        <?php $activeLink = isset($partner->link) && !empty($partner->link); ?>
                        <li class="item">
                            <?php if($activeLink): ?>
                                <a target="_blank" href="<?= \yii\helpers\Html::encode($partner->link) ?>">
                            <?php endif; ?>
                                    <img style="max-height: 90px;" src="<?= \yii\helpers\Html::encode($partner->image) ?>" alt="<?= $partner->description ?>" />
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