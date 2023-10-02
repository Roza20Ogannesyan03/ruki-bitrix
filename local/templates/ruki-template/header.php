<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="shortcut icon" href="#" />



	<?php
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/swiper-bundle.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/lg-thumbnail.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/lg-zoom.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/lightgallery.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/lightgallery-bundle.min.css');
	?>
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle() ?></title>

</head>

<body>
	<? $APPLICATION->ShowPanel(); ?>

	<header class="header">
		<div class="header__container container">
			<a href="/"><img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/logo.svg" alt="" class="logo" /></a>
			<? $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"top_menu",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(""),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "N",
					"ROOT_MENU_TYPE" => "top",
					"USE_EXT" => "N"
				)
			); ?>
			<a class="number" href="tel:+7(928)-07-07-557">+7(928)-07-07-557</a>

			<div class="menu__burger-icon">
				<div class="hamb__field" id="hamb">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</div>
			</div>
			<div class="popup" id="popup"></div>
		</div>
		<div id="modal-callback" class="modal">
			<div class="modal-content">
				<div class="close">
					<div class="close__img">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.94367 27.9954C4.70304 27.9954 4.46004 27.9034 4.27602 27.7194C3.90799 27.3514 3.90799 26.7546 4.27602 26.3842L26.3863 4.27612C26.7544 3.90812 27.3536 3.90812 27.7216 4.27612C28.0897 4.64412 28.0897 5.24093 27.7216 5.61129L5.60896 27.7218C5.42495 27.9058 5.18431 27.9978 4.94132 27.9978L4.94367 27.9954Z" fill="#DDDDDD" />
							<path d="M27.054 27.9952C26.8133 27.9952 26.5703 27.9032 26.3863 27.7192L4.27602 5.60872C3.90799 5.24073 3.90799 4.64391 4.27602 4.27356C4.64406 3.90556 5.24329 3.90556 5.61132 4.27356L27.724 26.384C28.092 26.752 28.092 27.3489 27.724 27.7192C27.54 27.9032 27.2993 27.9952 27.0563 27.9952H27.054Z" fill="#DDDDDD" />
						</svg>
					</div>
				</div>
				<h1 class="modal__title">Форма обратной связи</h1>
				<p class="modal__subtitle">
					Здесь Вы можете отправить сообщение в адрес  администрации сайта. Мы
					внимательно ознакомимся со всеми Вашими пожеланиями и предложениями
				</p>
				<form id="form_feedback" action="/ajax/form.php" method="post" class="modal__form" enctype="multipart/form-data">
					<label for="name">Ваше имя</label>
					<input class="inputs" type="text" name="name" id="name" placeholder="Введите имя" />

					<label for="email">Ваш e-mail</label>
					<input class="inputs" type="email" name="email" id="email" placeholder="Введите e-mail" title="xxx@xxx.xxx" />
					<p class="hint">Мы отправим ответ на обращение по данному адресу</p>

					<label for="number">Ваш телефон</label>
					<input class="inputs" type="tel" name="number" id="number" placeholder="Введите телефон" title="+7 (___) ___-__-__" />
					<p class="hint">
						В случае необходимости, мы свяжемся с Вами по этому номеру
					</p>
					<label for="message">Текст сообщения</label>
					<textarea class="inputs message" name="message" id="message" placeholder="Введите сообщение..."></textarea>



					<button class="modal__button">
						<p class="link-white">Отправить</p>
					</button>

					<div class="polit">
						<p>Нажимая на кнопку "Отправить", вы соглашаетесь на</p>
						<a class="polit__link" href="/politika/">обработку персональных данных</a>
					</div>

					<div class="response"></div>

				</form>
			</div>
		</div>

	</header>
	<a href="#" class="icon scroll-arrow">
		<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g clip-path="url(#clip0_186_1621)">
				<path d="M9.49756 6.02673L1.0413 13.8773C0.764407 14.1345 0.764873 14.551 1.04274 14.8077C1.32056 15.0643 1.77062 15.0637 2.04774 14.8064L10.0007 7.42313L17.9536 14.8067C18.2307 15.0639 18.6805 15.0646 18.9584 14.808C19.0977 14.6793 19.1673 14.5106 19.1673 14.342C19.1673 14.1738 19.0981 14.0058 18.9598 13.8773L10.5038 6.02673C10.3706 5.90285 10.1895 5.83333 10.0007 5.83333C9.81191 5.83333 9.63094 5.90305 9.49756 6.02673Z" fill="#CAB090" />
			</g>
			<defs>
				<clipPath id="clip0_186_1621">
					<rect width="20" height="20" fill="white" transform="translate(0 20) rotate(-90)" />
				</clipPath>
			</defs>
		</svg></a>