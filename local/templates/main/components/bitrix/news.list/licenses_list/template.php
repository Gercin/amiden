<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']):?>
    <div class="doctor-list">
        <div class="doctor-list__wr">
            <?php foreach($arResult['ITEMS'] as $key => $item):?>
                <div class="doctor-list__item" >
                    <a href="<?= $item['DETAIL_PAGE_URL']?>" class="doctor-list__link">
                        <div class="doctor-list__img" style="background-image: url(<?= $item['PREVIEW_PICTURE']['SRC']?>);"></div>
                        <div class="doctor-list__name"><?= $item['NAME']?></div>
                        <span class="doctor-list__type"><?= $item['PREVIEW_TEXT']?></span>
                    </a>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php if ($arResult['NAV_STRING']) {
        echo $arResult['NAV_STRING'];
    }
endif;?>