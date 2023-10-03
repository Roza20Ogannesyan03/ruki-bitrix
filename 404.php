<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<a href="#" class="icon scroll-arrow">
	<img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/scroll-arrow.png" alt="" />
</a>
<div class="image-overlay page-404" style="background-image: url('<?php echo SITE_TEMPLATE_PATH ?>/assets/images/image-overlay.png')">
	<div class="container">
		<div class="text-container__404">
			<h3 class="text__404">
				Мы не можем найти запрашиваемую вами страницу, ошибка
			</h3>
			<p class="num__404">404</p>
			<a href="/" class="button__404">Вернуться на главную страницу</a>
		</div>
	</div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>


<!-- <?
		include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

		CHTTP::SetStatus("404 Not Found");
		@define("ERROR_404", "Y");

		require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

		$APPLICATION->SetTitle("404 Not Found");

		$APPLICATION->IncludeComponent(
			"bitrix:main.map",
			".default",
			array(
				"LEVEL"	=>	"3",
				"COL_NUM"	=>	"2",
				"SHOW_DESCRIPTION"	=>	"Y",
				"SET_TITLE"	=>	"Y",
				"CACHE_TIME"	=>	"36000000"
			)
		);

		require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?> -->