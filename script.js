document.addEventListener('DOMContentLoaded', () => {
    // --- 1. Инициализация библиотек ---
    AOS.init({ duration: 1000, once: true, easing: 'ease-out-cubic' });

    // --- 2. Мобильное меню ---
    const burger = document.getElementById('burger');
    const nav = document.getElementById('nav');
    const navLinks = document.querySelectorAll('.nav__link');

    const toggleMenu = () => {
        burger.classList.toggle('burger--active');
        nav.classList.toggle('nav--active');
        document.body.style.overflow = nav.classList.contains('nav--active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    navLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // --- 3. Скролл хедера ---
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    // --- 4. Капча и Валидация ---
    const captchaQ = document.getElementById('captcha-question');
    const phoneInput = document.getElementById('phone');
    let captchaResult;

    const generateCaptcha = () => {
        const a = Math.floor(Math.random() * 10) + 1;
        const b = Math.floor(Math.random() * 10) + 1;
        captchaResult = a + b;
        captchaQ.innerText = `Сколько будет ${a} + ${b}?`;
    };
    generateCaptcha();

    // Разрешить только цифры в телефоне
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    // --- 5. AJAX Отправка формы ---
    const form = document.getElementById('ajax-form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const userAnswer = parseInt(document.getElementById('captcha-answer').value);

        if (userAnswer !== captchaResult) {
            alert('Неверный ответ капчи!');
            generateCaptcha();
            return;
        }

        // Имитация отправки
        const btn = form.querySelector('button');
        const successMsg = document.getElementById('form-message');
        
        btn.innerText = 'Отправка...';
        btn.style.opacity = '0.7';
        btn.disabled = true;

        setTimeout(() => {
            anime({
                targets: form.querySelectorAll('.form-group, .form-captcha, .form-checkbox, button'),
                opacity: 0,
                translateY: -20,
                duration: 500,
                easing: 'easeInQuad',
                complete: () => {
                    form.querySelectorAll('.form-group, .form-captcha, .form-checkbox, button').forEach(el => el.style.display = 'none');
                    successMsg.style.display = 'block';
                    anime({
                        targets: successMsg,
                        opacity: [0, 1],
                        scale: [0.8, 1],
                        duration: 800
                    });
                }
            });
        }, 1500);
    });

    // --- 6. Cookie Popup ---
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieBtn = document.getElementById('cookie-accept');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => cookiePopup.classList.add('cookie-popup--active'), 2000);
    }

    cookieBtn.addEventListener('click', () => {
        cookiePopup.classList.remove('cookie-popup--active');
        localStorage.setItem('cookies-accepted', 'true');
    });

    // --- 7. Anime.js Анимации (Hero & Hover) ---
    anime({
        targets: '.floating-el',
        translateY: (el, i) => i % 2 === 0 ? [10, -10] : [-10, 10],
        duration: 3000,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine'
    });

    // Пульсация кругов Growth
    anime({
        targets: '.growth__num-circle',
        scale: [1, 1.1],
        duration: 1000,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutQuad',
        delay: anime.stagger(200)
    });
});