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
	<div class="studios">
		<?php foreach ($arResult["ITEMS"] as $arItem) :
		?>

			<div class="studio__item">
				<div class="studio__img_container">

					<div class="studio__item_images" id="lightgallery">
						<!-- 
						<div class="studio__images_left">
							<a href="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>">
								<img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="" class="studio__images_left1" />
							</a>
						</div> -->
						<?php foreach ($arItem["PROPERTIES"]['studio_images']['VALUE'] as $imgId) : ?>
							<a href="<?= CFile::GetPath($imgId); ?>">
								<img src="<?= CFile::GetPath($imgId); ?>" alt="" class="studio__images_right2" />

							</a>
						<? endforeach;
						?>
					</div>
					<div class="studio__search_container">
						<img class="studio__img_search" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/search.svg" alt="" />
					</div>
				</div>
				<div class="studio__item_content">
					<h3 class="studio__item_title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?></h3>
					<div class="studio__item_contacts">
						<p class="studio__item_title">Адреса магазина:</p>
						<p class="studio__item_text"><?= $arItem["PROPERTIES"]['address']['VALUE'] ?></p>
					</div>
					<div class="studio__item_contacts">
						<p class="studio__item_title">Телефон:</p>
						<p class="studio__item_text"><?= $arItem["PROPERTIES"]['phone']['VALUE'] ?></p>
					</div>
					<div class="studio__item_contacts">
						<p class="studio__item_title">Время работы:</p>
						<p class="studio__item_text">
							<?= $arItem["PROPERTIES"]['time']['VALUE'] ?>
						</p>
					</div>
				</div>
			</div>
		<? endforeach;
		$i++; ?>
	</div>



<?php endif; ?>