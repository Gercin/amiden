<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']):?>
    <div class="main-sec main-events">
        <div class="main-sec__cont" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-quad">
            <div class="main-events__col main-events__col--title">
                <div class="main-events__top  main-sec__top "><?= $arResult['NAME']?></div>
                <?php if($arResult['DESCRIPTION']):?>
                    <div class="main-events__title main-sec__title"><?= $arResult['DESCRIPTION']?></div>
                <?php endif;?>
            </div>
            <div class="main-events__col main-events__col--list">
                <div class="main-events__list swiper ">
                    <div class="swiper-wrapper">
                        <?php foreach($arResult['ITEMS'] as $key => $item):?>
                            <div class="main-events__list-item swiper-slide">
                                <div class="main-events__top main-sec__top">
                                    <div class="main-events__list-item-place"><?= $item['PROPERTIES']['address']['VALUE']?></div>
                                    <div class="main-events__list-item-date"><?= $item['ACTIVE_FROM']?></div>
                                </div>
                                <a class="main-events__list-item-title main-sec__el-title" href="<?= $item['DETAIL_PAGE_URL']?>">
                                    <?= $item['NAME']?>
                                </a>
                                <div class="main-events__list-item-btn">
                                    <a href="#" class="btn">Зарегистрироваться</a>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="main-events__arr main-events__arr--prev swiper-button-prev"></div>
                    <div class="main-events__arr main-events__arr--next swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>