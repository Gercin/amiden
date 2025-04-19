<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult) : ?>
    <div class="footer__col footer__col--menu">
        <ul class="footer__menu">
            <?php foreach ($arResult as $key => $item):?>
                <li class="footer__menu-item"><a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif;?>