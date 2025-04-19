<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
	return "";

$strReturn = '';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $content = $index + 2;
	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		$strReturn .= '
            <div class="breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" id="bx_breadcrumb_0">
                <a href="' . $arResult[$index]["LINK"] . '" title="Главная" itemprop="item">
                    <span itemprop="name">' . $title . '</span>
                </a>
                <meta itemprop="position" content="' . $content . '">
            </div>';
	} else {
		$strReturn .= '
            <div class="breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <span itemprop="name">' . $title . '</span>
                <meta itemprop="position" content="' . $content . '">
            </div>';
	}
}

return $strReturn;
