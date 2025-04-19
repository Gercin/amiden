<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult) : ?>
    <div class="menu__wrap">
        <div class="menu__wrap-inner">
            <?php foreach ($arResult as $key => $item) :?>
                <div class="menu-col menu-col--links">
                    <div class="menuList ">
                        <?php foreach ($item as $key2 => $item2) :?>
                            <div class="menuList__link <?php if($key2 == 0):?>menuList__title<?php endif;?>">
                                <a <?php if($item2['LINK']):?>href="<?= $item2['LINK'] ?>"<?php endif;?>><?= $item2['TEXT'] ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif;?>
