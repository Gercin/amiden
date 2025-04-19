<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult):?>
    <div class="main-sec main-asset">
        <div class="main-sec__cont" data-aos="fade-right" data-aos-duration="1000">
            <div class="main-asset__list">
                <?php foreach($arResult as $key => $item):?>
                    <div class="main-asset__list-item">
                        <a href="<?= $item['LINK']?>">
                            <div class="main-asset__list-item-wr">
                                <div class="main-asset__list-item-in">
                                    <div class="main-asset__list-item-title main-sec__el-title"><?= $item['TEXT']?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
<?php endif;?>