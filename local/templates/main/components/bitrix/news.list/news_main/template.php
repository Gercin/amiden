<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']):?>
    <div class="main-sec main-news">
        <div class="main-sec__cont" data-aos="fade-up" data-aos-duration="1000">
            <div class="main-news__top main-sec__top"><?= $arResult['NAME'] ?></div>
            <?php if ($arResult['DESCRIPTION']): ?>
                <div class="main-news__title main-sec__title"><?= $arResult['DESCRIPTION'] ?></div>
            <?php endif; ?>
            <div class="main-news__list news-list swiper">
                <div class="main-list__arr main-list__arr--prev swiper-button-prev"></div>
                <div class="main-list__arr main-list__arr--next swiper-button-next"></div>
                <div class="swiper-wrapper">
                    <?php foreach ($arResult['ITEMS'] as $key => $item): ?>
                        <a href="<?= $item["DETAIL_PAGE_URL"] ?>" class="news-list__item swiper-slide">
                            <div class="news-list__item-wr">
                                <div class="news-list__item-title main-sec__el-title"
                                   href="<?= $item['DETAIL_PAGE_URL'] ?>">
                                    <?= $item['NAME'] ?>
                                </div>
                                <div class="news-list__item-type"><?= $item['PREVIEW_TEXT'] ?></div>
                                <div class="news-list__item-date"><?= $item['ACTIVE_FROM'] ?></div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>