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
                <h2>
                    Content - 2
                </h2>
            </div>

        </div>

    </div>
</div>

<?php include("footer.php"); ?>