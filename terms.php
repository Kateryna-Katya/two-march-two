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
            <h1 class="section-title"><span class="text-gradient">Условия использования</span></h1>

            <div class="pages__text-content">
                <p>
                    Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                    (далее — «Условия» или «Соглашение») представляют собой юридически
                    обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                    (далее — «Компания», «мы», «нас»). Пожалуйста, внимательно
                    ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                    услуги, вы подтверждаете свое полное и безоговорочное согласие с
                    данными Условиями. Если вы не согласны, вы должны немедленно
                    прекратить использование сайта.
                </p>

                <h2>1. Предмет Соглашения</h2>
                <p>
                    Компания предоставляет Пользователю доступ к использованию сайта
                    <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                    инновационным материалам, статьям в блоге, экспертным консультациям и другим инструментам 
                    развития (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                    взаимодействия Пользователя с платформой.
                </p>

                <h2>2. Обязанности и права Пользователя</h2>
                <p>
                    Вы обязуетесь использовать сайт исключительно в законных и личных
                    некоммерческих целях. При использовании платформы <strong><?= $domainTitle ?></strong>
                    <strong>запрещается</strong>:
                </p>
                <ul class="pages__list">
                    <li>
                        Публиковать, передавать или распространять любую информацию,
                        которая является незаконной, вредоносной, нарушает авторские права или разжигает ненависть.
                    </li>
                    <li>
                        Предпринимать любые действия, которые могут нарушить нормальную
                        работу сайта, его безопасность или привести к перегрузке
                        цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        Использовать автоматизированные скрипты (ботов) для сбора
                        информации или иного взаимодействия с сайтом без нашего разрешения.
                    </li>
                    <li>
                        Выдавать себя за другое лицо или предоставлять недостоверную
                        информацию о себе при регистрации на консультацию.
                    </li>
                </ul>

                <h2>3. Интеллектуальная собственность</h2>
                <p>
                    Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты, графику,
                    логотипы и программный код, является объектом интеллектуальной
                    собственности Компании или ее партнеров. Вам предоставляется ограниченная
                    лицензия на доступ и использование Контента в личных целях. 
                    Любое копирование или распространение Контента без предварительного 
                    письменного разрешения строго запрещено.
                </p>

                <h2>4. Ограничение ответственности и отказ от гарантий</h2>
                <p>
                    Услуги и все материалы на сайте предоставляются по принципу «как
                    есть» (as is). Мы не даем никаких гарантий, что сайт будет работать бесперебойно или что его контент является абсолютно точным в контексте динамически 
                    меняющегося рынка в <strong>Италии и странах ЕС</strong>.
                </p>
                <p>
                    Компания не несет ответственности за любые прямые или косвенные
                    убытки, которые могут возникнуть у Пользователя в результате использования 
                    платформы <strong><?= $domainTitle ?></strong>. 
                </p>

                <h2>5. Изменения в Условиях использования</h2>
                <p>
                    Мы оставляем за собой право в любое время изменять или дополнять настоящие Условия. 
                    Все изменения вступают в силу с момента их публикации. 
                    Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> после внесения 
                    изменений означает ваше согласие с новой редакцией Условий.
                </p>

                <h2>6. Разрешение споров</h2>
                <p>
                    Все споры и разногласия стороны будут стремиться разрешить путем переговоров.
                    В случае если согласие не будет достигнуто, спор подлежит рассмотрению в соответствии 
                    с действующим законодательством по месту регистрации Компании в <strong>Италии</strong>.
                </p>

                <div class="pages__contact-box">
                    <h2>7. Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы, связанные с настоящими Условиями,
                        пожалуйста, свяжитесь с нами:
                    </p>
                    <ul class="pages__contact-list">
                        <li><strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient">support@<?= $fullDomain ?></a></li>
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