<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
foreach ($arResult as $key => $item) {
    if ($item['LINK'] == '/#.#/') {
        unset($arResult[$key]['LINK']);
    }
}

$count = count($arResult);
$countchunk = ceil($count/2);

$arResult = array_chunk($arResult, $countchunk);
