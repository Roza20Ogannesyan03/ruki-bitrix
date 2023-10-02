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

<div class="cookie" style="display: none;">
	<p class="cookie__text">
		Используя сайт сети магазинов «Руки», я даю согласие на обработку моих персональных данных с использованием сторонних сервисов и принимаю условия Политики Конфиденциальности
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
					<p class="contacts__text">г. Владикавказ, ул. Джанаева, д. 37</p>
				</div>
				<div class="contacts__item">
					<img class="contacts__icon" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/email.png" alt="" />
					<a class="contacts__text" href="mailto:ruki-design-studio@yandex.ru">ruki-design-studio@yandex.ru</a>
				</div>
				<div class="contacts__item">
					<img class="contacts__icon" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/phone.png" alt="" />
					<p class="contacts__phone">+7(928)07-07-557</p>
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
					<div class="icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M21.4489 17.9997H18.7487C18.3334 18.0007 17.9409 17.8004 17.6854 17.4574L15.0529 13.9395C14.9347 13.7814 14.734 13.7189 14.5525 13.7842C14.3712 13.8492 14.2491 14.0274 14.2485 14.2282V15.6425C14.2485 16.9448 13.039 17.9997 11.5483 17.9997C10.9656 18.0052 10.3936 17.8355 9.90013 17.5106C6.11988 14.9766 3.55473 11.7769 1.32725 6.81522C1.13097 6.3774 1.16195 5.86484 1.40932 5.45637C1.65669 5.04791 2.08617 4.80034 2.54794 4.79982H5.24808C5.7883 4.79844 6.27727 5.13457 6.49118 5.65422L6.79492 6.39674C7.25389 7.51216 7.87009 8.54921 8.62324 9.47283C8.6478 9.50045 8.68273 9.51565 8.71883 9.51409C8.75195 9.51737 8.78508 9.50581 8.80963 9.48215C8.83435 9.45868 8.84836 9.42518 8.8482 9.39031V7.54583C8.23051 7.31466 7.86103 6.6519 7.97194 5.97481C8.08285 5.29772 8.64236 4.80207 9.29827 4.79982H12.8984C13.644 4.79982 14.2485 5.43307 14.2485 6.21409V9.51409C14.2488 9.72454 14.3823 9.90927 14.5756 9.96675C14.7689 10.0242 14.9751 9.94051 15.081 9.76149L17.5954 5.47743C17.8392 5.05464 18.2772 4.79723 18.7487 4.79982H21.4489C21.9477 4.8 22.4057 5.08848 22.6401 5.54977C22.8744 6.01106 22.8467 6.57024 22.5682 7.00374L19.7331 11.1227C19.6186 11.288 19.6186 11.5115 19.7331 11.6767L22.5458 15.7604C22.8411 16.1913 22.8815 16.7591 22.6503 17.2311C22.4191 17.7031 21.9551 17.9997 21.4489 17.9997ZM14.6985 12.8139C15.1138 12.8131 15.5062 13.0132 15.7617 13.3562L18.3942 16.8741C18.4793 16.9889 18.61 17.0564 18.7487 17.0567H21.4489C21.6183 17.0574 21.7737 16.9581 21.8508 16.8002C21.9281 16.642 21.9139 16.4521 21.8144 16.3083L19.0019 12.2247C18.6611 11.7304 18.6611 11.0632 19.0019 10.5689L21.8314 6.46165C21.8759 6.38742 21.8993 6.30162 21.8988 6.21409C21.8988 5.95375 21.6974 5.74261 21.4489 5.74261H18.7487C18.5927 5.74278 18.448 5.82755 18.3662 5.96652L15.8517 10.2506C15.5369 10.7923 14.9162 11.0483 14.3333 10.8767C13.7504 10.7053 13.348 10.1482 13.3485 9.51409V6.21409C13.3485 5.95375 13.1469 5.74261 12.8984 5.74261H9.29827C9.04958 5.74261 8.8482 5.95375 8.8482 6.21409C8.8482 6.47443 9.04958 6.68557 9.29827 6.68557H9.74818V9.39031C9.74308 9.83762 9.47494 10.2352 9.07398 10.3897C8.67318 10.5441 8.22293 10.423 7.94244 10.0857C7.13177 9.09113 6.46795 7.97484 5.9737 6.77396L5.6642 6.03143C5.59383 5.85603 5.42969 5.74209 5.24808 5.74261H2.54794C2.39435 5.74347 2.25179 5.82634 2.16972 5.96238C2.08765 6.09842 2.0776 6.26881 2.14286 6.41452C4.31991 11.2641 6.71054 14.2518 10.3894 16.7209C10.738 16.9445 11.1396 17.061 11.5483 17.0567C12.5383 17.0567 13.3485 16.4204 13.3485 15.6425V14.2282C13.3485 13.4472 13.9528 12.8139 14.6985 12.8139Z" fill="#CAB090" stroke="#CAB090" stroke-width="0.5" />
						</svg>
					</div>
					<div class="icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.8026 6.30525L8.16622 11.6244C7.6775 11.9261 7.44622 12.522 7.60367 13.0732L8.53749 16.3543C8.61726 16.6341 8.86622 16.82 9.15266 16.82C9.16862 16.82 9.18473 16.8195 9.20089 16.8183C9.50711 16.796 9.74942 16.568 9.79015 16.264L10.033 14.4648C10.0657 14.2228 10.1823 13.9976 10.3611 13.8311L17.488 7.20634C17.7033 7.00664 17.7318 6.67963 17.5543 6.44573C17.3766 6.21162 17.0536 6.15108 16.8026 6.30525ZM9.79125 13.2186C9.47101 13.5167 9.26237 13.9195 9.20381 14.3528L9.08605 15.2256L8.40821 12.8438C8.35313 12.6508 8.43425 12.4422 8.60528 12.3366L14.9321 8.43997L9.79125 13.2186Z" fill="#CAB090" stroke="#CAB090" stroke-width="0.5" />
							<path d="M21.6577 2.83805C21.3879 2.60935 21.0156 2.54639 20.6858 2.67378L1.61851 10.0294C1.24089 10.175 0.998084 10.5306 1.00001 10.9352C1.00198 11.3402 1.24835 11.6937 1.62819 11.8361L6.08194 13.4983L7.81927 19.0855C7.91467 19.3927 8.15546 19.6313 8.46332 19.724C8.77101 19.8165 9.10331 19.7503 9.35169 19.5472L11.9413 17.4361C12.0657 17.3347 12.2433 17.3297 12.3731 17.424L17.044 20.8151C17.212 20.9372 17.4103 21.0001 17.6109 21.0001C17.7284 21.0001 17.8467 20.9785 17.9602 20.9346C18.2673 20.8159 18.4906 20.5527 18.5574 20.2307L21.9792 3.77125C22.0511 3.42467 21.9279 3.06711 21.6577 2.83805ZM21.1601 3.60124L17.7383 20.0606C17.7259 20.1201 17.6831 20.1448 17.6587 20.1543C17.6341 20.1638 17.5855 20.1744 17.5357 20.1382L12.8647 16.7469C12.6559 16.5953 12.4104 16.5201 12.1654 16.5201C11.898 16.5201 11.6311 16.6097 11.4129 16.7874L8.82265 18.8991C8.77655 18.9368 8.72868 18.9301 8.70432 18.9227C8.67979 18.9154 8.63603 18.8944 8.61823 18.8372L6.81995 13.0539C6.78152 12.9303 6.68801 12.8315 6.56677 12.7862L1.92128 11.0524C1.85172 11.0264 1.83691 10.9721 1.83671 10.9311C1.8365 10.8905 1.85077 10.8365 1.91968 10.8099L20.987 3.45437C20.9871 3.45433 20.9872 3.45429 20.9873 3.45425C21.0492 3.43033 21.0951 3.45781 21.1169 3.47627C21.1388 3.49493 21.1736 3.53595 21.1601 3.60124Z" fill="#CAB090" stroke="#CAB090" stroke-width="0.5" />
							<path d="M18.5336 11.6463C18.3078 11.5973 18.0851 11.7406 18.0361 11.9664L17.9725 12.2593C17.9235 12.485 18.0668 12.7078 18.2926 12.7568C18.3225 12.7633 18.3523 12.7664 18.3817 12.7664C18.5743 12.7664 18.7476 12.6326 18.7902 12.4368L18.8537 12.1439C18.9027 11.9181 18.7594 11.6954 18.5336 11.6463Z" fill="#CAB090" stroke="#CAB090" stroke-width="0.5" />
							<path d="M18.1139 13.5736C17.8878 13.5246 17.6653 13.6679 17.6163 13.8936L16.6541 18.3253C16.6051 18.5511 16.7484 18.7738 16.9742 18.8228C17.0041 18.8293 17.0339 18.8324 17.0633 18.8324C17.2559 18.8324 17.4292 18.6986 17.4718 18.5028L18.4339 14.0711C18.4829 13.8453 18.3396 13.6226 18.1139 13.5736Z" fill="#CAB090" stroke="#CAB090" stroke-width="0.5" />
						</svg>
					</div>
					<div class="icon">
						<svg fill="#CAB090" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
							<title>whatsapp</title>
							<path d="M26.576 5.363c-2.69-2.69-6.406-4.354-10.511-4.354-8.209 0-14.865 6.655-14.865 14.865 0 2.732 0.737 5.291 2.022 7.491l-0.038-0.070-2.109 7.702 7.879-2.067c2.051 1.139 4.498 1.809 7.102 1.809h0.006c8.209-0.003 14.862-6.659 14.862-14.868 0-4.103-1.662-7.817-4.349-10.507l0 0zM16.062 28.228h-0.005c-0 0-0.001 0-0.001 0-2.319 0-4.489-0.64-6.342-1.753l0.056 0.031-0.451-0.267-4.675 1.227 1.247-4.559-0.294-0.467c-1.185-1.862-1.889-4.131-1.889-6.565 0-6.822 5.531-12.353 12.353-12.353s12.353 5.531 12.353 12.353c0 6.822-5.53 12.353-12.353 12.353h-0zM22.838 18.977c-0.371-0.186-2.197-1.083-2.537-1.208-0.341-0.124-0.589-0.185-0.837 0.187-0.246 0.371-0.958 1.207-1.175 1.455-0.216 0.249-0.434 0.279-0.805 0.094-1.15-0.466-2.138-1.087-2.997-1.852l0.010 0.009c-0.799-0.74-1.484-1.587-2.037-2.521l-0.028-0.052c-0.216-0.371-0.023-0.572 0.162-0.757 0.167-0.166 0.372-0.434 0.557-0.65 0.146-0.179 0.271-0.384 0.366-0.604l0.006-0.017c0.043-0.087 0.068-0.188 0.068-0.296 0-0.131-0.037-0.253-0.101-0.357l0.002 0.003c-0.094-0.186-0.836-2.014-1.145-2.758-0.302-0.724-0.609-0.625-0.836-0.637-0.216-0.010-0.464-0.012-0.712-0.012-0.395 0.010-0.746 0.188-0.988 0.463l-0.001 0.002c-0.802 0.761-1.3 1.834-1.3 3.023 0 0.026 0 0.053 0.001 0.079l-0-0.004c0.131 1.467 0.681 2.784 1.527 3.857l-0.012-0.015c1.604 2.379 3.742 4.282 6.251 5.564l0.094 0.043c0.548 0.248 1.25 0.513 1.968 0.74l0.149 0.041c0.442 0.14 0.951 0.221 1.479 0.221 0.303 0 0.601-0.027 0.889-0.078l-0.031 0.004c1.069-0.223 1.956-0.868 2.497-1.749l0.009-0.017c0.165-0.366 0.261-0.793 0.261-1.242 0-0.185-0.016-0.366-0.047-0.542l0.003 0.019c-0.092-0.155-0.34-0.247-0.712-0.434z"></path>
						</svg>

					</div>
				</div>
			</div>
		</div>
		<div class="footer__bottom">
			<a href="" class="footer__bottom_text">Политика конфиденциальности</a>
			<a href="" class="footer__bottom_text">Разработка сайта</a>
		</div>
	</div>
</footer>

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