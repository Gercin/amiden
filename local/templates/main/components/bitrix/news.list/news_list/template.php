<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['items']):?>
    <div class="tab-block">
        <div class="tab-block__top">
            <?php
            $firstItem = true;
            foreach($arResult['items'] as $year => $arItem):?>
                <div class="tab-block-top__item <?php if ($firstItem):?>tab-block-top__item--active<?php endif?>" data-id="<?= $year?>"><?= $year?></div>
            <?php $firstItem = false;
            endforeach;?>
        </div>
        <div class="tab-block__in">
            <?php
            $firstItem = true;
            foreach($arResult['items'] as $year => $arItem):?>
                <div class="tab-block__content <?php if ($firstItem):?>tab-block__content--active<?php endif?>" data-id="<?= $year?>">
                    <div class="news-list news-list-grid more-content <?php if((count($arResult['items'][$year])) > 6):?> closed <?php endif;?>">
                        <?php foreach($arItem as $key => $item):?>
                            <div class="news-list__item">
                                <a href="<?= $item['DETAIL_PAGE_URL']?>" class="news-list__item-wr">
                                    <div class="news-list__item-title page-sec__el-title"><?= $item['NAME']?></div>
                                    <div class="news-list__item-type"><?= $item['PREVIEW_TEXT']?></div>
                                    <div class="news-list__item-date"><?= $item['ACTIVE_FROM']?></div>
                                </a>
                            </div>
                        <?php endforeach;
                        if((count($arResult['items'][$year])) > 6):?>
                            <div class="news-list__more more-btn">
                                <span class="btn btn--orange">Показать еще</span>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            <?php $firstItem = false;
            endforeach;?>
        </div>
    </div>
<?php else:?>
    <div class="tab-block tab-block-no-elem">
        <span class="">
            Новостей пока нет
        </span>
    </div>
<?php endif;?>