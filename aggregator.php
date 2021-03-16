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
                            <select class="custom-select custom-select_js input_no-line">
                                <option value="" disabled selected hidden>Выберите из списка</option>
                                <option value="1">Пункт #1</option>
                                <option value="0">Пункт #2</option>
                            </select>
                        </div>
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Модель авто
                            </div>
                            <select class="custom-select custom-select_js input_no-line" placeholder="Выберите из списка">
                                <option value="1">Пункт #1</option>
                                <option value="0">Пункт #2</option>
                            </select>
                        </div>
                        <div class="search-input__item">
                            <div class="search-input__label">
                                Год выпуска
                            </div>
                            <select class="custom-select custom-select_js input_no-line" placeholder="Выберите из списка">
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
                                <input class="form-input" name="number" placeholder="А 999 АА" maxlength="6">
                            </div>
                        </div>
                        <div class="search-input__item search-input_region">
                            <div class="search-input__label">
                                Регион
                            </div>
                            <div class="form-input__wrapp">
                                <input class="form-input" name="region" placeholder="777" maxlength="3">
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

            </div>

        </div>

        <div class="regulations">
            <div class="regulations__items row">
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

        <div class="filter">
            <a class="btn btn_add-param">
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
                <div class="displaying__row active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="displaying__grid">
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

        <div class="offer offer_grid mb-40">

            <div class="offer__item offer_status">
                <div class="offer__item_wrap content-wrapper-js active open">
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
                                    <div class="offer-reviews__text">
                                        1 отзыв
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
                            <a href="#" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                        </div>
                        <div class="offer-service">
                            <div class="offer__sub-title">
                                дополнительный сервис
                            </div>
                            <ul class="service__list">
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/credit-card-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrows-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/pistol-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/exhaust-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/garanty-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
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
                        <a href="#" class="link">
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
                                    <div class="offer-reviews__text">
                                        1 отзыв
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
                            <a href="#" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                        </div>
                        <div class="offer-service">
                            <div class="offer__sub-title">
                                дополнительный сервис
                            </div>
                            <ul class="service__list">
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/credit-card-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrows-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/pistol-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/exhaust-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/garanty-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
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
                        <a href="#" class="link">
                            Узнать больше
                        </a>
                    </div>
                </div>
            </div>

            <div class="offer__item offer_status">
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
                                    <div class="offer-reviews__text">
                                        1 отзыв
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
                            <a href="#" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                        </div>
                        <div class="offer-service">
                            <div class="offer__sub-title">
                                дополнительный сервис
                            </div>
                            <ul class="service__list">
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/credit-card-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrows-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/pistol-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/exhaust-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/garanty-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
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
                        <a href="#" class="link">
                            Узнать больше
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="offer offer_row mb-40">

            <div class="offer__item offer_status">
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
                                    <div class="offer-reviews__text">
                                        1 отзыв
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
                            <a href="#" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                        </div>
                        <div class="offer-service">
                            <div class="offer__sub-title">
                                дополнительный сервис
                            </div>
                            <ul class="service__list">
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/credit-card-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrows-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/pistol-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/exhaust-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/garanty-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
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
                        <a href="#" class="link">
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
                                    <div class="offer-reviews__text">
                                        1 отзыв
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
                            <a href="#" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                        </div>
                        <div class="offer-service">
                            <div class="offer__sub-title">
                                дополнительный сервис
                            </div>
                            <ul class="service__list">
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/credit-card-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrows-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/pistol-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/exhaust-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/garanty-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
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
                        <a href="#" class="link">
                            Узнать больше
                        </a>
                    </div>
                </div>
            </div>

            <div class="offer__item offer_status">
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
                                    <div class="offer-reviews__text">
                                        1 отзыв
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
                            <a href="#" class="card-company__street-link link link-location">Ещё 4 адреса</a>
                        </div>
                        <div class="offer-service">
                            <div class="offer__sub-title">
                                дополнительный сервис
                            </div>
                            <ul class="service__list">
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/credit-card-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrows-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/pistol-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/exhaust-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/garanty-green.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
                                    <span class="service__icon">
                                        <img src="assets/img/icons/arrow-credit-card.svg" alt="">
                                    </span>
                                </li>
                                <li class="service__item">
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
                        <a href="#" class="link">
                            Узнать больше
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<?php include("footer.php"); ?>