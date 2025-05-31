<?php
/*
 * Файл bitrix/components/demo/catalog.element/templates/.default/template.php
 */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

if ((!empty($arResult['ITEMS']))):
    ?>
    <?php foreach ($arResult['ITEMS'] as $key => $arItem): ?>
        <a href="<?=$arItem['url']?>"><?=$arItem['name']?> - <?=$arItem['price']?> руб.</a><br>
    <?php endforeach; ?>
<?php endif; ?>