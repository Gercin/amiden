<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']):?>
    <div class="news-list swiper">
        <div class="main-list__arr main-list__arr--prev swiper-button-prev"></div>
        <div class="main-list__arr main-list__arr--next swiper-button-next"></div>
        <div class="swiper-wrapper">
            <?php foreach($arResult['ITEMS'] as $key => $item):?>
                <div class="news-list__item swiper-slide">
                    <a href="<?= $item['DETAIL_PAGE_URL']?>" class="news-list__item-wr">
                        <div class="news-list__item-title main-sec__el-title"><?= $item['NAME']?></div>
                        <div class="news-list__item-type"><?= $item['PREVIEW_TEXT']?></div>
                        <div class="news-list__item-date"><?= $item['ACTIVE_FROM']?></div>
                    </a>
                </div>
            <?php endforeach;?>
        </div>
    </div>
<?php endif;?>