<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = array(
    'NAME' => 'Случайный товар каталога',
    'DESCRIPTION' => 'Выводит случайный товар каталога',
    'PATH' => array(
        'ID' => 'gercin',
        'NAME' => 'Мои компоненты',
        'CHILD' => array(
            'ID' => 'demo_catalog',
            'NAME' => 'Каталог товаров'
        )
    ),
    'ICON' => '/images/icon.gif'
);