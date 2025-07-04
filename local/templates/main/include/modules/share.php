<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Web\Uri;
use \Bitrix\Main\Application;

$request = Application::getInstance()->getContext()->getRequest();
$uri = new Uri($request->getRequestUri());

$pathFull = $_SERVER['HTTP_HOST'];
$pathFull .= $uri->getPath();
?>
<div class="sticky-container">
    <aside class="share-social">
        <div class="share-social__box">
            <div class="share-social__title">Поделиться</div>
            <ul class="footer__socials">
                <li class="footer__socials-item">
                    <a class="footer__socials-link share-social__link" href="https://www.facebook.com/sharer/sharer.php?u=http://<?= $pathFull ?>" target="_blank">
                        <svg class="footer__socials-svg" xmlns="http://www.w3.org/2000/svg" width="10" height="21" viewBox="0 0 10 21" fill="none">
                            <path d="M6.64894 4.63077V6.73077H10L9.57447 10.5H6.64894V21H2.07447V10.5H0V6.73077H2.07447V4.63077C2.07447 4.63077 1.70213 0.646154 5.42553 0H10V3.39231H7.92553C7.92553 3.33846 6.75532 3.28462 6.64894 4.63077Z" fill="white"></path>
                        </svg>
                    </a>
                </li>
                <li class="footer__socials-item">
                    <a class="footer__socials-link share-social__link" href="http://vk.com/share.php?url=http://<?= $pathFull ?>" target="_blank">
                        <svg class="footer__socials-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="13" viewBox="0 0 24 13" fill="none">
                            <path d="M11.7391 12.9257H13.1873C13.1873 12.9257 13.6481 12.8633 13.8456 12.676C14.0431 12.4886 14.0431 12.0515 14.0431 12.0515C14.0431 12.0515 14.0431 10.2407 14.8988 9.99091C15.7546 9.74113 16.9395 11.7393 18.1243 12.5511C19.0459 13.1131 19.7042 12.9882 19.7042 12.9882L22.9297 12.9257C22.9297 12.9257 24.5754 12.8008 23.7855 11.552C23.7196 11.4271 23.3247 10.6153 21.4157 8.92937C19.4409 7.18096 19.7042 7.43074 22.074 4.37102C23.5222 2.49773 24.1146 1.37375 23.9171 0.874204C23.7196 0.437102 22.6664 0.561988 22.6664 0.561988H19.0459C19.0459 0.561988 18.7826 0.499545 18.5851 0.624432C18.3877 0.749318 18.256 0.99909 18.256 0.99909C18.256 0.99909 17.6636 2.43528 16.9395 3.68415C15.3596 6.24432 14.7013 6.43165 14.438 6.24432C13.8456 5.9321 13.9773 4.80812 13.9773 3.99636C13.9773 1.49864 14.3722 0.437102 13.1873 0.187329C12.7924 0.124886 12.5291 0.0624432 11.4758 0C10.1593 0 9.10606 0 8.51362 0.312216C8.11865 0.499545 7.78952 0.936647 7.987 0.936647C8.25031 0.936647 8.77692 1.06153 9.04023 1.43619C9.43519 1.93574 9.36937 2.99727 9.36937 2.99727C9.36937 2.99727 9.56685 5.9321 8.84275 6.30676C8.38196 6.55653 7.72369 6.05699 6.2755 3.68415C5.5514 2.49773 4.95896 1.18642 4.95896 1.18642C4.95896 1.18642 4.95896 0.936647 4.76148 0.811761C4.49817 0.624431 4.23487 0.624432 4.23487 0.624432H0.811865C0.811865 0.624432 0.28525 0.624431 0.0877692 0.874204C-0.109712 1.06153 0.0877692 1.43619 0.0877692 1.43619C0.0877692 1.43619 2.78667 7.36829 5.81471 10.3656C8.57944 13.1131 11.7391 12.9257 11.7391 12.9257Z" fill="white"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</div>