<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($arResult['DESCRIPTION']) {
    $APPLICATION->SetPageProperty('description', $arResult['DESCRIPTION']);
}

foreach ($arResult['ITEMS'] as $key => $item) {
    if (!$item['PREVIEW_PICTURE']['SRC']) {
        $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = ''.SITE_TEMPLATE_PATH.'/images/no_photo.png';
    }
}
