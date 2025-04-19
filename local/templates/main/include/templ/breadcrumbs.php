<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<div class="page-top">
    <div class="page-top__breadcrumb">
        <div class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <div class="breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"
                 id="bx_breadcrumb_0">
                <a href="/" title="Главная" itemprop="item">
                    <span itemprop="name">Главная</span>
                </a>
                <meta itemprop="position" content="1">
            </div>
            <?php $APPLICATION->IncludeComponent(
                'bitrix:breadcrumb',
                'breadcrumb',
                [
                    'PATH' => '',
                    'SITE_ID' => 's1',
                    'START_FROM' => '0'
                ]
            ); ?>
        </div>
    </div>
    <div class="page-top__wr" <?= $APPLICATION->ShowProperty('breadcrumbsTtl'); ?>>
        <div class="page-top__wr-row">
            <h1 class="<?= $APPLICATION->ShowProperty('classPageTopH1'); ?>"><?php $APPLICATION->ShowTitle(false) ?></h1>
        </div>
        <div class="page-top__wr-row">
            <? if ($APPLICATION->GetCurPage() !== "/search/") { ?>
                <div class="page-top__text"><?php $APPLICATION->ShowProperty('description') ?></div>
            <? } ?>
        </div>
    </div>
</div>
