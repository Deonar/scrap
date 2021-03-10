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

    </div>


</div>

<?php include("footer.php"); ?>