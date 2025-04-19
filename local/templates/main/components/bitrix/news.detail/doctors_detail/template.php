<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="page-det">
    <div class="page-det__col page-det__col--min">
        <a href="<?= $arResult['LIST_PAGE_URL'] ?>" class=" btn-arr btn-arr--back"><span></span> Назад</a>
    </div>
    <div class="page-det__col page-det__col--max">
        <h1><?= $arResult['NAME'] ?></h1>
        <div class="doctor-det">
            <div class="doctor-det__col doctor-det__col--left">
                <?php if ($arResult['DETAIL_PICTURE']['SRC']) : ?>
                    <div class="doctor-det__photo">
                        <?
                        $resizedImageUrl = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width' => 408, 'height' => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];
                        $resizedImageUrl1560 = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width' => 440, 'height' => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];
                        $resizedImageUrl991 = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width' => 470, 'height' => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];
                        $resizedImageUrl768 = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width' => 751, 'height' => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];
                        $resizedImageUrl340 = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width' => 340, 'height' => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];
                        ?>
                        <picture>
                            <source media="(max-width: 1560px)" srcset="<?= $resizedImageUrl1560 ?>"/>
                            <source media="(max-width: 991px)" srcset="<?= $resizedImageUrl991 ?>"/>
                            <source media="(max-width: 768px)" srcset="<?= $resizedImageUrl768 ?>"/>
                            <source media="(max-width: 340px)" srcset="<?= $resizedImageUrl340 ?>"/>
                            <img alt="" src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>">
                        </picture>
                    </div>
                <?php endif; ?>
            </div>
            <div class="doctor-det__col doctor-det__col--right">
                <div class="doctor-det__info">
                    <?php if ($arResult['PROPERTIES']['position']['VALUE']) : ?>
                        <div class="doctor-det__post"><?= $arResult['PROPERTIES']['position']['VALUE'] ?></div>
                    <?php endif;
                    if ($arResult['PROPERTIES']['spec']['VALUE']) : ?>
                        <div class="doctor-det__spec">
                            Специализация: <?= $arResult['PROPERTIES']['spec']['VALUE'] ?></div>
                    <?php endif; ?>
                </div>
                <?php if ($arResult['DETAIL_TEXT']) : ?>
                    <div class="text-block"><p><?= $arResult['DETAIL_TEXT'] ?></p></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>