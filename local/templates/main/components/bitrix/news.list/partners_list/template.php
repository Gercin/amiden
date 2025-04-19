<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']):?>
    <div class="partners-list">
        <div class="partners-list__wr">
            <?php foreach($arResult['ITEMS'] as $key => $item):?>
                <a class="partners-list__item" href="<?= $item['PROPERTIES']['link']['VALUE']?>" rel="nofollow" target="_blank">
                    <div class="partners-list__item-logo">
                        <img src="<?= $item['PREVIEW_PICTURE']['SRC']?>" alt="<?= $item['NAME']?>">
                    </div>
                    <div class="partners-list__item-cont">
                        <div class="partners-list__item-title"><?= $item['NAME']?></div>
                        <div class="partners-list__item-text"><?= $item['PREVIEW_TEXT']?></div>
                        <div class="partners-list__item-link"><?= $item['PROPERTIES']['link']['VALUE']?></div>
                    </div>
                </a>
            <?php endforeach;?>
        </div>
    </div>
<?php endif;?>