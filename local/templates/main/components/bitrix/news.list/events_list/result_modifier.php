<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($arResult['DESCRIPTION']) {
    $APPLICATION->SetPageProperty('description', $arResult['DESCRIPTION']);
}
