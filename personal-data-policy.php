<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Экспертный консалтинг и инновации
    </title>
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='14' stroke='%232ecc71' stroke-width='4' fill='none'/%3E%3Ccircle cx='16' cy='16' r='6' fill='%23004d4d'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#strategies" class="nav__link">Стратегии</a></li>
                    <li><a href="./#insights" class="nav__link">Инсайты</a></li>
                    <li><a href="./#growth" class="nav__link">Рост</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--primary btn--header">Связаться</a>

            <button class="burger" id="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
<main>
    <section class="pages" data-aos="fade-in">
        <div class="container">
            <h1 class="section-title"><span class="text-gradient">Политика обработки персональных данных</span></h1>

            <div class="pages__text-content">
                <h2>1. Общие положения</h2>
                <p>
                    Настоящая политика обработки персональных данных (далее —
                    «Политика») определяет порядок и условия обработки персональных
                    данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                    устанавливает меры по обеспечению безопасности этих данных.
                </p>
                <p>
                    1.1. Важнейшей целью и условием осуществления своей деятельности
                    Оператор считает соблюдение прав и свобод человека и гражданина при
                    обработке его персональных данных, в том числе защиты прав на
                    неприкосновенность частной жизни, личную и семейную тайну.
                </p>
                <p>
                    1.2. Настоящая Политика применяется ко всей информации, которую
                    Оператор может получить о посетителях (далее — «Пользователи»)
                    веб-сайта <strong><?= $fullDomain ?></strong>.
                </p>

                <h2>2. Основные понятия, используемые в Политике</h2>
                <ul class="pages__list">
                    <li>
                        <strong>Веб-сайт</strong> — совокупность графических и
                        информационных материалов, а также программ для ЭВМ и баз данных,
                        обеспечивающих их доступность в сети интернет по сетевому адресу
                        <strong><?= $fullDomain ?></strong>.
                    </li>
                    <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                    <li>
                        <strong>Персональные данные</strong> — любая информация,
                        относящаяся прямо или косвенно к определенному или определяемому
                        Пользователю веб-сайта.
                    </li>
                    <li>
                        <strong>Обработка персональных данных</strong> — любое действие
                        (операция) или совокупность действий (операций), совершаемых с
                        использованием средств автоматизации или без использования таких
                        средств.
                    </li>
                    <li>
                        <strong>Безопасность данных</strong> — защищенность
                        персональных данных от неправомерного доступа, уничтожения, изменения или блокирования.
                    </li>
                </ul>

                <h2>3. Данные, которые мы обрабатываем</h2>
                <p>Оператор может обрабатывать следующие категории данных:</p>
                <ul class="pages__list">
                    <li>
                        <strong>Персональные данные, предоставляемые Пользователем:</strong>
                        <ul style="margin-top: 10px; padding-left: 20px;">
                            <li>Фамилия, имя, отчество;</li>
                            <li>Адрес электронной почты (Email);</li>
                            <li>Номера телефонов (валидация по стандартам <strong>Италии</strong>).</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Данные, собираемые автоматически:</strong>
                        <p style="margin-top: 10px;">
                            Сбор и обработка обезличенных данных о посетителях (в т.ч. файлов «cookie») с помощью сервисов
                            интернет-статистики (Google Аналитика и других). Эти данные включают 
                            IP-адрес, тип браузера и время доступа.
                        </p>
                    </li>
                </ul>
                <p>
                    Вышеперечисленные данные далее по тексту Политики <strong><?= $domainTitle ?></strong> объединены общим
                    понятием Персональные данные.
                </p>

                <h2>4. Цели обработки персональных данных</h2>
                <ul class="pages__list">
                    <li>Идентификация Пользователя для предоставления доступа к консалтинговой платформе.</li>
                    <li>Установление обратной связи, включая направление уведомлений и обработку заявок.</li>
                    <li>Заключение и исполнение договоров на экспертные услуги в <strong>Европе</strong>.</li>
                    <li>
                        Информирование Пользователя посредством отправки писем. 
                        Вы всегда можете отказаться от рассылок, написав на
                        <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient">support@<?= $fullDomain ?></a>
                        с пометкой «Отказ от уведомлений».
                    </li>
                </ul>

                <h2>5. Правовые основания</h2>
                <p>
                    Оператор обрабатывает данные только на законных основаниях: при наличии добровольного согласия Пользователя, выраженного 
                    путем заполнения форм на сайте <strong><?= $domainTitle ?></strong>, либо если сохранение файлов «cookie» разрешено в настройках браузера.
                </p>

                <h2>6. Порядок сбора и безопасности данных</h2>
                <ul class="pages__list">
                    <li>
                        Оператор принимает организационные и технические меры для защиты данных в соответствии с нормами <strong>GDPR</strong>.
                    </li>
                    <li>
                        Данные никогда не будут переданы третьим лицам, за исключением случаев, предусмотренных законом.
                    </li>
                    <li>
                        Пользователь может в любой момент отозвать свое согласие, направив уведомление на email 
                        <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                    </li>
                </ul>

                <div class="pages__contact-box">
                    <h2>7. Заключительные положения</h2>
                    <p>
                        По любым вопросам вы можете обратиться к Оператору:
                    </p>
                    <ul class="pages__contact-list">
                        <li><strong>Email:</strong> support@<?= $fullDomain ?></li>
                        <li><strong>Телефон:</strong> +390697639482</li>
                        <li><strong>Адрес:</strong> Via del Corso, 18, 00186 Roma RM, Italy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__dot"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__desc">
                    Переосмыслите подход к развитию вашего бизнеса в Европе вместе с экспертами
                    <?= $domainTitle ?>.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#strategies">Стратегии</a></li>
                    <li><a href="./#insights">Инсайты</a></li>
                    <li><a href="./#growth">Рост</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__info">
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+390697639482">+390697639482</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Via del Corso, 18, 00186 Roma RM, Italy</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно в странах ЕС.
            </p>
        </div>
    </footer>
        <div class="cookie-popup" id="cookie-popup">
            <div class="cookie-popup__content">
                <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                        политике</a>.</p>
                <button class="btn btn--primary" id="cookie-accept">Принять</button>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>