<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

if (empty($arResult))
	return "";

$res = '<div class="breadcrumbs-container">
	            <ul class="breadcrumbs">';

$elCount = count($arResult);

foreach ($arResult as $index => $item) {


	$link = (!empty($item['LINK'])) && $index < ($elCount - 1) ? $item['LINK'] : '#';
	$title = $item['TITLE'] ?? '';
	$res .= '<li class="breadcrumbs__item">
	               <a href = "' . $link . '">' . $title . '</a> <img class="breadcrumbs__square" src = "' .  SITE_TEMPLATE_PATH . '/assets/images/square.svg"/>
	         </li>';
}

$res .= '   </ul>
<h1 class="breadcrumbs__title">' . $arResult[count($arResult) - 1]['TITLE'] . '</h1>
		  </div>';
return $res;
