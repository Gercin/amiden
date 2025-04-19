<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application,
    Bitrix\Main\Web\Uri,
    Bquadro\Options,
    Bitrix\Main\Loader;

$request = Application::getInstance()->getContext()->getRequest();

$uri = new Uri($request->getRequestUri());

$arPath = $uri->getPath();
$path = explode('/', $uri->getPath());
$path = array_filter($path);
$host = $_SERVER['HTTP_HOST'];

$mainLink = '/';

if (!$path[1]) {
    $mainLink = false;
}

$not404 = true;

if(defined('ERROR_404') && ERROR_404 == 'Y') {
    $not404 = false;
}

$arMainOptions = [];

$arHLUFCodes = [
    'UF_PHONE',
    'UF_EMAIL',
    'UF_ADDRESS',
    'UF_ADDRESS_2',
    'UF_PRIVACY_POLICY'
];
foreach ($arHLUFCodes as $ufCode) {
    $arMainOptions[$ufCode] = Options::getInstance()->getSettings()->get($ufCode);
}
$arMainOptions['UF_PHONE_FORMAT'] = preg_replace('/[^0-9]/', '', $arMainOptions['UF_PHONE']);
if ($arMainOptions['UF_PHONE']['0'] != '+') {
    $arMainOptions['UF_PHONE_FORMAT'] = substr_replace($arMainOptions['UF_PHONE_FORMAT'], '+7', 0, 1);
}
$arMainOptions['UF_PRIVACY_POLICY_FILE_PATH'] = CFile::GetPath($arMainOptions['UF_PRIVACY_POLICY']);
