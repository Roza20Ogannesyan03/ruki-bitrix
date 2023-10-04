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
$arr = [
	'янв',
	'фев',
	'март',
	'апр',
	'май',
	'июнь',
	'июль',
	'авг',
	'сен',
	'окт',
	'ноя',
	'дек'
];

$month = date('n') - 1;
?>

<?php if (!empty($arResult['ITEMS'])) : ?>



	<div class="blog">
		<h2 class="block-title">Блог</h2>
		<div class="blog__inner">
			<?php foreach ($arResult["ITEMS"] as $arItem) :
			?>


				<div class="blog__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img src="<?= isset($arItem['PREVIEW_PICTURE']['SRC']) ? $arItem['PREVIEW_PICTURE']['SRC'] :  SITE_TEMPLATE_PATH . "/assets/images/blog-default.jpg"; ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" class="blog__img" /></a>
					<div class="blog__calendar">
						<p class="blog__calendar_day"><?= date('d'); ?></p>
						<p class="blog__calendar_month"><?= $arr[$month]; ?></p>
					</div>
					<div class="blog__text">
						<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
							<h3 class="blog__inner_title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?></h3>
						</a>
						<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
							<p class="blog__item_text">
								<?= $arItem['PREVIEW_TEXT']; ?>
							</p>
						</a>
						<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="blog__button">Далее</a>
					</div>
				</div>
			<? endforeach; ?>

		</div>
		<a href="/blog/" class="blog__all link-beige">Читать все статьи <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/studio-arrow.svg" alt="" /></a>
	</div>

<?php endif; ?>