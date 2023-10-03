<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="shortcut icon" href="#" />



	<?php
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/swiper-bundle.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/lg-thumbnail.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/lg-zoom.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/lightgallery.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/lightgallery-bundle.min.css');
	?>
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle() ?></title>

</head>

<body>
	<? $APPLICATION->ShowPanel(); ?>

	<header class="header">
		<div class="header__container container">
			<a href="/"><img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/logo.svg" alt="" class="logo" /></a>
			<? $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"top_menu",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(""),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "N",
					"ROOT_MENU_TYPE" => "top",
					"USE_EXT" => "N"
				)
			); ?>
			<a class="number" href="tel: <?php $APPLICATION->IncludeFile('/include/phone.php', array(), array('MODE' => 'text'));
											?>"><?php $APPLICATION->IncludeFile('/include/phone.php', array(), array('MODE' => 'text'));
																?></a>

			<div class="menu__burger-icon">
				<div class="hamb__field" id="hamb">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</div>
			</div>
			<div class="popup" id="popup"></div>
		</div>


	</header>
	<a href="#" class="icon scroll-arrow">
		<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g clip-path="url(#clip0_186_1621)">
				<path d="M9.49756 6.02673L1.0413 13.8773C0.764407 14.1345 0.764873 14.551 1.04274 14.8077C1.32056 15.0643 1.77062 15.0637 2.04774 14.8064L10.0007 7.42313L17.9536 14.8067C18.2307 15.0639 18.6805 15.0646 18.9584 14.808C19.0977 14.6793 19.1673 14.5106 19.1673 14.342C19.1673 14.1738 19.0981 14.0058 18.9598 13.8773L10.5038 6.02673C10.3706 5.90285 10.1895 5.83333 10.0007 5.83333C9.81191 5.83333 9.63094 5.90305 9.49756 6.02673Z" fill="#CAB090" />
			</g>
			<defs>
				<clipPath id="clip0_186_1621">
					<rect width="20" height="20" fill="white" transform="translate(0 20) rotate(-90)" />
				</clipPath>
			</defs>
		</svg></a>

	<? if ($APPLICATION->GetCurPage(false) !== '/' && !CSite::InDir('/sale/404.php')) : ?>
		<? $APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"breadcrumb",
			array(
				"PATH" => "",
				"SITE_ID" => "s1",
				"START_FROM" => "0"
			)
		); ?>
	<? endif; ?>

	<? if ($APPLICATION->GetCurPage(false) !== '/' && !CSite::InDir('/products/') && !CSite::InDir('404.php')) : ?>

		<div class="container main-text_block">
		<? endif; ?>