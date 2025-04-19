<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult['ITEMS']):?>
    <div class="doctor-list">
        <div class="doctor-list__wr">
            <?php foreach ($arResult['ITEMS'] as $key => $item): ?>
                <div class="doctor-list__item">
                    <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="doctor-list__link">
                        <div class="doctor-list__img">
                            <?
                            $resizedImageUrl = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'], array('width' => 524, 'height' => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];
                            $resizedImageUrl1560 = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'], array('width' => 324, 'height' => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];
                            $resizedImageUrl991 = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'], array('width' => 224, 'height' => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];
                            $resizedImageUrl768 = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'], array('width' => 751, 'height' => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];
                            $resizedImageUrl340 = CFile::ResizeImageGet($item['PREVIEW_PICTURE']['ID'], array('width' => 340, 'height' => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];
                            ?>
                            <picture>
                                <source media="(max-width: 1560px)" srcset="<?= $resizedImageUrl1560 ?>"/>
                                <source media="(max-width: 991px)" srcset="<?= $resizedImageUrl991 ?>"/>
                                <source media="(max-width: 768px)" srcset="<?= $resizedImageUrl768 ?>"/>
                                <source media="(max-width: 340px)" srcset="<?= $resizedImageUrl340 ?>"/>
                                <img alt="" src="<?= $resizedImageUrl ?>">
                            </picture>
                        </div>
                        <?php if ($item['NAME']): ?>
                            <div class="doctor-list__name"><?= $item['NAME'] ?></div>
                        <?php endif; ?>
                        <?php if ($item['PROPERTIES']['position']['VALUE']): ?>
                            <span class="doctor-list__type"><?= $item['PROPERTIES']['position']['VALUE'] ?></span>
                        <?php endif; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php if ($arResult['NAV_STRING']) {
        echo $arResult['NAV_STRING'];
    }
endif; ?>