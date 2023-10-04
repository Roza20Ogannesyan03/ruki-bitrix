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
					<div class="swiper-slide image-overlay" style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>')" id=" <?= $this->GetEditAreaId($arItem['ID']); ?>">
						<div class="container">
							<div class="slide__text">
								<span class="line"></span>
								<div class="slide__text_title">
									<?= $arItem['PREVIEW_TEXT']; ?>

								</div>
								<p class="slide__text_subtitle">
									<?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?>
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
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M5.79226 11.3414L16.893 0.2714C17.2567 -0.0910828 17.8455 -0.0904735 18.2086 0.273275C18.5714 0.636977 18.5705 1.22615 18.2067 1.58891L7.76677 12L18.2071 22.4111C18.5708 22.7739 18.5717 23.3627 18.209 23.7265C18.027 23.9088 17.7885 24 17.5501 24C17.3122 24 17.0747 23.9094 16.893 23.7284L5.79226 12.6586C5.61709 12.4844 5.5188 12.2472 5.5188 12C5.5188 11.7529 5.61737 11.516 5.79226 11.3414Z" fill="#2F2F37" />
				</svg>
			</div>
			<div class="swiper-button-next_sl">

				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.2077 11.3414L7.10703 0.2714C6.74333 -0.0910828 6.15449 -0.0904735 5.79139 0.273275C5.42858 0.636977 5.42952 1.22615 5.79327 1.58891L16.2332 12L5.79289 22.4111C5.42919 22.7739 5.42826 23.3627 5.79102 23.7265C5.97303 23.9088 6.21149 24 6.44994 24C6.68778 24 6.9253 23.9094 7.10698 23.7284L18.2077 12.6586C18.3829 12.4844 18.4812 12.2472 18.4812 12C18.4812 11.7529 18.3826 11.516 18.2077 11.3414Z" fill="#2F2F37" />
				</svg>

			</div>
		</div>
	</div>
<?php endif; ?>