<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

$arResult = array();
if (CModule::IncludeModule('iblock')) {

    $SECTION_ID = (int) $arParams['SECTION_ID'];
    $COUNT = (int) $arParams['COUNT'];

    $arFilter = array(
        "IBLOCK_ID" => IB_ID_CATALOG,
        "ACTIVE_DATE" => "Y",
        "ACTIVE" => "Y",
        "SECTION_ID" => $SECTION_ID
    );

    $arSelect = array("ID", "NAME", "PROPERTY_PRICE","IBLOCK_SECTION_ID");
    $arSort = array("RAND" => "ASC");
    $dbGet = CIBlockElement::GetList($arSort, $arFilter, false, array("nTopCount" => $COUNT), $arSelect);
    while ($arElem = $dbGet->Fetch()) {
        $arResult['ITEMS'][$arElem['ID']]['name'] = $arElem['NAME'];
        $arResult['ITEMS'][$arElem['ID']]['url'] = '/products/'.$arElem['IBLOCK_SECTION_ID'].'/'.$arElem['ID'].'/';
        $arResult['ITEMS'][$arElem['ID']]['price'] = $arElem['PROPERTY_PRICE_VALUE'];
    }
}
$this->IncludeComponentTemplate();
