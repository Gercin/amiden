<?php
use Bitrix\Iblock\Component\Tools;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($path['3']) {
    Tools::process404(
        '',
        true,
        true,
        true,
        false
    );
}

if ($path['2']) {
    include_once 'detail.php';
} else {
    include_once 'list.php';
}