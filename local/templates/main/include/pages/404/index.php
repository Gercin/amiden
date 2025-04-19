<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<div class="not-found">
    <div class="not-found__wr">
        <div class="not-found__num">
            <?php $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                '',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/404/include/numb.php'
                ]
            ); ?>
        </div>
        <div class="not-found__title page-sec__title">
            <?php $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                '',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/404/include/text.php'
                ]
            ); ?>
        </div>
        <div class="not-found__btn">
            <a href="/" class=" btn-arr">
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/404/include/main.php'
                    ]
                ); ?>
                <span></span>
            </a>
        </div>
    </div>
</div>