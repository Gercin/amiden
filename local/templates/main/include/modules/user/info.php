<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');


$filterUsUf = [];
$filterUsUf = [
    'ID' => $userId,
];

$paramsUsUf['SELECT'] = [];
$paramsUsUf['SELECT'] = [
    'UF_PHONE',
    'UF_TIN',
    'UF_COMPANY',
    'UF_CONTACT',
    'UF_LEG_ADDRESS',
    'UF_POST_ADDRESS',
    'UF_KPP',
    'UF_HEAD',
    'UF_BIK',
    'UF_HEAD_TENET',
    'UF_COR_ACC',
    'UF_HEAD_POS'
];

$rsUser = CUser::GetList([], [], $filterUsUf, $paramsUsUf);
if ($arUser = $rsUser->GetNext()) {
    $arUserUF = $arUser;
}