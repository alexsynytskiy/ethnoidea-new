<?php

$asset = \app\assets\AppAsset::register($this);
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 footer-main">
                <div class="col-md-4 nopadding socials">
                    <div class="socials-block">
                        <div class="social-icon-pack">
                            <a class="social-icon" href="/">
                                <img src="<?= $asset->baseUrl ?>/img/fb-icon.svg">
                            </a>
                            <a class="social-icon" href="/">
                                <img src="<?= $asset->baseUrl ?>/img/insta-icon.svg">
                            </a>
                        </div>
                        <a class="phone-number" href="tel:++380672736617">
                            +38 067 273 66 17
                        </a>
                    </div>

                </div>
                <div class="col-md-4 footer-logo">
                    <img class="svg" src="<?= $asset->baseUrl ?>/img/logo-white.svg">
                </div>
                <div class="col-md-4 rights">
                    Всі права захищені 2018
                </div>
            </div>
        </div>
    </div>
</footer>