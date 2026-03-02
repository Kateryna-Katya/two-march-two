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
            <h1 class="section-title"><span class="text-gradient">Отказ от ответственности</span></h1>

            <div class="pages__text-content">
                <p>
                    <strong>Общая информация:</strong> Все материалы, статьи и сведения,
                    опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно
                    информационно-ознакомительный характер. Они не являются и не должны
                    рассматриваться как персональная инвестиционная рекомендация,
                    профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                    каких-либо финансовых операций.
                </p>

                <p>
                    <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                    относительно точности, полноты или актуальности представленной в блоге
                    информации. Любые упоминания потенциального карьерного роста, программ пассивного дохода или прошлых
                    результатов наших клиентов не гарантируют аналогичных результатов в будущем. 
                    Индивидуальные итоги вашей деятельности зависят от множества факторов, включая рыночные условия в <strong>Италии и ЕС</strong>, и могут существенно
                    отличаться от приведенных примеров.
                </p>

                <p>
                    <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                    его владельцы и аффилированные лица не несут ответственности за
                    любые прямые или косвенные убытки, решения или действия,
                    предпринятые вами на основе информации с этого ресурса. Вся
                    ответственность за использование предложенных методологий и возможные последствия
                    лежит исключительно на пользователе. Контент платформы <strong><?= $domainTitle ?></strong> собирается из
                    источников, которые считаются надежными и общедоступными на момент публикации.
                </p>

                <p>
                    <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                    изменение финансового статуса или инвестиции в новые проекты, сопряжена с
                    определенным уровнем риска. Перед принятием
                    любых важных стратегических решений мы настоятельно рекомендуем провести
                    собственное исследование и проконсультироваться с квалифицированным
                    независимым специалистом в соответствующей области.
                </p>

                <p>
                    <strong>Подтверждение пользователя:</strong> Продолжая использовать
                    сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                    действуете по собственной воле, полностью осознаете и принимаете все
                    упомянутые риски и условия данного отказа от ответственности.
                </p>

                <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,77,77,0.1);">
                    <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026</p>
                    <a href="/" class="btn btn--outline" style="margin-top: 20px;">Вернуться на главную</a>
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