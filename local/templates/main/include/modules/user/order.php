<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');


$arFilter = [
    'USER_ID' => $USER->GetID()
];

$order = [
    'DATE_INSERT' => 'ASC'
];

$db_sales = CSaleOrder::GetList($order, $arFilter);
while ($ar_sales = $db_sales->GetNext()) {
    $arOrdersIDs[] = $ar_sales['ID'];

    if ($ar_sales['STATUS_ID'] == 'N') {
        $arOrdersIrems[$ar_sales['ID']]['status'] = 'Принят, ожидается оплата';
    } elseif ($ar_sales['STATUS_ID'] == 'F') {
        $arOrdersIrems[$ar_sales['ID']]['status'] = 'Выполнен';
    }

    $date = explode(' ',  $ar_sales['DATE_UPDATE']);
    $arOrdersIrems[$ar_sales['ID']]['date'] = $date[0];
    $arOrdersIrems[$ar_sales['ID']]['price'] = number_format($ar_sales['PRICE'], 0, ',', ' ');
}

$res = CSaleBasket::GetList([], ['ORDER_ID' => $arOrdersIDs]);
while ($arItem = $res->GetNext()) {
    $arOrdersIrems[$arItem['ORDER_ID']]['items'][$arItem['ID']]['name'] = $arItem['NAME'];
    $price = explode('.', $arItem['PRICE']);
    $arOrdersIrems[$arItem['ORDER_ID']]['items'][$arItem['ID']]['price'] = number_format($price[0], 0, ',', ' ');
    $arOrdersIrems[$arItem['ORDER_ID']]['items'][$arItem['ID']]['product'] = $arItem['PRODUCT_ID'];
    $arOrdersIrems[$arItem['ORDER_ID']]['items'][$arItem['ID']]['count'] = $arItem['QUANTITY'];
    $arOrdersIrems[$arItem['ORDER_ID']]['items'][$arItem['ID']]['count_n'] = $arItem['MEASURE_NAME'];
    $priceB = explode('.', $arItem['BASE_PRICE']);
    $arOrdersIrems[$arItem['ORDER_ID']]['items'][$arItem['ID']]['full_price'] = number_format($priceB[0], 0, ',', ' ');

    $arItemsIDs[] = $arItem['PRODUCT_ID'];
}


$select = [
    'ID',
    'PROPERTY_vendor',
    'PREVIEW_PICTURE'
];

$filter = [
    'IBLOCK_ID' => IblockIdCatalogInst,
    'ID' => $arItemsIDs
];

$rsData = CIBlockElement::GetList([], $filter, false, [], $select);
while ($arData = $rsData->GetNext()) {
    $arCatalog[$arData['ID']]['vendor'] = $arData['PROPERTY_VENDOR_VALUE'];
    $arCatalog[$arData['ID']]['img'] = CFile::ResizeImageGet(
        $arData['PREVIEW_PICTURE'],
        ['width' => 120, 'height' => 85],
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true
    );
}

foreach ($arOrdersIrems as $key => $order) {
    foreach ($order['items'] as $key2 => $item) {
        $arOrdersIrems[$key]['items'][$key2]['img'] =  $arCatalog[$item['product']]['img'];
        $arOrdersIrems[$key]['items'][$key2]['vendor'] =  $arCatalog[$item['product']]['vendor'];
    }
}
