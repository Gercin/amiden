<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}
$APPLICATION->SetPageProperty('classBody', 'body--main');
?>
<div class="main-sec main-banner">
    <div class="main-banner__fone" >
        <picture>
            <source media=“(max-width: 600px)” srcset="<?= SITE_TEMPLATE_PATH?>/images/main-banner-min.webp">
            <img loading="lazy" src="<?= SITE_TEMPLATE_PATH?>/images/main-banner.webp" alt="" width="600" height="420">
        </picture>
    </div>
    <h1 style="display: none">Ассоциация "Будущее медицины"</h1>
    <h2 style="display: none">Ведущее сообщество врачей и исследователей</h2>
    <div class="main-sec__cont" data-aos="fade-up" data-aos-duration="1000">
        <div class="main-banner__wr">
            <div class="main-banner__title ">
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/main/include/main_banner_ttl.php'
                    ]
                ); ?>
            </div>
            <div class="main-banner__cont">
                <div class="main-banner__text">
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/main/include/main_banner_txt.php'
                        ]
                    ); ?>
                </div>
                <div class="main-banner__btn">
                    <a href="/about/" class=" btn-arr btn-arr--wt">
                        <?php $APPLICATION->IncludeComponent(
                            'bitrix:main.include',
                            '',
                            [
                                'AREA_FILE_SHOW' => 'file',
                                'AREA_FILE_SUFFIX' => 'inc',
                                'EDIT_TEMPLATE' => '',
                                'PATH' => '/main/include/main_banner_btn.php'
                            ]
                        ); ?>
                         <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-sec main-company">
    <div class="main-sec__cont" data-aos="fade-up" data-aos-duration="1000">
        <div class="main-company__top main-sec__top">
            <?php $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                '',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/main/include/main_company_top.php'
                ]
            ); ?>
        </div>
        <div class="main-company__block">
            <div class="main-company__title main-sec__title">
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/main/include/main_company_ttl.php'
                    ]
                ); ?>
            </div>
            <div class="main-company__cont">
                <div class="main-company__text">
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/main/include/main_company_txt.php'
                        ]
                    ); ?>
                </div>
                <div class="main-company__btn">
                    <a href="/about/" class=" btn-arr">
                        <?php $APPLICATION->IncludeComponent(
                            'bitrix:main.include',
                            '',
                            [
                                'AREA_FILE_SHOW' => 'file',
                                'AREA_FILE_SUFFIX' => 'inc',
                                'EDIT_TEMPLATE' => '',
                                'PATH' => '/main/include/main_company_btn.php'
                            ]
                        ); ?>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'values_main',
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
        'FILTER_NAME' => '',
        'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
        'IBLOCK_ID' => IB_ID_VALUES,
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'INCLUDE_SUBSECTIONS' => 'N',
        'MESSAGE_404' => '',
        'NEWS_COUNT' => '120',
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
        'SORT_BY1' => 'SORT',
        'SORT_BY2' => 'ACTIVE_FROM',
        'SORT_ORDER1' => 'ASC',
        'SORT_ORDER2' => 'DESC',
        'STRICT_SECTION_CHECK' => 'N',
        'COMPONENT_TEMPLATE' => 'values_main'
    ],
    false
);

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'news_main',
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
        'FILTER_NAME' => '',
        'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
        'IBLOCK_ID' => IB_ID_NEWS,
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'INCLUDE_SUBSECTIONS' => 'N',
        'MESSAGE_404' => '',
        'NEWS_COUNT' => '120',
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
        'SORT_BY1' => 'SORT',
        'SORT_BY2' => 'ACTIVE_FROM',
        'SORT_ORDER1' => 'ASC',
        'SORT_ORDER2' => 'DESC',
        'STRICT_SECTION_CHECK' => 'N',
        'COMPONENT_TEMPLATE' => 'news_main'
    ],
    false
);

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'publications_main',
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
        'FILTER_NAME' => '',
        'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
        'IBLOCK_ID' => IB_ID_PUBLIC,
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'INCLUDE_SUBSECTIONS' => 'N',
        'MESSAGE_404' => '',
        'NEWS_COUNT' => '120',
        'PAGER_BASE_LINK_ENABLE' => 'N',
        'PAGER_DESC_NUMBERING' => 'N',
        'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
        'PAGER_SHOW_ALL' => 'Y',
        'PAGER_SHOW_ALWAYS' => 'N',
        'PAGER_TEMPLATE' => '.default',
        'PAGER_TITLE' => 'Новости',
        'PARENT_SECTION' => '',
        'PREVIEW_TRUNCATE_LEN' => '',
        'PROPERTY_CODE' => ['tags'],
        'SET_BROWSER_TITLE' => 'N',
        'SET_LAST_MODIFIED' => 'N',
        'SET_META_DESCRIPTION' => 'N',
        'SET_META_KEYWORDS' => 'N',
        'SET_STATUS_404' => 'Y',
        'SET_TITLE' => 'N',
        'SHOW_404' => 'Y',
        'SORT_BY1' => 'SORT',
        'SORT_BY2' => 'ACTIVE_FROM',
        'SORT_ORDER1' => 'ASC',
        'SORT_ORDER2' => 'DESC',
        'STRICT_SECTION_CHECK' => 'N',
        'COMPONENT_TEMPLATE' => 'publications_main'
    ],
    false
);

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'events_main',
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
        'FILTER_NAME' => '',
        'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
        'IBLOCK_ID' => IB_ID_EVENTS,
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'INCLUDE_SUBSECTIONS' => 'N',
        'MESSAGE_404' => '',
        'NEWS_COUNT' => '120',
        'PAGER_BASE_LINK_ENABLE' => 'N',
        'PAGER_DESC_NUMBERING' => 'N',
        'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
        'PAGER_SHOW_ALL' => 'Y',
        'PAGER_SHOW_ALWAYS' => 'N',
        'PAGER_TEMPLATE' => '.default',
        'PAGER_TITLE' => 'Новости',
        'PARENT_SECTION' => '',
        'PREVIEW_TRUNCATE_LEN' => '',
        'PROPERTY_CODE' => ['address'],
        'SET_BROWSER_TITLE' => 'N',
        'SET_LAST_MODIFIED' => 'N',
        'SET_META_DESCRIPTION' => 'N',
        'SET_META_KEYWORDS' => 'N',
        'SET_STATUS_404' => 'Y',
        'SET_TITLE' => 'N',
        'SHOW_404' => 'Y',
        'SORT_BY1' => 'SORT',
        'SORT_BY2' => 'ACTIVE_FROM',
        'SORT_ORDER1' => 'ASC',
        'SORT_ORDER2' => 'DESC',
        'STRICT_SECTION_CHECK' => 'N',
        'COMPONENT_TEMPLATE' => 'events_main'
    ],
    false
); ?>