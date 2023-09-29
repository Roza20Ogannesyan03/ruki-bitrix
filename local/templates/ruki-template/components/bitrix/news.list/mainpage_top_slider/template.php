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
	<div class="slider">
		<div class="swiper" id="slider">
			<div class="swiper-wrapper" id="wrapper">
				<!-- Slides -->
				<?php foreach ($arResult["ITEMS"] as $arItem) : ?>

					<!--if (!empty($arResult['PREVIEW_PICTURE']['SRC'])) : -->
					<div class="swiper-slide image-overlay" style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>')">
						<div class="container">
							<div class="slide__text">
								<span class="line"></span>
								<h1 class="slide__text_title">
									<?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?>
								</h1>
								<p class="slide__text_subtitle">
									<?= $arItem['PREVIEW_TEXT']; ?>
								</p>
							</div>
						</div>
					</div>

				<? endforeach; ?>
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
		</div>
		<div class="arrows">
			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev_sl">
				<img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/prev.svg" alt="" />
			</div>
			<div class="swiper-button-next_sl">
				<img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/next.svg" alt="" />
			</div>
		</div>
	</div>
<?php endif; ?>