<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']):
    $listPage = '';
    ?>
    <div class="main-sec main-publish">
        <div class="main-sec__cont" data-aos="fade-right" data-aos-duration="1000">
            <div class="main-publish__top  main-sec__top "><?= $arResult['NAME'] ?></div>
            <?php if ($arResult['DESCRIPTION']): ?>
                <div class="main-publish__title  main-sec__title"><?= $arResult['DESCRIPTION'] ?></div>
            <?php endif; ?>
            <div class="main-publish__list">
                <?php foreach ($arResult['ITEMS'] as $key => $item):
                $listPage = $item['LIST_PAGE_URL']; ?>
                <div class="main-publish__list-item">
                    <?php if ($item['PROPERTIES']['tags']['VALUE']): ?>
                        <div class="main-publish__list-item-type">
                            <?php foreach ($item['PROPERTIES']['tags']['VALUE'] as $tags): ?>
                                <span><?= $tags ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <? if ($item['DETAIL_PAGE_URL']){ ?>
                        <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="main-publish__list-item-cont">
                        <? }else{ ?>
                        <div class="main-publish__list-item-cont">
                    <? } ?>
                            <div class="main-publish__list-item-title main-sec__el-title"><?= $item['NAME'] ?></div>
                            <div class="main-publish__list-item-date"><?= $item['ACTIVE_FROM'] ?></div>
                            <? if ($item['DETAIL_PAGE_URL']){ ?>
                    </a>
                    <? }else{ ?>
                </div>
            <? } ?>
            </div>
        <?php endforeach;
        ?>
        </div>
        <div class="main-publish__more">
            <a href="<?= $listPage ?>" class=" btn-arr btn-arr--wt">Все публикации <span></span></a>
        </div>
    </div>
    </div>
<?php endif; ?>