<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
Asset::getInstance()->addString('<meta charset="utf-8">');
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">');
Asset::getInstance()->addString('<link rel="icon" type="image/png" href="/local/templates/main/assets/images/favicon_32x32.png" sizes="32x32">');
Asset::getInstance()->addString('<link rel="shortcut icon" href="/favicon.ico">');
Asset::getInstance()->addString('<meta name="cmsmagazine" content="cf4f03a6602f60790197ac6e5f1e2da0" />');
//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/swiper-bundle.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap-small.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/jquery.fancybox.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/aos.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/swiper-bundle.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.inputmask-multi.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/aos.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/script.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.fancybox.min.js");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/js/jquery.fancybox.min.css");


