<?php
use \Bitrix\Main\Loader,
    \Bitrix\Iblock\SectionTable,
    \Bitrix\Main\IO\Path;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($arResult['DESCRIPTION']) {
    $APPLICATION->SetPageProperty('description', $arResult['DESCRIPTION']);
}

Loader::includeModule('iblock');

$rsSection = SectionTable::getList([
    'filter' => [
        'IBLOCK_ID' => $arResult['ID'],
        'DEPTH_LEVEL' => 1,
    ],
    'select' =>  ['ID','CODE','NAME'],
]);

while ($arSection = $rsSection->fetch())
{
    $arResult['sections'][$arSection['ID']]['id'] = $arSection['ID'];
    $arResult['sections'][$arSection['ID']]['name'] = $arSection['NAME'];
    $arResult['sections'][$arSection['ID']]['code'] = $arSection['CODE'];
}

foreach($arResult['ITEMS'] as $key => $item) {
    if ($item['PROPERTIES']['file']['VALUE']) {
        $item['file']['path'] = CFile::GetPath($item['PROPERTIES']['file']['VALUE']);
        $item['file']['type'] = Path::getExtension($item['file']['path']);
        $item['file']['size'] = CFile::FormatSize($item['DISPLAY_PROPERTIES']['file']['FILE_VALUE']['FILE_SIZE']);
    }
    if ($item['file']['type'] != 'pdf') {
        $item['file']['path'] .= '#.#';
    }
    $arResult['sections'][$item['IBLOCK_SECTION_ID']]['items'][] = $item;
}