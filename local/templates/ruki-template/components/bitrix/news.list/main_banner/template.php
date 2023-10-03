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
		$img = CFile::GetPath($arItem['PROPERTIES']['skidka']['VALUE']);
	?>

		<div class="promotion" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC'];  ?>');" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>">


			<div class="promotion__content">
				<div class="block-title"><?= isset($arItem["PROPERTIES"]['offer']['VALUE']) ? $arItem["PROPERTIES"]['offer']['VALUE']  : ''; ?></div>

				<div class="promotion__bottom">
					<img class="img-20" src="<?= isset($img) ? $img : ''; ?>" onerror="this.style.display='none'" />
					<p class="promotion__text">
						<?= $arItem['PREVIEW_TEXT']; ?>
					</p>
				</div>
			</div>

		</div>
	<? endforeach; ?>
<?php endif; ?>