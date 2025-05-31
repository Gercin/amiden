<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<footer class="footer">
    <div class="container">
        <div class="footer__wr">
            <?php $APPLICATION->IncludeComponent(
                'bitrix:menu',
                'footer',
                [
                    'ALLOW_MULTI_SELECT' => 'N',
                    'CHILD_MENU_TYPE' => 'left',
                    'DELAY' => 'N',
                    'MAX_LEVEL' => '1',
                    'MENU_CACHE_GET_VARS' => [''],
                    'MENU_CACHE_TIME' => '3600',
                    'MENU_CACHE_TYPE' => 'A',
                    'MENU_CACHE_USE_GROUPS' => 'Y',
                    'ROOT_MENU_TYPE' => 'footer',
                    'USE_EXT' => 'Y'
                ]
            ); ?>
            <div class="footer__col footer__col--info">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.title",
                    "",
                    Array(
                        "CATEGORY_0" => array(),
                        "CATEGORY_0_TITLE" => "",
                        "CHECK_DATES" => "N",
                        "CONTAINER_ID" => "title-search",
                        "INPUT_ID" => "title-search-input",
                        "NUM_CATEGORIES" => "1",
                        "ORDER" => "date",
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "SHOW_INPUT" => "Y",
                        "SHOW_OTHERS" => "N",
                        "TOP_COUNT" => "5",
                        "USE_LANGUAGE_GUESS" => "Y"
                    )
                );?>
                <div class="footer__info-wr">
                    <div class="footer__info">
                        <?php if($arMainOptions['UF_PHONE']):?>
                            <a href="tel:<?= $arMainOptions['UF_PHONE_FORMAT'];?>"><?= $arMainOptions['UF_PHONE'];?></a><br>
                        <?php endif;
                        if($arMainOptions['UF_EMAIL']):?>
                            <a href="mailto:<?= $arMainOptions['UF_EMAIL'];?>"><?= $arMainOptions['UF_EMAIL'];?></a>
                        <?php endif;?>
                    </div>
                    <?php if($arMainOptions['UF_ADDRESS']):?>
                        <div class="footer__info">Юридический адрес: <?= $arMainOptions['UF_ADDRESS'];?></div>
                    <?php endif;
                    if($arMainOptions['UF_ADDRESS_2']):?>
                        <div class="footer__info">Адрес для корреспонденции: <?= $arMainOptions['UF_ADDRESS_2'];?></div>
                    <?php endif;?>
                    <div class="footer__info footer__info--bq">
                        <div class="footer-develop">
                            <span>Разработано в&nbsp;</span>
                            <a href="https://bquadro.ru/" class="footer-develop__img" target="_blank" rel="nofollow">
                                <span class="footer-develop__jpg"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__col footer__col--logo">
                <div class="footer__logo">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt="">
                </div>
                <div class="footer__info footer__info--logo">
                    <?php if($arMainOptions['UF_PRIVACY_POLICY_FILE_PATH']):?>
                        <a href="<?= $arMainOptions['UF_PRIVACY_POLICY_FILE_PATH'];?>" target="_blank">Политика конфиденциальности</a> <br>
                    <?php endif;?>
                    <p>© Будущее Медицины, все права защищены</p>
                </div>
            </div>
        </div>
    </div>
</footer>