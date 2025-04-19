<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($arResult['DESCRIPTION']) {
    $APPLICATION->SetPageProperty('description', $arResult['DESCRIPTION']);
}

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['items'][strtolower(FormatDate('Y', MakeTimeStamp($item['ACTIVE_FROM'])))][] = $item;
}

krsort($arResult['items']);
