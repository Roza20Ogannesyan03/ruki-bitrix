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


    <div class="bouquet__background">
        <div class="container">
            <div class="swiper" id="bouquet">
                <!-- Additional required wrapper -->
                <h2 class="block-title">Выбор покупателя</h2>
                <div class="swiper-wrapper bouquet__wrapper" id="lightgallery__bouquets">
                    <!-- Slides -->
                    <?php foreach ($arResult["ITEMS"] as $arItem) :

                    ?>
                        <a href="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" class="swiper-slide bouquet__slide" data-sub-html="<?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <img class="bouquet__img" src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" />
                            <h4 class="bouquet__title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?></h4>
                            <p class="bouquet__subtitle">
                                <?= $arItem['PREVIEW_TEXT']; ?>
                            </p>
                        </a>
                    <? endforeach; ?>
                </div>
                <!-- If we need navigation buttons -->
                <div class="arrows bouquet__arrows">
                    <div class="bouquet__swiper-button-prev">
                        <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/prev.svg" alt="" />
                    </div>
                    <div class="bouquet__swiper-button-next">
                        <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/next.svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php endif; ?>