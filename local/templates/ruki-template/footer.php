<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

use Bitrix\Main\Page\Asset;
use Bitrix\Landing\Assets;
use Bitrix\Main\Loader;
use Bitrix\Main\UI\Extension;

/** @var \CMain $APPLICATION */

?>



<? if (CSite::InDir('/contacts/')) : ?>

	<div class="locations">
		<div class="map" id="map"></div>
	</div>

	<script src="https://api-maps.yandex.ru/2.0-stable/?apikey=ваш API-ключ&?apikey=ваш API-ключ&load=package.standard&lang=ru-RU"></script>
	<script>
		window.addEventListener('DOMContentLoaded', () => {

			function init() {
				let map = new ymaps.Map("map", {
					center: [43.04545166274155, 44.67198985350388], // ваши данные
					zoom: 13,
				});

				let placemark = new ymaps.Placemark(
					[43.03158257448738, 44.68968499999997], {
						balloonContent: `
      <div class="balloon">
        <div class="balloon__address">ул. Ватутина, 51, Владикавказ</div>
      </div>
    `,
					}, {
						iconLayout: "default#image",
						iconImageHref: "<?php echo SITE_TEMPLATE_PATH ?>/assets/images/icon-gps-map.png",
						iconImageSize: [56, 56],
						iconImageOffset: [-25, -50],
					}
				);
				let placemark4 = new ymaps.Placemark(
					[43.05881357450824, 44.66508949999998], {
						balloonContent: `
      <div class="balloon">
        <div class="balloon__address">ул. Пожарского, 5, Владикавказ</div>
      </div>
    `,
					}, {
						iconLayout: "default#image",
						iconImageHref: "<?php echo SITE_TEMPLATE_PATH ?>/assets/images/icon-gps-map.png",
						iconImageSize: [56, 56],
						iconImageOffset: [-25, -50],
					}
				);
				let placemark2 = new ymaps.Placemark(
					[43.03309857449133, 44.68330699999999], {
						balloonContent: `
      <div class="balloon">
        <div class="balloon__address">ул. Джанаева, 37, Владикавказ</div>
      </div>
    `,
					}, {
						iconLayout: "default#image",
						iconImageHref: "<?php echo SITE_TEMPLATE_PATH ?>/assets/images/icon-gps-map.png",
						iconImageSize: [56, 56],
						iconImageOffset: [-25, -50],
					}
				);

				let placemark3 = new ymaps.Placemark(
					[43.04864857448196, 44.632740999999946], {
						balloonContent: `
      <div class="balloon">
        <div class="balloon__address">Владикавказская ул., 26, Владикавказ</div>
      </div>
    `,
					}, {
						iconLayout: "default#image",
						iconImageHref: "<?php echo SITE_TEMPLATE_PATH ?>/assets/images/icon-gps-map.png",
						iconImageSize: [56, 56],
						iconImageOffset: [-25, -50],
					}
				);
				map.controls.remove("geolocationControl"); // удаляем геолокацию
				map.controls.remove("searchControl"); // удаляем поиск
				map.controls.remove("trafficControl"); // удаляем контроль трафика
				map.controls.remove("typeSelector"); // удаляем тип
				map.controls.remove("fullscreenControl"); // удаляем кнопку перехода в полноэкранный режим
				map.controls.remove("zoomControl"); // удаляем контрол зуммирования
				map.controls.remove("rulerControl"); // удаляем контрол правил
				map.behaviors.disable(["scrollZoom"]); // отключаем скролл карты (опционально)
				map.geoObjects.add(placemark);
				map.geoObjects.add(placemark2);
				map.geoObjects.add(placemark3);
				map.geoObjects.add(placemark4);
			}

			ymaps.ready(init);
		})
	</script>



<? endif; ?>


<? if (CSite::InDir('/studio/')) : ?>
	<script src="https://api-maps.yandex.ru/2.0-stable/?apikey=ваш API-ключ&?apikey=ваш API-ключ&load=package.standard&lang=ru-RU"></script>
	<script>
		window.addEventListener('DOMContentLoaded', () => {
			document.querySelectorAll("#lightgallery").forEach((element) => {
				lightGallery(element, {
					plugins: [lgZoom, lgThumbnail],
					licenseKey: "your_license_key",
					speed: 500,
					// ... other settings
				});
			});

			function init() {
				let map = new ymaps.Map("map", {
					center: [43.04545166274155, 44.67198985350388], // ваши данные
					zoom: 13,
				});

				let placemark = new ymaps.Placemark(
					[43.03158257448738, 44.68968499999997], {
						balloonContent: `
      <div class="balloon">
        <div class="balloon__address">ул. Ватутина, 51, Владикавказ</div>
      </div>
    `,
					}, {
						iconLayout: "default#image",
						iconImageHref: "<?php echo SITE_TEMPLATE_PATH ?>/assets/images/icon-gps-map.png",
						iconImageSize: [56, 56],
						iconImageOffset: [-25, -50],
					}
				);
				let placemark4 = new ymaps.Placemark(
					[43.05881357450824, 44.66508949999998], {
						balloonContent: `
      <div class="balloon">
        <div class="balloon__address">ул. Пожарского, 5, Владикавказ</div>
      </div>
    `,
					}, {
						iconLayout: "default#image",
						iconImageHref: "<?php echo SITE_TEMPLATE_PATH ?>/assets/images/icon-gps-map.png",
						iconImageSize: [56, 56],
						iconImageOffset: [-25, -50],
					}
				);
				let placemark2 = new ymaps.Placemark(
					[43.03309857449133, 44.68330699999999], {
						balloonContent: `
      <div class="balloon">
        <div class="balloon__address">ул. Джанаева, 37, Владикавказ</div>
      </div>
    `,
					}, {
						iconLayout: "default#image",
						iconImageHref: "<?php echo SITE_TEMPLATE_PATH ?>/assets/images/icon-gps-map.png",
						iconImageSize: [56, 56],
						iconImageOffset: [-25, -50],
					}
				);

				let placemark3 = new ymaps.Placemark(
					[43.04864857448196, 44.632740999999946], {
						balloonContent: `
      <div class="balloon">
        <div class="balloon__address">Владикавказская ул., 26, Владикавказ</div>
      </div>
    `,
					}, {
						iconLayout: "default#image",
						iconImageHref: "<?php echo SITE_TEMPLATE_PATH ?>/assets/images/icon-gps-map.png",
						iconImageSize: [56, 56],
						iconImageOffset: [-25, -50],
					}
				);
				map.controls.remove("geolocationControl"); // удаляем геолокацию
				map.controls.remove("searchControl"); // удаляем поиск
				map.controls.remove("trafficControl"); // удаляем контроль трафика
				map.controls.remove("typeSelector"); // удаляем тип
				map.controls.remove("fullscreenControl"); // удаляем кнопку перехода в полноэкранный режим
				map.controls.remove("zoomControl"); // удаляем контрол зуммирования
				map.controls.remove("rulerControl"); // удаляем контрол правил
				map.behaviors.disable(["scrollZoom"]); // отключаем скролл карты (опционально)
				map.geoObjects.add(placemark);
				map.geoObjects.add(placemark2);
				map.geoObjects.add(placemark3);
				map.geoObjects.add(placemark4);
			}

			ymaps.ready(init);
		})
	</script>
<? endif; ?>

<? if ($APPLICATION->GetCurPage(false) !== '/') : ?>
	</div>
<? endif; ?>


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
				<a class="polit__link" href="/politika-konfidentsialnosti/">обработку персональных данных</a>
			</div>

			<div class="response"></div>

		</form>
	</div>
</div>

<div class="cookie" style="display: none;">
	<p class="cookie__text">
		Используя сайт сети магазинов «Руки», я даю согласие на обработку моих персональных данных с использованием сторонних сервисов и принимаю условия <a class="polit__link" href="/politika-konfidentsialnosti/"> Политики Конфиденциальности</a>
	</p>
	<div class="link-beige link-white cookie_btn">
		Хорошо
	</div>
</div>

<footer class="footer">
	<div class="container">
		<div class="footer__container">
			<div class="contacts">
				<div class="contacts__item ">
					<img class="contacts__icon" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/icon-gps.png" alt="" />
					<p class="contacts__text"><?php $APPLICATION->IncludeFile('/include/address.php', array(), array('MODE' => 'text'));
												?></p>
				</div>
				<div class="contacts__item">
					<img class="contacts__icon" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/email.png" alt="" />
					<a class="contacts__text" href="<?php
													$APPLICATION->IncludeFile('/include/email.php', array(), array('MODE' => 'text'));
													?>"><?php $APPLICATION->IncludeFile('/include/email.php', array(), array('MODE' => 'text'));
														?></a>
				</div>
				<div class="contacts__item">
					<img class="contacts__icon" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/phone.png" alt="" />
					<a class="contacts__phone" href="tel: <?php
															$APPLICATION->IncludeFile('/include/phone.php', array(), array('MODE' => 'text'));
															?>"><?php $APPLICATION->IncludeFile('/include/phone.php', array(), array('MODE' => 'text'));
																?></a>
				</div>
				<div class="link-beige feedback-btn">Обратная связь <img class="arrow-beige" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/studio-arrow.svg" alt="" /></div>
			</div>
			<div class="menu">

				<? $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"bottom_menu",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "N",
						"ROOT_MENU_TYPE" => "bottom",
						"USE_EXT" => "N"
					)
				); ?>

				<? $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"bottom_menu2",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "N",
						"ROOT_MENU_TYPE" => "bottom2",
						"USE_EXT" => "N"
					)
				); ?>
			</div>
			<div class="network">
				<p class="network__text">Мы в соцсетях и мессенджерах:</p>
				<div class="network__icons">
					<a href="https://instagram.com/ruki.vld?igshid=MWZjMTM2ODFkZg==" class="icon">
						<svg fill="#CAB090" width="30px" height="30px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
							<path d="M20.445 5h-8.891A6.559 6.559 0 0 0 5 11.554v8.891A6.559 6.559 0 0 0 11.554 27h8.891a6.56 6.56 0 0 0 6.554-6.555v-8.891A6.557 6.557 0 0 0 20.445 5zm4.342 15.445a4.343 4.343 0 0 1-4.342 4.342h-8.891a4.341 4.341 0 0 1-4.341-4.342v-8.891a4.34 4.34 0 0 1 4.341-4.341h8.891a4.342 4.342 0 0 1 4.341 4.341l.001 8.891z" />
							<path d="M16 10.312c-3.138 0-5.688 2.551-5.688 5.688s2.551 5.688 5.688 5.688 5.688-2.551 5.688-5.688-2.55-5.688-5.688-5.688zm0 9.163a3.475 3.475 0 1 1-.001-6.95 3.475 3.475 0 0 1 .001 6.95zM21.7 8.991a1.363 1.363 0 1 1-1.364 1.364c0-.752.51-1.364 1.364-1.364z" />
						</svg>
					</a>
					<a href="https://t.me/ruki_vld" class="icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.8026 6.30525L8.16622 11.6244C7.6775 11.9261 7.44622 12.522 7.60367 13.0732L8.53749 16.3543C8.61726 16.6341 8.86622 16.82 9.15266 16.82C9.16862 16.82 9.18473 16.8195 9.20089 16.8183C9.50711 16.796 9.74942 16.568 9.79015 16.264L10.033 14.4648C10.0657 14.2228 10.1823 13.9976 10.3611 13.8311L17.488 7.20634C17.7033 7.00664 17.7318 6.67963 17.5543 6.44573C17.3766 6.21162 17.0536 6.15108 16.8026 6.30525ZM9.79125 13.2186C9.47101 13.5167 9.26237 13.9195 9.20381 14.3528L9.08605 15.2256L8.40821 12.8438C8.35313 12.6508 8.43425 12.4422 8.60528 12.3366L14.9321 8.43997L9.79125 13.2186Z" fill="#CAB090" stroke="#CAB090" stroke-width="0.5" />
							<path d="M21.6577 2.83805C21.3879 2.60935 21.0156 2.54639 20.6858 2.67378L1.61851 10.0294C1.24089 10.175 0.998084 10.5306 1.00001 10.9352C1.00198 11.3402 1.24835 11.6937 1.62819 11.8361L6.08194 13.4983L7.81927 19.0855C7.91467 19.3927 8.15546 19.6313 8.46332 19.724C8.77101 19.8165 9.10331 19.7503 9.35169 19.5472L11.9413 17.4361C12.0657 17.3347 12.2433 17.3297 12.3731 17.424L17.044 20.8151C17.212 20.9372 17.4103 21.0001 17.6109 21.0001C17.7284 21.0001 17.8467 20.9785 17.9602 20.9346C18.2673 20.8159 18.4906 20.5527 18.5574 20.2307L21.9792 3.77125C22.0511 3.42467 21.9279 3.06711 21.6577 2.83805ZM21.1601 3.60124L17.7383 20.0606C17.7259 20.1201 17.6831 20.1448 17.6587 20.1543C17.6341 20.1638 17.5855 20.1744 17.5357 20.1382L12.8647 16.7469C12.6559 16.5953 12.4104 16.5201 12.1654 16.5201C11.898 16.5201 11.6311 16.6097 11.4129 16.7874L8.82265 18.8991C8.77655 18.9368 8.72868 18.9301 8.70432 18.9227C8.67979 18.9154 8.63603 18.8944 8.61823 18.8372L6.81995 13.0539C6.78152 12.9303 6.68801 12.8315 6.56677 12.7862L1.92128 11.0524C1.85172 11.0264 1.83691 10.9721 1.83671 10.9311C1.8365 10.8905 1.85077 10.8365 1.91968 10.8099L20.987 3.45437C20.9871 3.45433 20.9872 3.45429 20.9873 3.45425C21.0492 3.43033 21.0951 3.45781 21.1169 3.47627C21.1388 3.49493 21.1736 3.53595 21.1601 3.60124Z" fill="#CAB090" stroke="#CAB090" stroke-width="0.5" />
							<path d="M18.5336 11.6463C18.3078 11.5973 18.0851 11.7406 18.0361 11.9664L17.9725 12.2593C17.9235 12.485 18.0668 12.7078 18.2926 12.7568C18.3225 12.7633 18.3523 12.7664 18.3817 12.7664C18.5743 12.7664 18.7476 12.6326 18.7902 12.4368L18.8537 12.1439C18.9027 11.9181 18.7594 11.6954 18.5336 11.6463Z" fill="#CAB090" stroke="#CAB090" stroke-width="0.5" />
							<path d="M18.1139 13.5736C17.8878 13.5246 17.6653 13.6679 17.6163 13.8936L16.6541 18.3253C16.6051 18.5511 16.7484 18.7738 16.9742 18.8228C17.0041 18.8293 17.0339 18.8324 17.0633 18.8324C17.2559 18.8324 17.4292 18.6986 17.4718 18.5028L18.4339 14.0711C18.4829 13.8453 18.3396 13.6226 18.1139 13.5736Z" fill="#CAB090" stroke="#CAB090" stroke-width="0.5" />
						</svg>
					</a>
					<a href="" class="icon">
						<svg fill="#CAB090" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
							<title>whatsapp</title>
							<path d="M26.576 5.363c-2.69-2.69-6.406-4.354-10.511-4.354-8.209 0-14.865 6.655-14.865 14.865 0 2.732 0.737 5.291 2.022 7.491l-0.038-0.070-2.109 7.702 7.879-2.067c2.051 1.139 4.498 1.809 7.102 1.809h0.006c8.209-0.003 14.862-6.659 14.862-14.868 0-4.103-1.662-7.817-4.349-10.507l0 0zM16.062 28.228h-0.005c-0 0-0.001 0-0.001 0-2.319 0-4.489-0.64-6.342-1.753l0.056 0.031-0.451-0.267-4.675 1.227 1.247-4.559-0.294-0.467c-1.185-1.862-1.889-4.131-1.889-6.565 0-6.822 5.531-12.353 12.353-12.353s12.353 5.531 12.353 12.353c0 6.822-5.53 12.353-12.353 12.353h-0zM22.838 18.977c-0.371-0.186-2.197-1.083-2.537-1.208-0.341-0.124-0.589-0.185-0.837 0.187-0.246 0.371-0.958 1.207-1.175 1.455-0.216 0.249-0.434 0.279-0.805 0.094-1.15-0.466-2.138-1.087-2.997-1.852l0.010 0.009c-0.799-0.74-1.484-1.587-2.037-2.521l-0.028-0.052c-0.216-0.371-0.023-0.572 0.162-0.757 0.167-0.166 0.372-0.434 0.557-0.65 0.146-0.179 0.271-0.384 0.366-0.604l0.006-0.017c0.043-0.087 0.068-0.188 0.068-0.296 0-0.131-0.037-0.253-0.101-0.357l0.002 0.003c-0.094-0.186-0.836-2.014-1.145-2.758-0.302-0.724-0.609-0.625-0.836-0.637-0.216-0.010-0.464-0.012-0.712-0.012-0.395 0.010-0.746 0.188-0.988 0.463l-0.001 0.002c-0.802 0.761-1.3 1.834-1.3 3.023 0 0.026 0 0.053 0.001 0.079l-0-0.004c0.131 1.467 0.681 2.784 1.527 3.857l-0.012-0.015c1.604 2.379 3.742 4.282 6.251 5.564l0.094 0.043c0.548 0.248 1.25 0.513 1.968 0.74l0.149 0.041c0.442 0.14 0.951 0.221 1.479 0.221 0.303 0 0.601-0.027 0.889-0.078l-0.031 0.004c1.069-0.223 1.956-0.868 2.497-1.749l0.009-0.017c0.165-0.366 0.261-0.793 0.261-1.242 0-0.185-0.016-0.366-0.047-0.542l0.003 0.019c-0.092-0.155-0.34-0.247-0.712-0.434z"></path>
						</svg>

					</a>
				</div>
			</div>
		</div>
		<div class="footer__bottom">
			<a href="/politika-konfidentsialnosti/" class="footer__bottom_text">Политика конфиденциальности</a>
			<a href="https://abeta.ru/" class="footer__bottom_text">Разработка сайта - <span style="color: #000;">ABETA</span> </a>
		</div>
	</div>
</footer>
</div>
<!-- <script type="text/javascript">
	if (document.getElementById("lightgallery")) {
		lightGallery(document.getElementById("lightgallery"), {
			plugins: [lgZoom, lgThumbnail],
			licenseKey: "your_license_key",
			speed: 500,
			// ... other settings
		});
	}
</script> -->

<script src="<?php echo  SITE_TEMPLATE_PATH ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo  SITE_TEMPLATE_PATH ?>/assets/js/script.js"></script>
<script src="<?php echo  SITE_TEMPLATE_PATH ?>/assets/js/lg-thumbnail.umd.js"></script>
<script src="<?php echo  SITE_TEMPLATE_PATH ?>/assets/js/lg-zoom.umd.js"></script>
<script src="<?php echo  SITE_TEMPLATE_PATH ?>/assets/js/lightgallery.umd.js"></script>
<script src="<?php echo  SITE_TEMPLATE_PATH ?>/assets/js/lightgallery.min.js"></script>
<script src="<?php echo  SITE_TEMPLATE_PATH ?>/assets/js/sliders.js"></script>

<script src="https://www.google.com/recaptcha/api.js?render=6LdT4V0oAAAAAAr-EBoz1vTtzOQmfzPcr4gn13Wa"></script>

<script>
	window.addEventListener("load", () => {
		const form = document.getElementById("form_feedback");
		let mess = document.querySelector(".response");

		let isLoading = false;

		form.addEventListener("submit", (event) => {
			event.preventDefault();

			if (isLoading) {
				return;
			}

			isLoading = true;

			grecaptcha.ready(() => {
				grecaptcha
					.execute("6LdT4V0oAAAAAAr-EBoz1vTtzOQmfzPcr4gn13Wa", {
						action: "submit",
					})
					.then(async (token) => {
						const url = form.action;
						const formData = new FormData(form);
						formData.append("token", token);

						const response = await fetch(url, {
							body: formData,
							method: "POST",
							headers: {
								Accept: "text/html",
							},
						});
						isLoading = false;
					});
			});

			let err = "";

			let inputs = document.querySelectorAll('input, textarea');
			inputs.forEach(el => {
				if (el.value == "") {
					err = "Заполните все поля"
					el.classList.add('empty')
				}
				console.log(el.value);
			})

			if (err !== "Заполните все поля") {
				console.log(err)
				inputs.forEach(el => {
					el.value = ""
				})
				mess.innerHTML = "Ваше сообщение успешно отправлено!";
			} else {
				inputs.forEach(el => {
					mess.innerHTML = err
					if (el.classList.contains("empty")) {
						el.style.borderColor = "#da4c4c";
					}
				})
				mess.style.backgroundColor = "#cfb595"
			}
		});
	});
</script>
</body>

</html>