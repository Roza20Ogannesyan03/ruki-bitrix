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


    <div class="choice">
        <div class="block-title">Почему выбирают нас?</div>
        <?php foreach ($arResult["ITEMS"] as $arItem) : ?>

            <div class="choice__content_item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?> " alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" />
                <div class="item__text">
                    <p class="choice__title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?></p>
                    <p class="choice__subtitle">
                        <?= $arItem['PREVIEW_TEXT']; ?>
                    </p>
                </div>
            </div>

        <? endforeach; ?>
    </div>



<?php endif; ?>