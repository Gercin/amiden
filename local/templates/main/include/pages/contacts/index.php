<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$APPLICATION->SetPageProperty('classBody', 'body--contacts');
$APPLICATION->SetPageProperty('breadcrumbsTtl', 'style="display:none;"');
?>
<div class="contacts">
    <div class="contacts__img">
        <div class="contacts__fone">
            <picture>
                <img src="<?= SITE_TEMPLATE_PATH?>/images/contacts-img.jpg" alt="">
            </picture>
        </div>
    </div>
    <div class="contacts__wr">
        <?php if($arMainOptions['UF_ADDRESS']):?>
            <div class="contacts__item contacts__address page-sec__el-title"><?= $arMainOptions['UF_ADDRESS'];?></div>
        <?php endif;
        if($arMainOptions['UF_PHONE']):?>
            <div class="contacts__item contacts__phone page-sec__el-title">
                <a href="tel:<?= $arMainOptions['UF_PHONE_FORMAT'];?>"><?= $arMainOptions['UF_PHONE'];?></a>
            </div>
        <?php endif;
        if($arMainOptions['UF_EMAIL']):?>
            <div class="contacts__item contacts__mail page-sec__el-title">
                <a href="mailto:<?= $arMainOptions['UF_EMAIL'];?>"><?= $arMainOptions['UF_EMAIL'];?></a>
            </div>
        <?php endif;?>
    </div>
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
                            'PATH' => '/contacts/include/subtitle.php'
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
                            'PATH' => '/contacts/include/secttl.php'
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
                            'PATH' => '/contacts/include/blocktxt.php'
                        ]
                    ); ?>
                </div>
            </div>
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/forms/form_main.php'; ?>
        </div>
    </div>
</div>
