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

		<div class="promotion" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC'];  ?>');" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>">


			<div class="promotion__content">
				<h2 class="block-title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?></h2>

				<div class="promotion__bottom">
					<img class="img-20" src="<?= CFile::GetPath($arItem['PROPERTIES']['skidka']['VALUE']); ?>" alt="" />
					<p class="promotion__text">
						<?= $arItem['PREVIEW_TEXT']; ?>
					</p>
				</div>
			</div>

		</div>
	<? endforeach; ?>
<?php endif; ?>