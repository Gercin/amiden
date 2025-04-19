<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<!doctype html>
<html lang="ru">

<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php
    $APPLICATION->ShowHead();
    include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/assets.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/options.php';
    ?>
    <meta property="og:title" content="<?php $APPLICATION->ShowTitle(false) ?>">
    <meta property="og:description" content="<?php $APPLICATION->ShowProperty('description') ?>">
    <meta property="og:url" content="https://<?=$_SERVER['HTTP_HOST']?><?= $APPLICATION->GetCurPage(false) ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $APPLICATION->ShowProperty("title") ?>">
    <meta property="vk:image" content="https://<?=$_SERVER['HTTP_HOST'].SITE_TEMPLATE_PATH?>/images/main-banner-meta.webp">
    <meta property="og:image" content="https://<?=$_SERVER['HTTP_HOST'].SITE_TEMPLATE_PATH?>/images/main-banner-meta.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <style>
        @font-face {
            font-family: "Manrope";
            src: url(/local/templates/main/fonts/Manrope/Manrope-Regular.ttf),
            url(/local/templates/main/fonts/Manrope/Manrope-Regular.woff);
            font-display: swap;
        }

        @font-face {
            font-family: "Manrope";
            src: url(/local/templates/main/fonts/Manrope/Manrope-Light.ttf),
            url(/local/templates/main/fonts/Manrope/Manrope-Light.woff);
            font-weight: 200;
            font-display: swap;
        }

        @font-face {
            font-family: "Manrope";
            src: url(/local/templates/main/fonts/Manrope/Manrope-Medium.ttf),
            url(/local/templates/main/fonts/Manrope/Manrope-Medium.woff);
            font-weight: 500;
            font-display: swap;
        }

        @font-face {
            font-family: "Manrope";
            src: url(/local/templates/main/fonts/Manrope/Manrope-SemiBold.ttf),
            url(/local/templates/main/fonts/Manrope/Manrope-SemiBold.woff);
            font-weight: 600;
            font-display: swap;
        }

        @font-face {
            font-family: "Manrope";
            src: url(/local/templates/main/fonts/Manrope/Manrope-Bold.ttf),
            url(/local/templates/main/fonts/Manrope/Manrope-Bold.woff);
            font-weight: 700;
            font-display: swap;
        }

    </style>
</head>
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>
<body class="<?= $APPLICATION->ShowProperty('classBody'); ?> new-main">
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/header.php';
?>
<main class="main "> <!---   main    --->
    <div class="container">
        <?php if (($path[1]) && ($not404)) {
            include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/breadcrumbs.php';
        } ?>
