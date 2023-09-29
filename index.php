<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle(""); ?><a href="#" class="icon scroll-arrow">
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
<div class="cookie" style="display: none;">
	<p class="cookie__text">
		Используя сайт сети магазинов «Руки», я даю согласие на обработку моих персональных данных с использованием сторонних сервисов и принимаю условия Политики Конфиденциальности
	</p>
	<div class="link-beige link-white cookie_btn">
		Хорошо
	</div>
</div>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"mainpage_top_slider",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_TEXT", 2 => "PREVIEW_PICTURE", 3 => "",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "slider",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0 => "", 1 => "",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
); ?>
<div class="studio">
	<div class="studio__img-container">
		<? $APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			array(
				"AREA_FILE_SHOW" => "page",
				"AREA_FILE_SUFFIX" => "studio_image"
			)
		); ?>
	</div>
	<div class="studio__right">
		<div class="studio__text-wrapper">
			<h2 class="block-title">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "page",
						"AREA_FILE_SUFFIX" => "studio_title"
					)
				); ?> </h2>
			<p class="studio__text">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "page",
						"AREA_FILE_SUFFIX" => "studio_text"
					)
				); ?>
			</p>
			<a href="" class="link-beige">Подробнее <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/studio-arrow.svg" class="arrow-beige" alt=""></a>
		</div>
	</div>
</div><? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"main_banner",
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
				"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"AJAX_MODE" => "N",	// Включить режим AJAX
				"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
				"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
				"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
				"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_TYPE" => "N",	// Тип кеширования
				"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
				"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
				"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
				"DISPLAY_DATE" => "N",	// Выводить дату элемента
				"DISPLAY_NAME" => "Y",	// Выводить название элемента
				"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
				"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
				"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
				"FIELD_CODE" => array(	// Поля
					0 => "CODE",
					1 => "NAME",
					2 => "PREVIEW_TEXT",
					3 => "PREVIEW_PICTURE",
					4 => "",
				),
				"FILTER_NAME" => "",	// Фильтр
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
				"IBLOCK_ID" => "12",	// Код информационного блока
				"IBLOCK_TYPE" => "slider",	// Тип информационного блока (используется только для проверки)
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
				"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
				"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
				"NEWS_COUNT" => "1",	// Количество новостей на странице
				"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
				"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
				"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
				"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
				"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
				"PAGER_TITLE" => "Новости",	// Название категорий
				"PARENT_SECTION" => "",	// ID раздела
				"PARENT_SECTION_CODE" => "",	// Код раздела
				"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
				"PROPERTY_CODE" => array(	// Свойства
					0 => "",
					1 => "skidka",
					2 => "",
				),
				"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
				"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
				"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
				"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
				"SET_STATUS_404" => "N",	// Устанавливать статус 404
				"SET_TITLE" => "N",	// Устанавливать заголовок страницы
				"SHOW_404" => "N",	// Показ специальной страницы
				"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
				"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
				"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
				"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
				"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
			),
			false
		); ?>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider_bouquets",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "product_list",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0 => "CODE", 1 => "NAME", 2 => "PREVIEW_TEXT", 3 => "",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => getIdBlock("product_bouquets"),
		"IBLOCK_TYPE" => "products",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "navi",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0 => "", 1 => "bouquets_images", 2 => "",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
); ?><br>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main_choice",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_TEXT", 2 => "PREVIEW_PICTURE", 3 => "",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => getIdBlock('main_choice'),
		"IBLOCK_TYPE" => "slider",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0 => "", 1 => "",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
); ?> <? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"blog_list",
			array(
				"ADD_ELEMENT_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "Y",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"BROWSER_TITLE" => "-",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "N",
				"CHECK_DATES" => "Y",
				"DETAIL_ACTIVE_DATE_FORMAT" => "j M Y",
				"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
				"DETAIL_DISPLAY_TOP_PAGER" => "N",
				"DETAIL_FIELD_CODE" => array(0 => "", 1 => "PREVIEW_PICTURE", 2 => "",),
				"DETAIL_PAGER_SHOW_ALL" => "N",
				"DETAIL_PAGER_TEMPLATE" => "",
				"DETAIL_PAGER_TITLE" => "Страница",
				"DETAIL_PROPERTY_CODE" => array(0 => "", 1 => "",),
				"DETAIL_SET_CANONICAL_URL" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "11",
				"IBLOCK_TYPE" => "blog",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"LIST_ACTIVE_DATE_FORMAT" => "j M Y",
				"LIST_FIELD_CODE" => array(0 => "CODE", 1 => "NAME", 2 => "PREVIEW_TEXT", 3 => "PREVIEW_PICTURE", 4 => "",),
				"LIST_PROPERTY_CODE" => array(0 => "", 1 => "",),
				"MESSAGE_404" => "",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"NEWS_COUNT" => "10",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PREVIEW_TRUNCATE_LEN" => "",
				"SEF_FOLDER" => "/blog/",
				"SEF_MODE" => "Y",
				"SEF_URL_TEMPLATES" => array("detail" => "#ELEMENT_ID#/", "news" => "", "section" => "",),
				"SET_LAST_MODIFIED" => "N",
				"SET_STATUS_404" => "Y",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N",
				"USE_CATEGORIES" => "N",
				"USE_FILTER" => "N",
				"USE_PERMISSIONS" => "N",
				"USE_RATING" => "N",
				"USE_REVIEW" => "N",
				"USE_RSS" => "N",
				"USE_SEARCH" => "N",
				"USE_SHARE" => "N"
			)
		); ?>
<div class="container">
	<div class="seo-text-container">
		<h2 class="block-title"><? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "page",
										"AREA_FILE_SUFFIX" => "seo_title"
									)
								); ?></h2>
		<p class="seo-text">
			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				array(
					"AREA_FILE_SHOW" => "page",
					"AREA_FILE_SUFFIX" => "seo_text"
				)
			); ?>
		</p>
	</div>
</div>
<script>
	window.addEventListener('DOMContentLoaded', () => {
		lightGallery(document.getElementById("lightgallery__bouquets"), {
			plugins: [lgZoom, lgThumbnail],
			licenseKey: "your_license_key",
			speed: 500,
			// ... other settings
		});
	});
</script><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>