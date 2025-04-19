<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="page-det">
    <div class="page-det__col page-det__col--min">
        <a href="<?= $arResult['LIST_PAGE_URL'] ?>" class=" btn-arr btn-arr--back"><span></span> Назад</a>
    </div>
    <div class="page-det__col page-det__col--max">
        <h1><?= $arResult['NAME'] ?></h1>
        <div class="doctor-det">
            <div class="doctor-det__col doctor-det__col--left">
                <? if ($arResult['DETAIL_PICTURE']['SRC']) { ?>
                    <div class="doctor-det__photo">
                        <img alt="" src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>">
                    </div>
                <? } elseif ($arResult['PREVIEW_PICTURE']['SRC']) { ?>
                    <div class="doctor-det__photo">
                        <img alt="" src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>">
                    </div>
                <? } ?>
            </div>
            <div class="doctor-det__col doctor-det__col--right">
                <?php if ($arResult['DETAIL_TEXT']) : ?>
                    <div class="text-block"><p><?= $arResult['DETAIL_TEXT'] ?></p></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>