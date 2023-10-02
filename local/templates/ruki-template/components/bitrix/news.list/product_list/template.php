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
?>




<?php if (!empty($arResult['ITEMS'])) : ?>
	<div class="container">
		<div class="products">
			<?php foreach ($arResult["ITEMS"] as $arItem) : ?>

				<div class="swiper swiper-product" id="product1">
					<div class="swiper-wrapper product__wrapper">
						<?php foreach ($arItem["PROPERTIES"]['bouquets_images']['VALUE'] as $imgId) : ?>

							<div class="swiper-slide bouquet__slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
								<img class="bouquet__img" src="<?= CFile::GetPath($imgId); ?>" />
							</div>

						<? endforeach; ?>
					</div>
					<h4 class=" bouquet__title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?></h4>
					<p class="bouquet__subtitle">
						<?= $arItem['PREVIEW_TEXT']; ?>
					</p>
					<div class="swiper-pagination product__bullet"></div>
					<div class="arrows product__arrows">
						<div class="product1__swiper-button-prev">
							<img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/prev.svg" alt="" />
						</div>
						<div class="product1__swiper-button-next">
							<img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/next.svg" alt="" />
						</div>
					</div>
				</div>
			<? endforeach; ?>

		</div>
	</div>
	<div class="container">
		<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
			<br /><?= $arResult["NAV_STRING"] ?>
		<? endif; ?>
	</div>
<?php endif; ?>