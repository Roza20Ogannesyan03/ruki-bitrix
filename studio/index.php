<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
$APPLICATION->SetPageProperty('title', "Наши студии");
$APPLICATION->AddChainItem('Наши студии', '/studio/');
?>


<? $APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "breadcrumb",
    array(
        "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
        "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
        "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
    ),
    false
); ?><br>
<div class="container-small">
    <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "studio_list",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
            "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",    // Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
            "CACHE_TYPE" => "N",    // Тип кеширования
            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
            "DISPLAY_DATE" => "Y",    // Выводить дату элемента
            "DISPLAY_NAME" => "Y",    // Выводить название элемента
            "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
            "FIELD_CODE" => array(    // Поля
                0 => "CODE",
                1 => "NAME",
                2 => "",
            ),
            "FILTER_NAME" => "",    // Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "10",    // Код информационного блока
            "IBLOCK_TYPE" => "studio",    // Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "20",    // Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
            "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости",    // Название категорий
            "PARENT_SECTION" => "",    // ID раздела
            "PARENT_SECTION_CODE" => "",    // Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(    // Свойства
                0 => "",
                1 => "address",
                2 => "time",
                3 => "phone",
                4 => "studio_images",
            ),
            "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
            "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "Y",    // Устанавливать статус 404
            "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
            "SHOW_404" => "N",    // Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
        ),
        false
    ); ?><br>
    <div class="locations">
        <h2 class="block-title">Наши магазины на карте</h2>
        <div class="map" id="map"></div>
    </div>
</div>
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
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>