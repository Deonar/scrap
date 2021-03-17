<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/libs/bootstrap-grid/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="assets/libs/slick/slick.css" />
    <link rel="stylesheet" href="assets/libs/selectize/css/selectize.css" />
    <link rel="stylesheet" href="assets/libs/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/libs/jquery-libs/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/main.css?v2" />
    <title>SCRAP</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-wrapp">
                <div class="header-burger burger-js">
                    <div class="header-burger__lines">
                        <span class="header-burger__top"></span>
                        <span class="header-burger__bottom"></span>
                    </div>
                    <span class="header-burger__text">меню</span>
                </div>
                <div class="header-city">
                    <div class="header-city__image">
                        <img class="img-icon" src="assets/img/icons/icon-location.svg" alt="" class="img-icon" />
                    </div>
                    <div class="header-city__text">
                        <a href="#popup-cities" id="geo-city" class="header-select__link popup">Конотоп</a>
                    </div>
                </div>
                <a class="header-logo" href="/">
                    <div class="header-logo__image">
                        <img src="assets/img/icons/logo.svg" alt="logotype" />
                    </div>
                    <span class="header-logo__text">
                        scrap.
                        <span class="span header-logo__text_normal">center</span>
                    </span>
                </a>
                <div class="header-phone">
                    <a href="tel:88003006810" class="header-phone__svg--mob">
                        <svg>
                            <use xlink:href="assets/img/icons/icon-tell.svg#icon-tell"></use>
                        </svg>
                    </a>
                    <div class="header-phone__list">
                        <a href="tel:88003006810" class="header-phone__link">8 800 300-68-10</a>
                        <span class="header-phone__text">звонок по России Бесплатный</span>
                    </div>
                </div>
            </div>
            <div id="header-navbar" class="header-navbar navbar-header">
                <div class="navbar-body">
                    <div class="navbar-head">
                        <div class="header-burger burger-js">
                            <div class="header-burger__lines">
                                <span class="header-burger__top"></span>
                                <span class="header-burger__bottom"></span>
                            </div>
                            <span class="header-burger__text">меню</span>
                        </div>
                        <a class="header-logo" href="/">
                            <div class="header-logo__image">
                                <img src="assets/img/icons/logo-light.svg" alt="logotype" />
                            </div>
                            <span class="header-logo__text">
                                scrap.
                                <span class="span header-logo__text_normal">center</span>
                            </span>
                        </a>
                        <a href="tel:88003006810" class="header-phone__svg--mob">
                            <svg>
                                <use xlink:href="assets/img/icons/icon-tell.svg#icon-tell"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="navbar-location">
                        <div class="header-city">
                            <div class="header-city__image">
                                <img class="img-icon" src="assets/img/icons/icon-location-white.svg" alt="" class="img-icon" />
                            </div>
                            <div class="header-city__text">
                                <a href="#popup-cities" id="geo-city" class="header-select__link popup">Конотоп</a>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-menu">
                        <li class="navbar-menu__item">
                            <a href="/" class="navbar-menu__link">Главная</a>
                        </li>
                        <li class="navbar-menu__item">
                            <a href="/" class="navbar-menu__link">Аукцион</a>
                        </li>
                        <li class="navbar-menu__item">
                            <a href="registration.php" class="navbar-menu__link">Стать партнером</a>
                        </li>
                        <li class="navbar-menu__item">
                            <a href="#" class="navbar-menu__link">О сервисе</a>
                        </li>
                        <li class="navbar-menu__item">
                            <a href="#" class="navbar-menu__link">Отзывы</a>
                        </li>
                    </ul>
                    <div class="navbar-option">
                        <a class="navbar-policy" href="#">Пользовательское соглашение</a>
                        <a class="navbar-policy navbar-policy--mob" href="#">Политика конфиденциальности</a>
                        <div class="navbar-socials">
                            <a class="socials__icon" href="https://vk.com/scrap.center" target="_blank">
                                <svg>
                                    <use xlink:href="assets/img/icons/icon-vk.svg#icon-vk"></use>
                                </svg>
                            </a>
                            <a class="socials__icon" href="https://www.instagram.com/scrap_center/" target="_blank">
                                <svg>
                                    <use xlink:href="assets/img/icons/icon-instagram.svg#icon-instagram"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="header-phone__list">
                            <a href="tel:88003006810" class="header-phone__link">8 800 300-68-10</a>
                            <span class="header-phone__text">звонок по России Бесплатный</span>
                        </div>
                    </div>
                </div>
                <div id="close-navbar" class="navbar-bg"></div>
            </div>
        </div>
    </header>