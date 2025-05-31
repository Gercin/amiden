<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Случайный товар");

$APPLICATION->IncludeComponent(
	"gercin:random_element",
	"",
	array(),
	false
);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
