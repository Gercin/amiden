<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$APPLICATION->SetPageProperty('classBody', 'body--news-detail');
$APPLICATION->SetPageProperty('breadcrumbsTtl', 'style="display:none;"');

$detailID = $APPLICATION->IncludeComponent(
    'bitrix:news.detail',
    'news_detail',
    [
        'ACTIVE_DATE_FORMAT' => 'j F Y',
        'ADD_ELEMENT_CHAIN' => 'N',
        'ADD_SECTIONS_CHAIN' => 'N',
        'AJAX_MODE' => 'N',
        'AJAX_OPTION_ADDITIONAL' => '',
        'AJAX_OPTION_HISTORY' => 'N',
        'AJAX_OPTION_JUMP' => 'N',
        'AJAX_OPTION_STYLE' => 'N',
        'BROWSER_TITLE' => '-',
        'CACHE_GROUPS' => 'N',
        'CACHE_TIME' => '36000000',
        'CACHE_TYPE' => 'N',
        'CHECK_DATES' => 'Y',
        'DETAIL_URL' => '',
        'DISPLAY_BOTTOM_PAGER' => 'Y',
        'DISPLAY_DATE' => 'Y',
        'DISPLAY_NAME' => 'Y',
        'DISPLAY_PICTURE' => 'N',
        'DISPLAY_PREVIEW_TEXT' => 'N',
        'DISPLAY_TOP_PAGER' => 'N',
        'ELEMENT_CODE' => $path['2'],
        'ELEMENT_ID' => '',
        'FIELD_CODE' => [],
        'FILE_404' => '',
        'IBLOCK_ID' => IB_ID_NEWS,
        'IBLOCK_TYPE' => 'content',
        'IBLOCK_URL' => '',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'MESSAGE_404' => '',
        'META_DESCRIPTION' => '-',
        'META_KEYWORDS' => '-',
        'PAGER_BASE_LINK_ENABLE' => 'N',
        'PAGER_SHOW_ALL' => 'N',
        'PAGER_TEMPLATE' => '.default',
        'PAGER_TITLE' => 'Страница',
        'PROPERTY_CODE' => [
            'file',
        ],
        'SET_BROWSER_TITLE' => 'Y',
        'SET_CANONICAL_URL' => 'N',
        'SET_LAST_MODIFIED' => 'N',
        'SET_META_DESCRIPTION' => 'N',
        'SET_META_KEYWORDS' => 'N',
        'SET_STATUS_404' => 'Y',
        'SET_TITLE' => 'Y',
        'SHOW_404' => 'Y',
        'STRICT_SECTION_CHECK' => 'N',
        'USE_PERMISSIONS' => 'N',
        'USE_SHARE' => 'N'
    ]
); ?>
<div class="form-block">
    <div class="form-block__wr">
        <div class="form-block__info">
            <div class="form-block__subtitle">
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/news/include/subtitle.php'
                    ]
                ); ?>
            </div>
            <div class="form-block__title page-sec__title">
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/news/include/secttl.php'
                    ]
                ); ?>
            </div>
            <div class="form-block__text">
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/news/include/blocktxt.php'
                    ]
                ); ?>
            </div>
        </div>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/form_main.php'; ?>
    </div>
</div>

<?php
$filterOtherNews = [
    '!ID' => $detailID
];

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'news_other',
    [
        'ACTIVE_DATE_FORMAT' => 'd F Y',
        'ADD_SECTIONS_CHAIN' => 'Y',
        'AJAX_MODE' => 'N',
        'AJAX_OPTION_ADDITIONAL' => '',
        'AJAX_OPTION_HISTORY' => 'N',
        'AJAX_OPTION_JUMP' => 'N',
        'AJAX_OPTION_STYLE' => 'N',
        'CACHE_FILTER' => 'N',
        'CACHE_GROUPS' => 'N',
        'CACHE_TIME' => '36000000',
        'CACHE_TYPE' => 'N',
        'CHECK_DATES' => 'N',
        'DETAIL_URL' => '',
        'DISPLAY_BOTTOM_PAGER' => 'Y',
        'DISPLAY_DATE' => 'Y',
        'DISPLAY_NAME' => 'Y',
        'DISPLAY_PICTURE' => 'Y',
        'DISPLAY_PREVIEW_TEXT' => 'N',
        'DISPLAY_TOP_PAGER' => 'N',
        'FIELD_CODE' => [
            'NAME',
            'DETAIL_PICTURE',
            'DISPLAY_ACTIVE_FROM'
        ],
        'FILE_404' => '',
        'FILTER_NAME' => 'filterOtherNews',
        'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
        'IBLOCK_ID' => IB_ID_NEWS,
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'INCLUDE_SUBSECTIONS' => 'N',
        'MESSAGE_404' => '',
        'NEWS_COUNT' => '4',
        'PAGER_BASE_LINK_ENABLE' => 'N',
        'PAGER_DESC_NUMBERING' => 'N',
        'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
        'PAGER_SHOW_ALL' => 'N',
        'PAGER_SHOW_ALWAYS' => 'N',
        'PAGER_TEMPLATE' => '.default',
        'PAGER_TITLE' => 'Новости',
        'PARENT_SECTION' => '',
        'PREVIEW_TRUNCATE_LEN' => '',
        'PROPERTY_CODE' => [],
        'SET_BROWSER_TITLE' => 'N',
        'SET_LAST_MODIFIED' => 'N',
        'SET_META_DESCRIPTION' => 'N',
        'SET_META_KEYWORDS' => 'N',
        'SET_STATUS_404' => 'Y',
        'SET_TITLE' => 'N',
        'SHOW_404' => 'Y',
        'SORT_BY1' => 'ACTIVE_FROM',
        'SORT_BY2' => 'SORT',
        'SORT_ORDER1' => 'DESC',
        'SORT_ORDER2' => 'ASC',
        'STRICT_SECTION_CHECK' => 'N',
        'COMPONENT_TEMPLATE' => 'news_other'
    ],
    false
); ?>
