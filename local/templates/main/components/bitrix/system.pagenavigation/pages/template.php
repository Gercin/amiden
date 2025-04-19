<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
$this->setFrameMode(true);
if ($arResult['NavPageCount'] > 1) :?>
    <? if (count($arResult['NavPageCount']) > 1) { ?>
        <div class="pagination">
            <?php for ($i = 1; $i <= $arResult['NavPageCount']; $i++):
                $url = $arResult['sUrlPathParams'] . 'PAGEN_' . $arResult['NavNum'] . '=' . $i;
                ?>
                <a href="<?= $url ?>"
                   class="pagination__item <?php if ($arResult['NavPageNomer'] == $i): ?>pagination__item--current<?php endif; ?>"><?= $i; ?></a>
            <?php endfor; ?>
        </div>
    <? } ?>
<?php endif; ?>
