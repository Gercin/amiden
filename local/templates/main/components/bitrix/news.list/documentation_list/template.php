<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['sections']):?>
    <div class="doc-list">
        <?php foreach($arResult['sections'] as $keySec => $section):
            if ($section['items']):?>
            <div class="doc-list__in">
                <div class="doc-list__title page-sec__title"><?= $section['name']?></div>
                <div class="doc-list__wr">
                    <?php foreach($section['items'] as $key => $item):?>
                        <div class="doc-list__item">
                            <a href="<?= $item['file']['path']; ?>" class="doc-list__item-cont" <?php if ($item['file']['type'] == 'pdf') : ?>target="_blank" <?php else : ?> download<?php endif; ?>>
                                <div class="doc-list__item-title "><?= $item['NAME']?></div>
                                <span><?= $item['file']['size']; ?></span>
                                <span><?= $item['file']['type']; ?></span>
                            </a>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endif;
        endforeach;?>
    </div>
<?php endif;?>