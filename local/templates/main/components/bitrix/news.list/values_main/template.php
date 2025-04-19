<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']):?>
    <div class="main-sec main-asset">
        <div class="main-sec__cont" data-aos="fade-right" data-aos-duration="1000">
            <div class="main-asset__top main-sec__top"><?= $arResult['NAME']?></div>
            <?php if($arResult['DESCRIPTION']):?>
                <div class="main-asset__title main-sec__title"><?= $arResult['DESCRIPTION']?></div>
            <?php endif;?>
            <div class="main-asset__list">
                <?php foreach($arResult['ITEMS'] as $key => $item):?>
                    <div class="main-asset__list-item">
                        <div class="main-asset__list-item-wr">
                            <div class="main-asset__list-item-in">
                                <div class="main-asset__list-item-num">0<?= $key+1?></div>
                                <div class="main-asset__list-item-title main-sec__el-title"><?= $item['NAME']?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
<?php endif;?>