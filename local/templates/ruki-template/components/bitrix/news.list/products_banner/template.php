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
	<?php foreach ($arResult["ITEMS"] as $arItem) :
	?>

		<div class="promotion promotion-products" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC'];  ?>');" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>">
			<div class="promotion__content">
				<h2 class="block-title"><?= $arItem["PROPERTIES"]['offer_products']['VALUE']; ?></h2>
				<div class="promotion__bottom">
					<div class="promotion-products__img_cont_wrap">
						<div class="promotion-products__img_cont">
							<img class="promotion-products__img" src="<?= CFile::GetPath($arItem['PROPERTIES']['products_skidka']['VALUE']); ?>" alt="" />
						</div>
					</div>
					<div class="promotion__text_cont">
						<p class="promotion__text">
							<?= $arItem['PREVIEW_TEXT']; ?>
						</p>
						<a href="" class="link-beige link-green">Перейти на сайт </a>
					</div>
				</div>
			</div>
		</div>


	<? endforeach; ?>
<?php endif; ?>