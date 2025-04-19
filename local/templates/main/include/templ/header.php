<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<header class="fone header 123">
    <div class="container">
        <div class="header-fone">

        </div>
        <div class="fone__wrap header__wrap">
            <div class="header__col header__col--logo">
                <div class="header__logo">
                    <a <?php if ($mainLink): ?>href="<?= $mainLink; ?>"<?php endif; ?>> <img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt=""></a>
                </div>
                <div class="header__menu-btn"></div>
            </div>
            <?php $APPLICATION->IncludeComponent(
                'bitrix:menu',
                'top1',
                [
                    'ALLOW_MULTI_SELECT' => 'N',
                    'CHILD_MENU_TYPE' => 'left',
                    'DELAY' => 'N',
                    'MAX_LEVEL' => '2',
                    'MENU_CACHE_GET_VARS' => [''],
                    'MENU_CACHE_TIME' => '3600',
                    'MENU_CACHE_TYPE' => 'A',
                    'MENU_CACHE_USE_GROUPS' => 'N',
                    'ROOT_MENU_TYPE' => 'top',
                    'USE_EXT' => 'Y'
                ]
            ); ?>
            <div class="header__col header__col--action">
                <div class="header__action">
                    <a data-fancybox href="#modal_form_main" class="btn btn--orange">Связаться с нами</a>
                </div>
            </div>
        </div>
    </div>
</header>
<?php include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/templ/modal/form.php'; ?>
<div class="menu fone">
    <div class="fone__wrap container ">
        <div class="menu__top">
            <div class="menu__logo">
                <a <?php if ($mainLink): ?>href="<?= $mainLink; ?>"<?php endif; ?>> <img
                            src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt=""></a>
            </div>
            <div class="menu__close"></div>
        </div>
        <div class=" menu__inner verticalScroll">
            <?php $APPLICATION->IncludeComponent(
                'bitrix:menu',
                'burger',
                [
                    'ALLOW_MULTI_SELECT' => 'N',
                    'CHILD_MENU_TYPE' => 'left',
                    'DELAY' => 'N',
                    'MAX_LEVEL' => '2',
                    'MENU_CACHE_GET_VARS' => [''],
                    'MENU_CACHE_TIME' => '3600',
                    'MENU_CACHE_TYPE' => 'A',
                    'MENU_CACHE_USE_GROUPS' => 'Y',
                    'ROOT_MENU_TYPE' => 'burger',
                    'USE_EXT' => 'Y'
                ]
            ); ?>
        </div>
    </div>
</div>
