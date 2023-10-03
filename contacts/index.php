<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div class="container" style="margin: 100px auto;">
    <p>
        Обратитесь к нашим специалистам и получите профессиональную консультацию по вопросам создания и покупки мебели (от дизайна, разработки технического задания до доставки мебели к Вам домой).
    </p>
    <p>
        Вы можете обратиться к нам по телефону, по электронной почте или договориться о встрече в нашем офисе. Будем рады помочь вам и ответить на все ваши вопросы.
    </p>
    <h2>Телефоны</h2>
    <ul>
        <li>Телефон/факс:
            <ul>
                <li><b>(495) 212-85-06</b></li>
            </ul>
        </li>
        <li>Телефоны:
            <ul>
                <li><b>(495) 212-85-07</b></li>
                <li><b>(495) 212-85-08</b></li>
            </ul>
        </li>
    </ul>
    <h2>Email</h2>
    <ul>
        <li><a href="mailto:info@example.ru">info@example.ru</a> — общие вопросы</li>
        <li><a href="mailto:sales@example.ru">sales@example.ru</a> — приобретение продукции</li>
        <li><a href="mailto:marketing@example.ru">marketing@example.ru</a> — маркетинг/мероприятия/PR</li>
    </ul>
    <h2>Офис в Москве</h2>
    <div class="locations">
        <div class="block-title">Наши магазины на карте</div>
        <div class="map" id="map"></div>
    </div>
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
</script><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>