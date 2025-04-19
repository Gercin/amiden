<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\IO\Path;

$arResult['img'] = CFile::ResizeImageGet(
    $arResult['DETAIL_PICTURE']['ID'],
    ['width' => 890, 'height' => 632],
    BX_RESIZE_IMAGE_PROPORTIONAL,
    true
);

$arFile = $arResult['DISPLAY_PROPERTIES']['file']['FILE_VALUE'];

$arResult['file']['src'] = $arFile['SRC'];
$arResult['file']['type'] = Path::getExtension($arFile['SRC']);
$arResult['file']['size'] = CFile::FormatSize($arFile['FILE_SIZE']);
$arResult['file']['name'] = $arFile['ORIGINAL_NAME'];

if ($arResult['PROPERTIES']['galery']['VALUE']) {
    foreach ($arResult['PROPERTIES']['galery']['VALUE'] as $img) {
        $arResult['dop_img'][] = CFile::ResizeImageGet(
            $img,
            ['width' => 890, 'height' => 480],
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
    }
}
