<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="events-page__main-wrapper">
    <div class="events-page__col">
        <div class="events-page__button sticky">
            <a class="button button-animate button--wide--mobile" href="<?= $arResult['LIST_PAGE_URL'] ?>">
                <div class="button__icon button__icon--left">
                    <svg class="button__svg arrow-blue" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.27614 6.66672H13V5.33338H3.27614L7.4714 1.13812L6.5286 0.195312L0.723858 6.00005L6.5286 11.8048L7.4714 10.862L3.27614 6.66672Z" fill="#3F3F40"></path>
                    </svg>
                </div>
                <div class="button__text">
                    <span>Все события</span>
                </div>
            </a>
        </div>
    </div>
    <div class="events-page__col">
        <section>
            <h2><?= $arResult['NAME'] ?></h2>
            <div class="events-page__event-top events-page__inner">
                <div class="events-page__event-label"><?= $arResult['DISPLAY_ACTIVE_FROM'] ?></div>
                <div class="events-page__event-category"><?= $arResult['SECTION']['PATH'][0]['NAME'] ?></div>
            </div>
            <div class="section__block">
                <?php if ($arResult['img']['src']) : ?>
                    <div class="events-page__image">
                        <img class="events-page__img" src="<?= $arResult['img']['src'] ?>" alt="<?= $arResult['NAME'] ?>">
                    </div>
                <?php endif;
                if ($arResult['file']['src']) :
                    $arNameFile = explode('.', $arResult['file']['name']); ?>
                    <div class="events-page__download">
                        <a class="download-card" href="<?= $arResult['file']['src'] ?>" target="_blank">
                            <div class="download-card__top">
                                <div class="download-card__title">Скачать <?= $arNameFile[0] ?></div>
                                <div class="download-card__label">.<?= $arResult['file']['type'] ?></div>
                            </div>
                            <div class="download-card__bot">
                                <div class="download-card__label"><?= $arResult['file']['size'] ?></div>
                                <div class="download-card__icon">
                                    <svg class="download-card__svg" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2929 9.29289L13 12.5858V2H11V12.5858L7.70711 9.29289L6.29289 10.7071L12 16.4142L17.7071 10.7071L16.2929 9.29289ZM22 20V16H20V20H4V16H2V20C2 21.1046 2.89543 22 4 22H20C21.1046 22 22 21.1046 22 20Z" fill="#07A8D7"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <?= $arResult['DETAIL_TEXT'] ?>
        </section>
    </div>
</div>
<div style="display:none;">
    <?php if ($arResult['dop_img']) :
        foreach ($arResult['dop_img'] as $key => $img) : ?>
            <div class="events-page__image" data-type="snippet-img-hide">
                <img class="events-page__img" src="<?= $img['src'] ?>" alt="">
            </div>
    <?php endforeach;
    endif; ?>
</div>