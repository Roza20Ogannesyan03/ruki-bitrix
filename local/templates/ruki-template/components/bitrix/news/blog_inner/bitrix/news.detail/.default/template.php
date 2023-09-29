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
// echo '<pre>';
// var_dump($arResult);
// echo '</pre>';

?>


<div class="container">

	<div class="static_content">
		<?php echo $arResult['DETAIL_TEXT'] ?>
	</div>


	<div class="seo-text-container">
		<h2 class="block-title">Seo-текст</h2>
		<p class="seo-text">
			Добро пожаловать в студию праздничного дизайна! Мы специализируемся на
			создании неповторимой атмосферы для вашего особого события. Независимо
			от того, свадьба, день рождения или корпоративное мероприятие, наша
			команда профессионалов воплощает ваши мечты в реальность. Мы создаем
			уникальные декорации, аранжировки и акценты, чтобы каждая деталь
			события стала запоминающейся историей. Придайте своему празднику
			волшебство с нами!"
		</p>
	</div>
</div>