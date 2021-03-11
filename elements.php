<?php include("header.php"); ?>

<div class="container">
    <div class="mt-20 mb-20">
        <a href="#" class="btn btn_phone">
            Позвонить
        </a>
    </div>

    <div class="mt-20 mb-20">
        <a href="#" class="btn btn_yellow">
            оставить отзыв
        </a>
    </div>

    <div class="mt-20 mb-20">
        <a href="#" class="btn btn_green">
            Найти
        </a>
    </div>

    <div class="mt-20 mb-20">
        <a href="#" class="btn btn_add-param">
            Применить параметры
        </a>
    </div>

    <div class="mt-20 mb-20">
        <a href="#" class="btn btn_reset-param">
            Сбросить параметры
        </a>
    </div>

    <div class="mt-20 mb-20">
        <a href="#" class="btn btn_reset-param">
            Отменить
        </a>
    </div>

    <div class="mt-20 mb-20">
        <a href="#" class="btn btn_black">
            Сохранить изменения
        </a>
    </div>

    <div class="mt-20 mb-20">
        <a href="#" class="btn btn_red">
            Удалить
        </a>
    </div>

    <div class="tab tab-js mb-20">

        <div class="tab__wrapper">
            <div class="tab__item active" data-tab="1">
                Основная информация
            </div>
            <div class="tab__item" data-tab="2">
                Отзывы
            </div>
            <div class="tab__item" data-tab="3">
                Адреса
            </div>
        </div>

        <div class="tab__content active" data-tab="1">
            <h2>
                Content - 1
            </h2>
        </div>

        <div class="tab__content" data-tab="2">
            <h2>
                Content - 2
            </h2>
        </div>

    </div>


    <div class="form mb-20">

        <div class="form-group row align-items-center mb-20">
            <div class="col-lg-3">
                <label class="form-input__label">Лейбл</label>
            </div>
            <div class="col-lg-9">
                <div class="form-input__wrapp">
                    <input class="form-input" placeholder="Плейсхолдер">
                    <div class="form-input__line"></div>
                    <span class="form-input__error">Текст ошибки</span>
                </div>
            </div>
        </div>

        <div class="form-group row align-items-center mb-20">
            <div class="col-lg-3">
                <label class="form-input__label">Лейбл</label>
            </div>
            <div class="col-lg-9">
                <div class="form-input__wrapp done">
                    <input class="form-input" placeholder="Плейсхолдер">
                    <div class="form-input__line"></div>
                    <span class="form-input__error">Текст ошибки</span>
                </div>
            </div>
        </div>

        <div class="form-group row align-items-center mb-20">
            <div class="col-lg-3">
                <label class="form-input__label">Лейбл</label>
            </div>
            <div class="col-lg-9">
                <div class="form-input__wrapp error">
                    <input class="form-input" placeholder="Плейсхолдер">
                    <div class="form-input__line"></div>
                    <span class="form-input__error">Текст ошибки</span>
                </div>
            </div>
        </div>

        <div class="form-group row align-items-center mb-20">
            <div class="col-lg-3">
                <label class="form-input__label">Лейбл</label>
            </div>
            <div class="col-lg-9">
                <div class="form-input__wrapp error">
                    <input class="form-input" placeholder="Плейсхолдер">
                    <div class="form-input__line"></div>
                    <span class="form-input__error">Текст ошибки</span>
                </div>
            </div>
        </div>

        <div class="form-group row align-items-center mb-20">
            <div class="col-lg-3">
                <label class="form-input__label">Лейбл</label>
            </div>
            <div class="col-lg-9">
                <div class="form-input__wrapp">
                    <select class="custom-select custom-select_js">
                        <option value="" disabled selected hidden>Выберите из списка</option>
                        <option value="1">Пункт #1</option>
                        <option value="0">Пункт #2</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group row align-items-center mb-20">
            <div class="col-lg-3">
                <label class="form-input__label">Укажите<br> телефон</label>
            </div>
            <div class="col-lg-9">
                <div class="form-input__wrapp form-input-phone">
                    <input class="form-input mask-phone" placeholder="+7 999 999-99-99">
                    <div class="form-input__line"></div>
                    <span class="form-input__error">Некорректный номер</span>
                </div>
            </div>
        </div>

        <div class="form-group row align-items-center mb-20">
            <div class="col-lg-3">
                <label class="form-input__label">Оцените сервис</label>
            </div>
            <div class="col-lg-9">
                <div class="star-rating">
                    <fieldset>
                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor"></label>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="form-group row mb-20">
            <div class="col-lg-3">
                <label class="form-input__label">Оставьте отзыв</label>
            </div>
            <div class="col-lg-9">
                <div class="form-input__wrapp">
                    <textarea name="" class="form-input" cols="30" rows="5">

                    </textarea>
                </div>
            </div>
        </div>
        <div class="mt-20 mb-20">
            <a href="#" class="btn btn_yellow">
                оставить отзыв
            </a>
        </div>

        <div class="mb-20 mt-20">
            <label class="custom-checkbox">
                <input checked class="d-none" type="checkbox">
                <span class="custom-checkbox__point"></span>
                Я согласен с <a href="#" class="link">политикой конфиденциальности</a>
            </label>
        </div>

    </div>

    <div class="search-wrapper mb-20 mt-20">
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

    <div class="mb-20 mt-20">
        <label class="custom-checkbox">
            <input checked class="d-none" type="checkbox">
            <span class="custom-checkbox__point"></span>
            Безналичный расчет
        </label>
    </div>

    <div class="mb-20 mt-20">
        <label class="custom-checkbox">
            <input class="d-none" type="checkbox">
            <span class="custom-checkbox__point"></span>
            Выездная оценка
        </label>
    </div>

</div>

<?php include("footer.php"); ?>