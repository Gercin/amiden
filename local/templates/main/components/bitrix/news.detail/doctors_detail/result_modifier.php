<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!$arResult['DETAIL_PICTURE']['SRC']) {
    $arResult['DETAIL_PICTURE']['SRC'] = ''.SITE_TEMPLATE_PATH.'/images/no_photo.png';
}