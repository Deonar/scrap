<?php include("header.php"); ?>

<div class="aggregator__page">
    <div class="container">
        <h1 class="title h1">
            Каталитическое<br>
            сырьё
        </h1>

        <div class="tab tab-js">

            <div class="tab__wrapper">
                <div class="tab__item active tab-item-js" data-tab="1">
                    Розница
                </div>
                <div class="tab__item tab-item-js" data-tab="2">
                    Опт
                </div>
            </div>

            <div class="tab__content active tab-content-js" data-tab="1">

                <div class="search-wrapper">
                    <div class="search-input__item">
                        <div class="search-input__label">
                            Тип поиска
                        </div>
                        <select class="custom-select custom-select_js" id="select-auto_search">
                            <option value="mark">По марке авто</option>
                            <option value="number">По гос. номеру</option>
                        </select>
                    </div>

                    <form action="#" class="search-input search-input_mark" id="search-auto_mark">
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Марка авто
                            </div>
                            <select class="custom-select custom-select-search custom-search-select_js input_no-line">
                                <option value="" disabled selected hidden>Укажите или выберите из списка</option>
                                <option value="Hyundai">Hyundai</option>
                                <option value="Renault">Renault</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Ford">Ford</option>
                                <option value="Chevrolet">Chevrolet</option>
                                <option value="Infiniti">Infiniti</option>
                                <option value="Mitsubishi">Mitsubishi</option>
                                <option value="Peugeot">Peugeot</option>
                                <option value="Land Rover">Land Rover</option>
                                <option value="Lada">Lada</option>
                                <option value="Audi">Audi</option>

                            </select>
                        </div>
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Модель авто
                            </div>
                            <select class="custom-select custom-select_js input_no-line" placeholder="Выберите из списка">
                                <option value="" disabled selected hidden>Выберите из списка</option>
                                <option value="1">Марка 1</option>
                                <option value="2">Марка 2</option>
                            </select>
                        </div>
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Год выпуска
                            </div>
                            <select class="custom-select custom-select_js input_no-line" placeholder="Выберите из списка">
                                <option value="" disabled selected hidden>Выберите из списка</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                            </select>
                        </div>
                        <button href="#" class="btn btn_green btn_search">
                            Найти
                        </button>
                    </form>

                    <form action="#" class="search-input" id="search-auto_number" style="display: none;">
                        <div class="search-input__item search-input_number">
                            <div class="search-input__label">
                                Гос. номер
                            </div>
                            <div class="form-input__wrapp">
                                <input class="form-input mask-car-number" name="number" placeholder="А 999 АА" maxlength="6">
                            </div>
                        </div>
                        <div class="search-input__item search-input_region">
                            <div class="search-input__label">
                                Регион
                            </div>
                            <div class="form-input__wrapp">
                                <input class="form-input mask-car-region" type="text" name="region" placeholder="777" maxlength="3">
                                <span class="region_icon">
                                    РУС
                                </span>
                            </div>
                        </div>
                        <button href="#" class="btn btn_green btn_search">
                            Найти
                        </button>
                    </form>
                </div>

                <div class="regulations regulations-js">
                    <div class="link regulations__link regulation-link-js">
                        Правила агрегатора
                    </div>
                    <div class="regulations__items">
                        <button class="btn-come__back come-back-js">Назад</button>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="regulations__item regulations__item_1">
                                    <div class="regulations__item-img">
                                        <img src="assets/img/icons/regulations-1.svg" alt="">
                                    </div>
                                    <div class="regulations__item-content">
                                        <div class="regulations__item-title">Актуальная<br>информация в профиле</div>
                                        <div class="regulations__item-text">Каждый участник указывает достоверную информацию о своих условиях</div>
                                        <div class="regulations__item-tag">
                                            #правила_агрегатора
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="regulations__item regulations__item_2">
                                    <div class="regulations__item-img">
                                        <img src="assets/img/icons/regulations-2.svg" alt="">
                                    </div>
                                    <div class="regulations__item-content">
                                        <div class="regulations__item-title">Пользовательский<br>рейтинг</div>
                                        <div class="regulations__item-text">Каждый человек может<br>оставить оценку.</div>
                                        <div class="regulations__item-tag">
                                            #правила_агрегатора
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="search-result mb-30" style="display: none;">
                    <h3 class="h3 search-result__title">
                        Результат поиска
                    </h3>
                    <p class="search-result__text">
                        Найдено 117 предложений
                    </p>
                </div>

                <div class="filter">
                    <a href="#popup-param" class="btn btn_add-param popup-param">
                        Все параметры поиска
                    </a>
                    <div class="sort">
                        <div class="form-input__wrapp">
                            <select class="custom-select input_no-line custom-select_js" placeholder="Сортировка">
                                <option value="" disabled selected hidden>Сортировка</option>
                                <option value="1">По цене</option>
                                <option value="0">По дате</option>
                            </select>
                        </div>
                    </div>

                    <div class="displaying">
                        Отображение
                        <div class="displaying__row active displaying-row-js">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="displaying__grid displaying-grid-js">
                            <div class="displaying__grid_row">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="displaying__grid_row">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="displaying__grid_row">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tag-list" style="display: none;">
                    <div class="tag__item">
                        Дополнительный сервис <span></span>
                    </div>
                    <div class="tag__item">
                        Типы сырья <span></span>
                    </div>
                    <div class="tag__item">
                        Время работы <span></span>
                    </div>
                </div>

                <div class="offer offer_row" id="offer-retail">

                    <div class="offer__item offer_status">
                        <div class="offer__item_wrap content-wrapper-js active open">
                            <div class="offer__top">
                                <div class="card-company__logo-label-wrapp">
                                    <div class="card-company__logo-label _blue">реклама</div>
                                    <div class="card-company__logo-label _black">new</div>
                                </div>
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10 _premium">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Выкуп катализаторов</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                26 отзывов
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Скрыть</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-retail" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-retail" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item offer_status">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="card-company__logo-label-wrapp">
                                    <div class="card-company__logo-label _blue">реклама</div>
                                </div>
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-retail" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-retail" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item offer_status">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="card-company__logo-label-wrapp">
                                    <div class="card-company__logo-label _blue">реклама</div>
                                    <div class="card-company__logo-label _black">new</div>
                                </div>
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-retail" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item offer_status">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="card-company__logo-label-wrapp">
                                    <div class="card-company__logo-label _black">new</div>
                                </div>
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <div class="offer-reviews__text">
                                                нет отзывов
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-retail" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item offer_status">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="card-company__logo-label-wrapp">
                                    <div class="card-company__logo-label _blue">реклама</div>
                                    <div class="card-company__logo-label _black">new</div>
                                </div>
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-retail" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-retail" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _close mb-10">закрыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-retail" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="offer__btn-more btn btn_gray">Показать ещё 5 предложений</button>

            </div>

            <div class="tab__content tab-content-js" data-tab="2">
                <div class="search-wrapper">
                    <div class="search-input__item">
                        <div class="search-input__label">
                            Тип поиска
                        </div>
                        <select class="custom-select custom-select_js" id="select-metal_search">
                            <option value="metal">Металлический материал</option>
                            <option value="ceramic">Керамический</option>
                        </select>
                    </div>

                    <form action="#" class="search-input" id="search-form_metal">

                        <div class="search-input__item">
                            <div class="search-input__label">
                                Вес
                            </div>
                            <div class="form-input__wrapp">
                                <input class="form-input" name="metal_weight" placeholder="0">
                                <span class="form-input_sub-label">
                                    кг
                                </span>
                            </div>
                        </div>
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Pt (Платина)
                            </div>
                            <div class="form-input__wrapp">
                                <input class="form-input" name="metal_platinum" placeholder="0">
                                <span class="form-input_sub-label">
                                    г/кг
                                </span>
                            </div>
                        </div>
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Pd (Палладий)
                            </div>
                            <div class="form-input__wrapp">
                                <input class="form-input" name="metal_palladium" placeholder="0">
                                <span class="form-input_sub-label">
                                    г/кг
                                </span>
                            </div>
                        </div>
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Rh (Родий)
                            </div>
                            <div class="form-input__wrapp">
                                <input class="form-input" name="metal_rhodium" placeholder="0">
                                <span class="form-input_sub-label">
                                    г/кг
                                </span>
                            </div>
                        </div>

                        <button href="#" class="btn btn_green btn_search">
                            Найти
                        </button>
                    </form>

                    <form action="#" class="search-input" id="search-form_ceramic" style="display: none;">
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Вес
                            </div>
                            <div class="form-input__wrapp">
                                <input class="form-input" name="ceramic_weight" placeholder="0">
                                <span class="form-input_sub-label">
                                    кг
                                </span>
                            </div>
                        </div>
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Pt (Платина)
                            </div>
                            <div class="form-input__wrapp">
                                <input class="form-input" name="ceramic_platinum" placeholder="0">
                                <span class="form-input_sub-label">
                                    г/кг
                                </span>
                            </div>
                        </div>
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Pd (Палладий)
                            </div>
                            <div class="form-input__wrapp">
                                <input class="form-input" name="ceramic_palladium" placeholder="0">
                                <span class="form-input_sub-label">
                                    г/кг
                                </span>
                            </div>
                        </div>
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Rh (Родий)
                            </div>
                            <div class="form-input__wrapp">
                                <input class="form-input" name="ceramic_rhodium" placeholder="0">
                                <span class="form-input_sub-label">
                                    г/кг
                                </span>
                            </div>
                        </div>
                        <button href="#" class="btn btn_green btn_search">
                            Найти
                        </button>
                    </form>
                </div>
                <div class="regulations regulations-js">
                    <div class="link regulations__link regulation-link-js">
                        Правила агрегатора
                    </div>
                    <div class="regulations__items">
                        <button class="btn-come__back come-back-js">Назад</button>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="regulations__item regulations__item_1">
                                    <div class="regulations__item-img">
                                        <img src="assets/img/icons/regulations-1.svg" alt="">
                                    </div>
                                    <div class="regulations__item-content">
                                        <div class="regulations__item-title">Актуальная<br>информация в профиле</div>
                                        <div class="regulations__item-text">Каждый участник указывает достоверную информацию о своих условиях</div>
                                        <div class="regulations__item-tag">
                                            #правила_агрегатора
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="regulations__item regulations__item_2">
                                    <div class="regulations__item-img">
                                        <img src="assets/img/icons/regulations-2.svg" alt="">
                                    </div>
                                    <div class="regulations__item-content">
                                        <div class="regulations__item-title">Пользовательский<br>рейтинг</div>
                                        <div class="regulations__item-text">Каждый человек может<br>оставить оценку.</div>
                                        <div class="regulations__item-tag">
                                            #правила_агрегатора
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="search-result mb-30" style="display: none;">
                    <h3 class="h3 search-result__title">
                        Результат поиска
                    </h3>
                    <p class="search-result__text">
                        Найдено 117 предложений
                    </p>
                </div>
                <div class="filter">
                    <a href="#popup-param" class="btn btn_add-param popup-param">
                        Все параметры поиска
                    </a>
                    <div class="sort">
                        <div class="form-input__wrapp">
                            <select class="custom-select input_no-line custom-select_js" placeholder="Сортировка">
                                <option value="" disabled selected hidden>Сортировка</option>
                                <option value="1">По цене</option>
                                <option value="0">По дате</option>
                            </select>
                        </div>
                    </div>

                    <div class="displaying">
                        Отображение
                        <div class="displaying__row active displaying-row-js">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="displaying__grid displaying-grid-js">
                            <div class="displaying__grid_row">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="displaying__grid_row">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="displaying__grid_row">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tag-list" style="display: none;">
                    <div class="tag__item">
                        Дополнительный сервис <span></span>
                    </div>
                    <div class="tag__item">
                        Типы сырья <span></span>
                    </div>
                    <div class="tag__item">
                        Время работы <span></span>
                    </div>
                </div>
                <div class="offer offer_row" id="offer-opt">

                    <div class="offer__item offer_status">
                        <div class="offer__item_wrap content-wrapper-js active open">
                            <div class="offer__top">
                                <div class="card-company__logo-label-wrapp">
                                    <div class="card-company__logo-label _blue">реклама</div>
                                    <div class="card-company__logo-label _black">new</div>
                                </div>
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10 _premium">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <div class="offer-reviews__text">
                                                26 отзывов
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Скрыть</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-opt" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-opt" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item offer_status">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="card-company__logo-label-wrapp">
                                    <div class="card-company__logo-label _blue">реклама</div>
                                </div>
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-opt" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-opt" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item offer_status">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="card-company__logo-label-wrapp">
                                    <div class="card-company__logo-label _blue">реклама</div>
                                    <div class="card-company__logo-label _black">new</div>
                                </div>
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-opt" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item offer_status">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="card-company__logo-label-wrapp">
                                    <div class="card-company__logo-label _black">new</div>
                                </div>
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <div class="offer-reviews__text">
                                                нет отзывов
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-opt" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item offer_status">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="card-company__logo-label-wrapp">
                                    <div class="card-company__logo-label _blue">реклама</div>
                                    <div class="card-company__logo-label _black">new</div>
                                </div>
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-opt" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _open mb-10">открыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-opt" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offer__item">
                        <div class="offer__item_wrap content-wrapper-js ">
                            <div class="offer__top">
                                <div class="d-flex align-items-center offer__profil">
                                    <div class="offer__avatar mr-10">
                                        <img src="assets/img/avatar.jpg" alt="">
                                    </div>
                                    <div>
                                        <div class="offer__name">Sdaykat</div>
                                        <div class="offer-reviews">
                                            <ul class="stars-rating__wrapper">
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_on"></li>
                                                <li class="stars-rating__item stars-rating_off"></li>
                                            </ul>
                                            <a href="/card-company.php#reviews" class="offer-reviews__text">
                                                1 отзыв
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="offer__sub-title">
                                        цена за кг
                                    </div>
                                    <div class="offer__price">
                                        4 000 ₽ – 15 000 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="show-more mb-20 button-more-js">Подробнее</div>
                            <div class="offer__bottom content-js">
                                <div class="offer-address__wrap">
                                    <div class="card-company__block-schedule-label _close mb-10">закрыто</div>
                                    <div class="card-company__street">
                                        г. Челябинск<br>
                                        <span>ул.Механическая 1\а</span>
                                    </div>
                                    <a href="/card-company.php#address" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                                </div>
                                <div class="offer-service">
                                    <div class="offer__sub-title">
                                        дополнительный сервис
                                    </div>
                                    <ul class="service__list">
                                        <li class="service__item" data-tippy-content="Безналичный расчет">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/credit-card-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrows-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/pistol-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/exhaust-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/garanty-green.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                            </span>
                                        </li>
                                        <li class="service__item" data-tippy-content="Выездная оценка">
                                            <span class="service__icon">
                                                <img src="assets/img/icons/location-green.svg" alt="">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="offer__buttons">
                                <a class="offer__tell btn btn_phone">
                                    Позвонить
                                </a>
                                <a href="#popup-offer-opt" class="link popup">
                                    Узнать больше
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="offer__btn-more btn btn_gray">Показать ещё 5 предложений</button>
            </div>

        </div>

        <div class="start-auction">
            <div class="start-auction__wrap">
                <h2 class="h2 start-auction__title">
                    Безопасная сделка
                </h2>
                <p class="start-auction__text">
                    Запустите аукцион и получите лучшие предложения от наших партнёров! Сделки между физлицами под защитой: деньги придут, когда услуга будет оказана.
                </p>
                <a href="#" class="btn btn_green start-auction__btn">
                    Запустить аукцион
                </a>
            </div>
        </div>

    </div>
</div>

<!-- Popup offer-retail-->
<div id="popup-offer-retail" class="offer-popup offer-popup_retail mfp-hide">
    <div class="offer-popup__body">
        <div class="d-flex align-items-center offer__profil mb-30">
            <div class="offer__avatar mr-10 _premium">
                <img src="assets/img/avatar.jpg" alt="">
            </div>
            <div>
                <div class="offer__name">Выкуп катализаторов</div>
                <div class="offer-reviews">
                    <ul class="stars-rating__wrapper">
                        <li class="stars-rating__item stars-rating_on"></li>
                        <li class="stars-rating__item stars-rating_on"></li>
                        <li class="stars-rating__item stars-rating_on"></li>
                        <li class="stars-rating__item stars-rating_on"></li>
                        <li class="stars-rating__item stars-rating_off"></li>
                    </ul>
                    <a href="/card-company.php#reviews" class="offer-reviews__text">
                        26 отзывов
                    </a>
                </div>
            </div>
        </div>
        <div class="card-company__table-body mb-30">
            <table>
                <tbody>
                    <tr>
                        <td>сырьё</td>
                        <td>Керамический материал</td>
                    </tr>
                    <tr>
                        <td>Вес</td>
                        <td>0.3 – 1 кг%</td>
                    </tr>
                    <tr>
                        <td>цена за кг</td>
                        <td>4 000 – 15 000 ₽</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-company__block">
            <div class="card-company__block-head">
                <div class="card-company__block-title">Время работы</div>
                <div class="card-company__block-schedule-label _open">открыто</div>
                <!-- <div class="card-company__block-schedule-label _close">закрыто</div> -->
            </div>
            <div class="card-company__block-schedule">
                <ul>
                    <li>пн-пт: <span>10:00 - 19:00</span></li>
                    <li>сб-вс: <span>по предварительной записи</span></li>
                </ul>
            </div>
        </div>
        <a href="/card-company.php" class="btn btn_add-param">
            Открыть профиль компании
        </a>
    </div>
</div>
<!-- Popup offer-retail end-->

<!-- Popup offer-opt-->
<div id="popup-offer-opt" class="offer-popup offer-popup_opt mfp-hide">
    <div class="offer-popup__body">
        <div class="d-flex align-items-center offer__profil mb-30">
            <div class="offer__avatar mr-10 _premium">
                <img src="assets/img/avatar.jpg" alt="">
            </div>
            <div>
                <div class="offer__name">Выкуп катализаторов</div>
                <div class="offer-reviews">
                    <ul class="stars-rating__wrapper">
                        <li class="stars-rating__item stars-rating_on"></li>
                        <li class="stars-rating__item stars-rating_on"></li>
                        <li class="stars-rating__item stars-rating_on"></li>
                        <li class="stars-rating__item stars-rating_on"></li>
                        <li class="stars-rating__item stars-rating_off"></li>
                    </ul>
                    <a href="/card-company.php#reviews" class="offer-reviews__text">
                        26 отзывов
                    </a>
                </div>
            </div>
        </div>
        <div class="card-company__table-body mb-30">
            <table>
                <thead>
                    <tr>
                        <th>весовая категория</th>
                        <th>платина – pt</th>
                        <th>палладий – pd</th>
                        <th>родий – rh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0,1 - 49.99 кг</td>
                        <td>65%</td>
                        <td>65%</td>
                        <td>65%</td>
                    </tr>
                    <tr>
                        <td>50 - 99.99 кг</td>
                        <td>65%</td>
                        <td>65%</td>
                        <td>65%</td>
                    </tr>
                    <tr>
                        <td>100 - 199.99 кг</td>
                        <td>65%</td>
                        <td>65%</td>
                        <td>65%</td>
                    </tr>
                    <tr>
                        <td>200 - 499.99 кг</td>
                        <td>65%</td>
                        <td>65%</td>
                        <td>65%</td>
                    </tr>
                    <tr>
                        <td>0,1 - 49.99 кг.</td>
                        <td>65%</td>
                        <td>65%</td>
                        <td>65%</td>
                    </tr>
                    <tr>
                        <td>500+ кг</td>
                        <td>65%</td>
                        <td>65%</td>
                        <td>65%</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-company__block">
            <div class="card-company__block-head">
                <div class="card-company__block-title">Время работы</div>
                <div class="card-company__block-schedule-label _open">открыто</div>
                <!-- <div class="card-company__block-schedule-label _close">закрыто</div> -->
            </div>
            <div class="card-company__block-schedule">
                <ul>
                    <li>пн-пт: <span>10:00 - 19:00</span></li>
                    <li>сб-вс: <span>по предварительной записи</span></li>
                </ul>
            </div>
        </div>
        <a href="/card-company.php" class="btn btn_add-param">
            Открыть профиль компании
        </a>
    </div>
</div>
<!-- Popup offer-opt end-->

<!-- Popup param-->
<div id="popup-param" class="param-popup mfp-hide mfp-with-anim">
    <div class="param-popup__body">
        <div class="container">
            <h3 class="h3 param__title">
                Параметры поиска
            </h3>
            <form action="#" class="params" id="param-form">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h4 class="h4 param__sub-title">
                            Дополнительный сервис
                        </h4>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-30">
                                <label class="param__checkbox custom-checkbox">
                                    <input checked="" class="d-none" name='param-1' type="checkbox" value="Безналичный расчет">
                                    <span class="custom-checkbox__point"></span>
                                    Безналичный расчет
                                </label>
                                <label class="param__checkbox custom-checkbox">
                                    <input checked="" class="d-none" name='param-2' type="checkbox" value="Выездная оценка">
                                    <span class="custom-checkbox__point"></span>
                                    Выездная оценка
                                </label>
                                <label class="param__checkbox custom-checkbox">
                                    <input class="d-none" name='param-3' type="checkbox" value="Гарантия цены">
                                    <span class="custom-checkbox__point"></span>
                                    Гарантия цены
                                </label>
                                <label class="param__checkbox custom-checkbox">
                                    <input checked="" class="d-none" name='param-4' type="checkbox" value="Оплата на месте">
                                    <span class="custom-checkbox__point"></span>
                                    Оплата на месте
                                </label>
                            </div>
                            <div class="col-12 col-md-6 mb-30">
                                <label class="param__checkbox custom-checkbox">
                                    <input class="d-none" type="checkbox" name='param-5' value="Помол сырья">
                                    <span class="custom-checkbox__point"></span>
                                    Помол сырья
                                </label>
                                <label class="param__checkbox custom-checkbox">
                                    <input checked="" class="d-none" name='param-6' type="checkbox" value="Удаление катализатора">
                                    <span class="custom-checkbox__point"></span>
                                    Удаление катализатора
                                </label>
                                <label class="param__checkbox custom-checkbox">
                                    <input class="d-none" name='param-7' type="checkbox" value="Доплата после анализа">
                                    <span class="custom-checkbox__point"></span>
                                    Доплата после анализа
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-30">
                        <h4 class="h4 param__sub-title">
                            Типы сырья
                        </h4>
                        <label class="param__checkbox custom-checkbox">
                            <input checked="" class="d-none" name='param-8' type="checkbox" value="Керамический материал">
                            <span class="custom-checkbox__point"></span>
                            Керамический материал
                        </label>
                        <label class="param__checkbox custom-checkbox">
                            <input checked="" class="d-none" name='param-9' type="checkbox" value="Металлический материал">
                            <span class="custom-checkbox__point"></span>
                            Металлический материал
                        </label>
                    </div>
                    <div class="col-12 col-md-3 mb-30">
                        <h4 class="h4 param__sub-title">
                            Время работы
                        </h4>
                        <label class="param__checkbox custom-checkbox">
                            <input checked="" class="d-none" name='param-10' type="checkbox" name='' value="Работает сейчас">
                            <span class="custom-checkbox__point"></span>
                            Работает сейчас
                        </label>
                    </div>
                </div>
            </form>
            <div class="param__buttons">
                <button class="btn btn_add-param" id="param-add">
                    Применить параметры
                </button>
                <button class="btn btn_reset-param" id="param-reset">
                    Сбросить параметры
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Popup param end-->


<?php include("footer.php"); ?>