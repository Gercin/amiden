<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="page-det">
    <div class="page-det__col page-det__col--min">
        <a href="<?= $arResult['LIST_PAGE_URL'] ?>" class=" btn-arr btn-arr--back"><span></span> Назад</a>
    </div>
    <div class="page-det__col page-det__col--max">
        <h1><?= $arResult['NAME'] ?></h1>
        <div class="page-det__info">
            <div class="page-det__date"><?= $arResult['ACTIVE_FROM'] ?></div>
            <div class="page-det__name">
                Абашева Анастасия Владимировна
            </div>
        </div>
        <div class="content-narrow">
            <div class="text-block">
                <?= $arResult['DETAIL_TEXT'] ?>
                <?php if ($arResult['dop_img']): ?>
                    <div class="slider swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($arResult['dop_img'] as $key => $item): ?>
                                <a href="<?= $item['src'] ?>" data-fancybox="gallery" class="slider__item swiper-slide">
                                    <img src="<?= $item['src'] ?>" alt="">
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <div class="slider__arr slider__arr--prev swiper-button-prev"></div>
                        <div class="slider__arr slider__arr--next swiper-button-next"></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>