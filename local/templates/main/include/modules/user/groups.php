<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

global $USER;

$userId = $USER->GetID();
$userEmail = $USER->GetEmail();

if (in_array(5, $USER->GetUserGroupArray())) {
    $userType = 'CHANGE_INDIV';
} elseif (in_array(6, $USER->GetUserGroupArray())) {
    $userType = 'CHANGE_ENTITY';
}

if (in_array(7, $USER->GetUserGroupArray())) {
    $userDiscount[1] = 'Уровень цен 1';
    $userDiscount[2] = '5 %';
    $userDiscount[3] = 5;
} elseif (in_array(8, $USER->GetUserGroupArray())) {
    $userDiscount[1] = 'Уровень цен 2';
    $userDiscount[2] = '10 %';
    $userDiscount[3] = 10;
} elseif (in_array(9, $USER->GetUserGroupArray())) {
    $userDiscount[1] = 'Уровень цен 3';
    $userDiscount[2] = '25 %';
    $userDiscount[3] = 25;
} elseif (in_array(10, $USER->GetUserGroupArray())) {
    $userDiscount[1] = 'Уровень цен 4';
    $userDiscount[2] = '50 %';
    $userDiscount[3] = 50;
}
