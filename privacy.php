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
            <h1 class="section-title"><span class="text-gradient">Политика конфиденциальности</span></h1>

            <div class="pages__text-content">
                <p>
                    Политика конфиденциальности распространяется на персональные данные,
                    предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания различного рода
                    услуг по консалтингу, так и для других взаимодействий в электронном
                    формате, а также при участии клиентов в экспертных программах и акциях, оказывая
                    техническую поддержку и информационное сопровождение.
                </p>

                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                    в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                    положениями. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц, которые имеют свои
                    собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                    конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                    на их обработку способами, предусмотренными настоящей Политикой.
                </p>

                <h2>Порядок сбора, хранения и уничтожения персональных данных</h2>
                <p>
                    <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                    пользователя и исключительно для предоставления качественных услуг: доступа к платформе,
                    участия в стратегических сессиях, получения аналитических отчетов и внедрения инноваций. Для
                    предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, включая современные протоколы шифрования.
                </p>

                <p>
                    Максимальный срок хранения персональных данных составляет 75
                    лет с даты получения информации. В остальных случаях компания хранит данные клиента до
                    завершения своей деятельности или до момента официального отзыва согласия пользователем.
                </p>

                <p>
                    Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                    их дальнейшей обработки, если цель сбора была достигнута или по запросу клиента.
                </p>

                <p>
                    <strong><?= $domainTitle ?></strong> собирает данные в следующих категориях:
                </p>

                <h2>Техническая информация:</h2>
                <ul class="pages__list">
                    <li>время доступа и IP-адрес;</li>
                    <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                    <li>Интернет-страницы, посещаемые пользователем;</li>
                    <li>просмотры информационных и рекламных блоков;</li>
                    <li>иная техническая информация, предоставляемая браузером;</li>
                    <li>номер телефона (в случае звонка по контактам, указанным на сайте).</li>
                </ul>

                <p>
                    При регистрации или заполнении форм обратной связи мы собираем информацию, 
                    необходимую для аутентификации и персонализации услуг:
                </p>
                <ul class="pages__list">
                    <li>имя пользователя;</li>
                    <li>e-mail и номер телефона для оперативной связи;</li>
                </ul>

                <h2>Информация о действиях пользователя:</h2>
                <ul class="pages__list">
                    <li>информация о соглашениях и контрактах между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                    <li>данные о запросах, отправленных через формы на сайте;</li>
                    <li>сведения о полученных консультациях и пройденных программах;</li>
                    <li>произведенные платежи и иная финансовая информация, предусмотренная действующим законодательством ЕС.</li>
                </ul>

                <h2>Цели обработки персональных данных клиентов:</h2>
                <ul class="pages__list">
                    <li>предоставление консалтинговых услуг и доступа к аналитической платформе;</li>
                    <li>учет пожеланий при разработке новых технологических решений;</li>
                    <li>информирование об акциях, скидках и новых материалах в блоге через e-mail;</li>
                    <li>обеспечение качественной экспертной поддержки.</li>
                </ul>

                <h2>
                    <strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением:
                </h2>
                <ul class="pages__list">
                    <li>получения прямого согласия пользователя на такую передачу;</li>
                    <li>по требованию компетентных органов <strong>Италии</strong> в соответствии с законодательством;</li>
                    <li>случаев стратегического слияния или поглощения компании.</li>
                </ul>

                <h2>Использование файлов cookie и точечных маркеров</h2>
                <p>
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона <strong>Италия</strong>), 
                    чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Точечные маркеры 
                    используются для статистического анализа посещений. Вы можете в любое время отключить Cookies в настройках своего браузера.
                </p>

                <h2>Права пользователя в отношении персональных данных</h2>
                <p>
                    Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами <strong>GDPR</strong>, 
                    пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
                    <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient">support@<?= $fullDomain ?></a>.
                </p>

                <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,77,77,0.1);">
                    <a href="/" class="btn btn--primary">Вернуться на главную</a>
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