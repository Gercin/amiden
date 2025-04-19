<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']):?>
    <div class="publish-list more-content <?php if(count($arResult['ITEMS']) > 4):?> closed <?php endif;?>">
        <div class="publish-list__wr">
            <?php foreach($arResult['ITEMS'] as $key => $item):?>
                <div class="publish-list__item">
                    <?php if($item['PROPERTIES']['tags']['VALUE']):?>
                        <div class="publish-list__item-type">
                            <?php foreach($item['PROPERTIES']['tags']['VALUE'] as $key2 => $item2):?>
                                <span><?= $item2?></span>
                            <?php endforeach;?>
                        </div>
                    <?php endif;?>
                    <div class="publish-list__item-cont">
                        <a href="<?= $item['DETAIL_PAGE_URL']?>" class="publish-list__item-title page-sec__el-title"><?= $item['NAME']?></a>
                        <div class="publish-list__item-date"><?= $item['ACTIVE_FROM']?></div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <?php if(count($arResult['ITEMS']) > 4):?>
            <div class="publish-list__more more-btn">
                <span class="btn btn--orange">Показать еще</span>
            </div>
        <?php endif;?>
    </div>
<?php endif;?>