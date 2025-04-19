<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['menu']) : ?>
    <div class="header__col header__col--menu">
        <nav class="header__menu ">
            <ul class="header__menu-list" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
                <?php foreach ($arResult['menu'] as $key => $item) :?>
                    <li class="header__menu-item <?php if($item['items']):?>header__menu-item--parent header-fone-elem<?php endif;?>">
                        <div itemprop="name" class="header__menu-link">
                            <a itemprop="url" href="<?= $item['LINK'] ?>" <?php if($item['items']):?>class="click "<?php endif;?>><?= $item['TEXT'] ?></a>
                        </div>
                        <?php if($item['items']):?>
                            <div class="header__menu-list header__menu-list--2 header-fone-block">
                                <div class="header__menu-list-wr">
                                    <ul class="header__menu-ul verticalScroll">
                                        <?php foreach ($item['items'] as $key2 => $item2) :?>
                                            <li itemprop="name" class="header__menu-item ">
                                                <a itemprop="url" class="click header__menu-link " href="<?= $item2['LINK'] ?>"><?= $item2['TEXT'] ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif;?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
<?php endif;?>