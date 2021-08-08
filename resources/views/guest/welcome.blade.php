<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <link rel="shortcut icon" type="image/png" href="{{ URL::asset('img/icon.png') }}" /> -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('favicon.ico') }}">
    <title>Добре дошли в Nitro</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <img src="{{ URL::asset('img/logo.png') }}" alt="Bankist logo" class="nav__logo" id="logo" />
            <ul class="nav__links">
                <li class="nav__item">
                    <a class="nav__link" href="#section--1">Услуги</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#section--3">Отзиви</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#section--2">Контакти</a>
                </li>
            </ul>
            <div></div>
            <div></div>
            <div></div>
            <a class="nav__link nav__link--btn btn--show-modal" href="/login">Вход</a>
            <a class="nav__link nav__link--btn btn--show-modal" href="/register">Регистрация</a>
        </nav>


        <div class="header__title">
            <h1> <span class="highlight">Разменете</span>
                <!-- Green highlight effect -->
                <span class="highlight"> четирите стени</span>
                с
                <span class="highlight">четири колела</span>
            </h1>
            <h4>и се насладете на безопасно, бързо и лесно преживяване.</h4>
            <button class="btn--text btn--scroll-to">Научи повече &DownArrow;</button>
            <img src="{{ URL::asset('img/hero.png') }}" class="header__img" alt="Minimalist bank items" />
        </div>
    </header>

    <section class="section" id="section--1">
        <div class="section__title">
            <h2 class="section__description">Услуги</h2>
            <h3 class="section__header">
                Възползвайте се от качествените ни автомобили и безпромлено пътуване!
            </h3>
        </div>

        <div class="features">
            <img src="{{ URL::asset('img/digital-lazy.jpg') }}" data-src="{{ URL::asset('img/digital.jpg') }}" alt="Computer" class="features__img lazy-img" />
            <div class="features__feature">
                <div class="features__icon">
                    <svg>
                        <use xlink:href="{{ URL::asset('img/icons.svg#icon-anchor') }}"></use>
                    </svg>
                </div>
                <h5 class="features__header">Екзотичен град</h5>
                <p>
                    Наемете своята кола в най-големият град в Североизточна България, разположен по бреговете на Черно море.
                </p>
            </div>

            <div class="features__feature">
                <div class="features__icon">
                    <svg>
                        <use xlink:href="{{ URL::asset('img/icons.svg#icon-dollar-sign') }}"></use>
                    </svg>
                </div>
                <h5 class="features__header">Сходни цени</h5>
                <p>
                    Може да разгледате автомобилите предлагани от нас след успешна регистрация! Предлагаме отстъпка при лоялни клиенти и индивидуален план за дългосрочен наем.
                </p>
            </div>
            <img src="{{ URL::asset('img/grow-lazy.jpg') }}" data-src="{{ URL::asset('img/grow.jpg') }}" alt="Plant" class="features__img lazy-img" />

            <img src="{{ URL::asset('img/card-lazy.png') }}" data-src="{{ URL::asset('img/card.png') }}" alt="Credit card" class="features__img lazy-img" />
            <div class="features__feature">
                <div class="features__icon">
                    <svg>
                        <use xlink:href="{{ URL::asset('img/icons.svg#icon-credit-card') }}"></use>
                    </svg>
                </div>
                <h5 class="features__header">Улеснен наем</h5>
                <p>
                    Може да се възползвате от услугата ни - улеснен наем, ако сте лоялен клиент. Изберете кола, платете онлайн и наш служител ще Ви я достави на адрес!
                </p>
            </div>
        </div>
    </section>

    <section class="section" id="section--3">
        <div class="section__title section__title--testimonials">
            <h2 class="section__description">Все още се чудите?</h2>
            <h3 class="section__header">
                Може да чуете и мнението на нашите клиенти!
            </h3>
        </div>

        <div class="slider">
            <div class="slide slide--1">
                <div class="testimonial">
                    <h5 class="testimonial__header">★★★★★</h5>
                    <blockquote class="testimonial__text">
                        Взех кола на летището във Варна и потеглихме много доволни клиенти! Колата беше страхотна и страхотна работа Nitro Препоръчвам я на всички! Доставка точно на летището също няма нужда да шофирате никъде.
                    </blockquote>
                    <address class="testimonial__author">
                        <img src="{{ URL::asset('img/user-1.jpg') }}" alt="" class="testimonial__photo" />
                        <h6 class="testimonial__name">Никос Каролос</h6>
                        <p class="testimonial__location">Полигорис, GR</p>
                    </address>
                </div>
            </div>

            <div class="slide slide--2">
                <div class="testimonial">
                    <h5 class="testimonial__header">
                        ★★★★☆
                    </h5>
                    <blockquote class="testimonial__text">
                        Това е третият път, когато наемам кола от Nitro. Първите два пъти бях доста доволна. Миналия път бях резервирала малка кола, но бяха останали само големи коли.
                    </blockquote>
                    <address class="testimonial__author">
                        <img src="{{ URL::asset('img/user-2.jpg') }}" alt="" class="testimonial__photo" />
                        <h6 class="testimonial__name">Виктория Левон</h6>
                        <p class="testimonial__location">Варна, BG</p>
                    </address>
                </div>
            </div>

            <div class="slide slide--3">
                <div class="testimonial">
                    <h5 class="testimonial__header">
                        ★★★★★
                    </h5>
                    <blockquote class="testimonial__text">
                        Наех кола в Бургас за една седмица в края на юли 2021 г. Персоналът беше любезен и много услужлив. Колата беше чиста и нова. Няма проблеми и определено бих наела отново от Nitro.
                    </blockquote>
                    <address class="testimonial__author">
                        <img src="{{ URL::asset('img/user-3.jpg') }}" alt="" class="testimonial__photo" />
                        <h6 class="testimonial__name">Александра Стоянова</h6>
                        <p class="testimonial__location">Пловдив, BG</p>
                    </address>
                </div>
            </div>

            <button class="slider__btn slider__btn--left">&larr;</button>
            <button class="slider__btn slider__btn--right">&rarr;</button>
            <div class="dots"></div>
        </div>
    </section>
    <section class="section" id="section--2">
        <div class="section__title">
            <h2 class="section__description">Контакти</h2>
            <h3 class="section__header">
                При въпроси може да се свържете с нас по всяко време.
            </h3>
        </div>

        <div class="operations">
            <div class="operations__tab-container">
                <button class="btn operations__tab operations__tab--1 operations__tab--active" data-tab="1">
                    <span>01</span>Имейл & Телефон
                </button>
                <button class="btn operations__tab operations__tab--2" data-tab="2">
                    <span>02</span>Адрес
                </button>
            </div>
            <div class="operations__content operations__content--1 operations__content--active">
                <div class="operations__icon operations__icon--1">
                    <svg>
                        <use xlink:href="{{ URL::asset('img/icons.svg#icon-upload') }}"></use>
                    </svg>
                </div>
                <h5 class="operations__header">
                    <p><a href="mailto: nutfi911@icloud.com">nutfi911@icloud.com</a> | <a href="tel: 0359888390652">+359 888 390 652</a></p>
                </h5>
            </div>

            <div class="operations__content operations__content--2">
                <div class="operations__icon operations__icon--2">
                    <svg>
                        <use xlink:href="{{ URL::asset('img/icons.svg#icon-home') }}"></use>
                    </svg>
                </div>
                <h5 class="operations__header">
                    ул. Студентска 1
                    <br />
                    Варна, Варна 9000
                </h5>
            </div>
        </div>
    </section>

    <section class="section section--sign-up">
        <div class="section__title">
            <h3 class="section__header">
                Не се бавете и се насладете на колата на мечтите си сега!
            </h3>
        </div>
        <a class="btn btn--show-modal" href="/register">Регистрация</a>
    </section>

    <footer class="footer">
        <ul class="footer__nav">
            <li class="footer__item">
                <a class="footer__link" href="#">Условия за ползване</a>
            </li>
            <li class="footer__item">
                <a class="footer__link" href="#">Политика за поверителност</a>
            </li>
            <li class="footer__item">
                <a class="footer__link" href="#">Кариери</a>
            </li>
            <li class="footer__item">
                <a class="footer__link" href="#">Блог</a>
            </li>
        </ul>
        <img src="{{ URL::asset('img/icon.png') }}" alt="Logo" class="footer__logo" />
    </footer>

    <script src="{{ URL::asset('js/welcome.js') }}">
    </script>
</body>

</html>