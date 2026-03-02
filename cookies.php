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
            <h1 class="section-title"><span class="text-gradient">Политика использования файлов cookie</span></h1>

            <div class="pages__text-content">
                <p>
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии. Настоящая политика подробно объясняет, какие
                    именно технологии мы применяем, для каких целей, и как вы можете ими
                    управлять.
                </p>

                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой фрагмент данных (текстовый файл),
                    который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                    или смартфоне), когда вы его посещаете. Это позволяет платформе 
                    <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                    (например, логин, язык, настройки региона <strong>Италия</strong> и другие параметры) 
                    в течение определенного времени, чтобы вам не приходилось вводить их 
                    повторно при каждом визите.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                    следующим категориям:
                </p>
                <ul class="pages__list">
                    <li>
                        <strong>Строго необходимые файлы cookie:</strong> Эти файлы
                        критически важны для функционирования сайта. Они позволяют вам
                        перемещаться по страницам <strong><?= $domainTitle ?></strong> и использовать его базовые возможности. 
                    </li>
                    <li>
                        <strong>Аналитические и производительные файлы cookie:</strong>
                        Эти файлы собирают анонимную информацию о том, как посетители
                        используют наш сайт, помогая нам улучшать контент нашего блога.
                    </li>
                    <li>
                        <strong>Функциональные файлы cookie:</strong> Эти файлы позволяют
                        сайту запоминать ваш выбор для предоставления более
                        персонализированного опыта в рамках консалтинговых услуг.
                    </li>
                    <li>
                        <strong>Рекламные (маркетинговые) файлы cookie:</strong> Эти файлы
                        используются для доставки объявлений, соответствующих вашим интересам.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <p>Основные цели использования файлов cookie на сайте <strong><?= $domainTitle ?></strong>:</p>
                <ul class="pages__list">
                    <li>Обеспечение стабильной и безопасной работы сайта.</li>
                    <li>Анализ пользовательского поведения для оптимизации структуры сайта.</li>
                    <li>Персонализация контента и настроек для удобства пользователей в Европе.</li>
                    <li>Предоставление релевантных маркетинговых и рекламных материалов.</li>
                </ul>

                <h2>Ваш выбор и как управлять файлами cookie</h2>
                <p>
                    Вы имеете полный контроль над файлами cookie. Вы можете в любой
                    момент изменить свои настройки в браузере. Однако, обратите
                    внимание: отключение строго необходимых cookie может привести к
                    некорректной работе некоторых функций нашего сайта.
                </p>

                <h2>Файлы cookie третьих сторон</h2>
                <p>
                    На некоторых страницах <strong><?= $domainTitle ?></strong> мы можем использовать сервисы
                    сторонних компаний, например, Google Analytics или библиотеку Anime.js для визуализаций. 
                    Мы рекомендуем вам ознакомиться с их политиками конфиденциальности.
                </p>

                <h2>Обновления настоящей политики</h2>
                <p>
                    Мы можем время от времени обновлять эту Политику, чтобы отразить изменения в технологиях или
                    законодательстве. Продолжение использования нашего сайта будет означать ваше согласие с ними.
                </p>

                <div class="pages__contact-box">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли какие-либо вопросы касательно нашей политики
                        использования файлов cookie на <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нами:
                    </p>
                    <ul class="pages__contact-list">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-gradient">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+390697639482">+390697639482</a></li>
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