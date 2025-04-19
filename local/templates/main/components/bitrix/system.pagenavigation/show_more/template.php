<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application,
    \Bitrix\Main\Web\Uri;

$this->setFrameMode(true);

$request = Application::getInstance()->getContext()->getRequest();

$types = $request->getPost('types');

if ($arResult['NavPageCount'] > 1) :
    if ($arResult['NavPageNomer'] + 1 <= $arResult['nEndPage']) :
        $plus = $arResult['NavPageNomer'] + 1;
        $url = $arResult['sUrlPathParams'] . 'PAGEN_' . $arResult['NavNum'] . '=' . $plus;
?>
        <div class="button-show-wrapper" data-type="show_more_click_block">
            <div class="button-show" data-type="show_more_click" data-url="<?= $url ?>" <?php if ($types) : ?> data-types="<?php echo htmlspecialchars(json_encode($types)); ?>" <?php endif; ?>>
                <div class="button-show__text">Показать еще</div>
                <div class="button-show__icon">
                    <svg class="button-show__svg" width="14" height="8" viewbox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.02806 1.27777H12.5556L7.27778 6.73466L2 1.27777H5.52749" stroke="#121212"></path>
                    </svg>
                </div>
            </div>
        </div>
<?php
    endif;
endif;
