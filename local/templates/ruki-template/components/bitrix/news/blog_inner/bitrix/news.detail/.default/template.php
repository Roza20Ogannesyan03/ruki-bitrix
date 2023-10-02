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
$this->setFrameMode(true);
// echo '<pre>';
// var_dump($arResult);
// echo '</pre>';

?>


<div class="container">

	<div class="static_content">
		<?php echo $arResult['DETAIL_TEXT'] ?>
	</div>
	<div class="seo-text-container">

		<h2 class="block-title">
			<?php
			$APPLICATION->IncludeFile('/includes/index_seo_title.php', array(), array('MODE' => 'html'));

			?>

		</h2>

		<p class="seo-text">
			<?php
			$APPLICATION->IncludeFile('/includes/index_seo_text.php', array(), array('MODE' => 'html'));

			?>
		</p>
	</div>
</div>