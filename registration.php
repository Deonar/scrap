<?php include("header.php"); ?>

<section class="cabinet card-company section">
  <div class="container">
    <h2 class="page-title mb-10">Регистрация компании</h2>
    <div class="page-sub-title mb-40">Заполните данные профиля, чтобы воспользоваться всеми возможностями площадки.</div>
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <div class="page-content registration__content">
          <div class="registration__stage-list" id="forms-wrapper">
            <form action="#" id="stage-1" class="registration__stage-item">
              <h4 class="primary-title mb-20">Основная информация</h4>
              <div class="company-section edit-company__section">
                <div class="company-section__title mb-15">Личная информация <span>Заполните все поля</span></div>
                <div class="company-section__sub-title">Личные данные необходимы для регистрации профиля.</div>
                <div class="edit-company__form mb-30">
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-sm-3 col-lg-4">
                      <label class="form-input__label">Ваши ФИО</label>
                    </div>
                    <div class="col-sm-9 col-lg-8">
                      <div class="form-input__wrapp">
                        <input class="form-input mask-string" name="name" type="text" placeholder="Укажите ваши ФИО" autofocus required />
                        <div class="form-input__line"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-sm-3 col-lg-4">
                      <label class="form-input__label">Личный телефон</label>
                    </div>
                    <div class="col-sm-9 col-lg-8">
                      <div class="form-input__wrapp form-input-phone">
                        <input class="form-input mask-phone" name="phone" placeholder="+7 999 999-99-99" maxlength="16" required />
                        <div class="form-input__line"></div>
                        <span class="form-input__error">Некорректный номер</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="company-section edit-company__section">
                <div class="company-section__title mb-15">Юридическая информация <span>Заполните все поля</span></div>
                <div class="company-section__sub-title">Юридические данные необходимы для проверки и подтверждения существования компании.</div>
                <div class="registration__form mb-30">
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-sm-3 col-lg-3">
                      <label class="form-input__label">Название организации</label>
                    </div>
                    <div class="col-sm-9 col-lg-9">
                      <div class="form-input__wrapp">
                        <input class="form-input" placeholder="Например, ООО АвтоМет" name="name-company" />
                        <div class="form-input__line"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">Форма работы</label>
                    </div>
                    <div class="col-lg-9">
                      <div class="form-radio__group">
                        <input class="form-radio__input" type="radio" id="form-yp" name="forms-of-work" checked />
                        <label class="form-radio__label" for="form-yp">ИП</label>
                        <input class="form-radio__input" type="radio" id="form-ooo" name="forms-of-work" />
                        <label class="form-radio__label" for="form-ooo">ООО</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">ИНН</label>
                    </div>
                    <div class="col-lg-9">
                      <div class="form-input__wrapp">
                        <input class="form-input mask-number" placeholder="1234422144" />
                        <div class="form-input__line"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">КПП</label>
                    </div>
                    <div class="col-lg-9">
                      <div class="form-input__wrapp">
                        <input class="form-input mask-number" placeholder="1234422144" />
                        <div class="form-input__line"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">ОГРН</label>
                    </div>
                    <div class="col-lg-9">
                      <div class="form-input__wrapp">
                        <input class="form-input mask-number" placeholder="1234422144" />
                        <div class="form-input__line"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">Фото документов</label>
                    </div>
                    <div class="col-lg-9">
                      <div class="form-input__remark ml-auto" style="max-width: 100%">Загрузите фотографии документов. Размер одной фотографии не должен превышать 5 MB.</div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">Паспорт</label>
                    </div>
                    <div class="col-lg-9">
                      <label class="passport-download download-file">
                        <input type="file" class="hidden" multiple="" />
                        <!-- <img src="assets/img/passport.jpg" alt=""> -->
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="edit-company__btns d-flex justify-content-between">
                <button type="submit" class="btn btn_black ml-auto">Сохранить и продолжить</button>
              </div>
            </form>
            <form action="#" id="stage-2" class="registration__stage-item hidden">
              <h4 class="primary-title mb-20">Компания</h4>
              <div class="company-section edit-company__section">
                <div class="company-section__title mb-25">Информация о компании <span>Заполните все поля</span></div>
                <div class="edit-company__form">
                  <div class="edit-company__logo row align-items-center mb-20">
                    <div class="col-4 col-lg-3">
                      <label class="card-company__logo _img-edit">
                        <input type="file" class="hidden" multiple="" />
                        <!-- <img src="assets/img/icons/arrow-round.svg" class="img-plug" alt="" /> -->
                      </label>
                    </div>
                    <div class="col-8 col-lg-9">
                      <div class="edit-company__logo-text">Загрузите логотип вашей компании или фотографию цеха снаружи. Размер изображение не должен превышать 2 MB.</div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">Категории<br />
                        сбыта</label>
                    </div>
                    <div class="col-lg-9">
                      <select class="custom-select custom-select-tag_js" multiple>
                        <option value="">Выберите из списка</option>
                        <option value="metal">Каталитическое сырьё</option>
                        <option value="appliances">Бытовая техника</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">Город</label>
                    </div>
                    <div class="col-lg-9">
                      <select class="custom-select custom-select-search custom-search-select_js input_no-line" name="city">
                        <option value="" disabled selected hidden>Укажите или выберите из списка</option>
                        <option value="Москва">Москва</option>
                        <option value="Санкт-Петербург">Санкт-Петербург</option>
                        <option value="Челябинск">Челябинск</option>
                        <option value="Екатеринбург">Екатеринбург</option>
                        <option value="Краснодар">Краснодар</option>
                        <option value="Новосибирск">Новосибирск</option>
                        <option value="Белгород">Белгород</option>
                        <option value="Казань">Казань</option>
                        <option value="Татарстан">Татарстан</option>
                        <option value="Самара">Самара</option>
                        <option value="Ростов-на-Дону">Ростов-на-Дону</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">Улица</label>
                    </div>
                    <div class="col-lg-9">
                      <div class="form-input__wrapp">
                        <input class="form-input" placeholder="Например,  пер. Сталеваров-Строителей" />
                        <div class="form-input__line"></div>
                        <span class="form-input__error">Неверная улица</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">Дом</label>
                    </div>
                    <div class="col-lg-9">
                      <div class="form-input__wrapp form-input-phone">
                        <input class="form-input" placeholder="Например, 27б, к1, с3" type="text"  maxlength="10" />
                        <div class="form-input__line"></div>
                        <span class="form-input__error">Неверный дом</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">Телефон для связи</label>
                    </div>
                    <div class="col-lg-9">
                      <div class="form-input__remark-row">
                        <div class="form-input__wrapp form-input-phone">
                          <input class="form-input mask-phone" placeholder="+7 999 999-99-99" maxlength="16" required />
                          <div class="form-input__line"></div>
                          <span class="form-input__error">Не верно указан номер</span>
                        </div>
                        <div class="form-input__remark">Укажите номер, на который будут звонить ваши клиенты</div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">Режим работы</label>
                    </div>
                    <div class="col-lg-9">
                      <div class="form-input__wrapp">
                        <ul id="working-btns" class="working-btns">
                          <li class="working-btn active" data-day="1"><span>пн</span></li>
                          <li class="working-btn active" data-day="2"><span>вт</span></li>
                          <li class="working-btn active" data-day="3"><span>ср</span></li>
                          <li class="working-btn active" data-day="4"><span>чт</span></li>
                          <li class="working-btn active" data-day="5"><span>пт</span></li>
                          <li class="working-btn" data-day="6"><span>сб</span></li>
                          <li class="working-btn" data-day="7"><span>вс</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                      <div class="custom-checkbox__wrapp d-flex">
                        <label class="custom-checkbox">
                          <input class="d-none" type="checkbox" id="working-everyday-checkbox" />
                          <span class="custom-checkbox__point"></span>
                          Ежедневно
                        </label>
                        <label class="custom-checkbox">
                          <input class="d-none" type="checkbox" id="working-sametime-checkbox" />
                          <span class="custom-checkbox__point"></span>
                          В одно и то же время
                        </label>
                      </div>
                    </div>
                  </div>
                  <div id="working-day" class="working-day">
                    <div class="working-day__item form-group form-group__range row align-items-center mb-15" data-day="1">
                      <div class="col-2 col-lg-3">
                        <label class="form-input__label">ПН</label>
                      </div>
                      <div class="col-10 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">с</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="monday_from" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="monday_to" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="working-day__item form-group form-group__range row align-items-center mb-15" data-day="2">
                      <div class="col-2 col-lg-3">
                        <label class="form-input__label">ВТ</label>
                      </div>
                      <div class="col-10 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">с</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="tuesday_from" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="tuesday_to" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="working-day__item form-group form-group__range row align-items-center mb-15" data-day="3">
                      <div class="col-2 col-lg-3">
                        <label class="form-input__label">СР</label>
                      </div>
                      <div class="col-10 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">с</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="wednesday_from" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="wednesday_to" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="working-day__item form-group form-group__range row align-items-center mb-15" data-day="4">
                      <div class="col-2 col-lg-3">
                        <label class="form-input__label">ЧТ</label>
                      </div>
                      <div class="col-10 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">с</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="thursday_from" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="thursday_to" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="working-day__item form-group form-group__range row align-items-center mb-15" data-day="5">
                      <div class="col-2 col-lg-3">
                        <label class="form-input__label">ПТ</label>
                      </div>
                      <div class="col-10 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">с</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="friday_from" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="friday_to" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="working-day__item form-group form-group__range row align-items-center mb-15 hidden" data-day="6">
                      <div class="col-2 col-lg-3">
                        <label class="form-input__label">СБ</label>
                      </div>
                      <div class="col-10 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">с</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="saturday_from" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="saturday_to" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="working-day__item form-group form-group__range row align-items-center mb-15 hidden" data-day="7">
                      <div class="col-2 col-lg-3">
                        <label class="form-input__label">ВС</label>
                      </div>
                      <div class="col-10 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">с</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="sunday_from" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="sunday_to" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Everyday -->
                    <div class="form-group form-group__range row align-items-center mb-15 hidden" id="working-sametime">
                      <div class="col-2 col-lg-3">
                        <!-- <label class="form-input__label">ПН-ВС</label> -->
                      </div>
                      <div class="col-10 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">с</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="allday_from" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input" required type="time" min="00:00" max="24:00" name="allday_to" value="11:00" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">
                              <img src="assets/img/icons/time.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">Дополнительный сервис</label>
                    </div>
                    <div class="col-lg-9">
                      <div class="custom-checkbox__wrapp">
                        <label class="custom-checkbox mb-15">
                          <input checked="" class="d-none" type="checkbox" />
                          <span class="custom-checkbox__point"></span>
                          Безналичный расчет
                        </label>
                        <label class="custom-checkbox mb-15">
                          <input checked="" class="d-none" type="checkbox" />
                          <span class="custom-checkbox__point"></span>
                          Помол сырья
                        </label>
                        <label class="custom-checkbox mb-15">
                          <input checked="" class="d-none" type="checkbox" />
                          <span class="custom-checkbox__point"></span>
                          Выездная оценка
                        </label>
                        <label class="custom-checkbox mb-15">
                          <input checked="" class="d-none" type="checkbox" />
                          <span class="custom-checkbox__point"></span>
                          Удаление катализатора
                        </label>
                        <label class="custom-checkbox mb-15">
                          <input checked="" class="d-none" type="checkbox" />
                          <span class="custom-checkbox__point"></span>
                          Гарантия цены
                        </label>
                        <label class="custom-checkbox mb-15">
                          <input checked="" class="d-none" type="checkbox" />
                          <span class="custom-checkbox__point"></span>
                          Доплата после анализа
                        </label>
                        <label class="custom-checkbox mb-15">
                          <input checked="" class="d-none" type="checkbox" />
                          <span class="custom-checkbox__point"></span>
                          Оплата на месте
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="edit-company__btns d-flex justify-content-between">
                <a href="#stage-1" id="back-stage-1" class="btn btn_reset-param scrollto">Назад</a>
                <button type="submit" id="to-stage-3" class="btn btn_black">Сохранить и продолжить</button>
              </div>
            </form>

            <form action="#" id="stage-3" class="registration__stage-item hidden">
              <h4 class="primary-title mb-10">Виды и цены каталитического сырья</h4>
              <div class="page-sub-title mb-25">Заполните данные профиля, чтобы воспользоваться всеми возможностями площадки.</div>

              <div class="company-section edit-company__section repeater-js">
                <div class="company-section__title mb-25">Керамический материал</div>
                <div class="edit-company__form mb-30 repeater-list-js">
                  <div class="repeater-item-js">
                    <div class="form-group__title mb-20">Весовая категория #1</div>
                    <div class="form-group form-group__range row align-items-center mb-15">
                      <div class="col-12 col-lg-3">
                        <label class="form-input__label">Весовая категория</label>
                      </div>
                      <div class="col-12 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">от</span>
                            <input class="form-input form-input__range-body mask-number" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">кг</div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input form-input__range-body mask-number" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">кг</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-group__range row align-items-center mb-15">
                      <div class="col-12 col-lg-3">
                        <label class="form-input__label">% выплат по LME</label>
                      </div>
                      <div class="col-12 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text _bold">Pt</span>
                            <input class="form-input form-input__range-body mask-percent" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">%</div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text _bold">Pd</span>
                            <input class="form-input form-input__range-body mask-percent" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">%</div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text _bold">Rh</span>
                            <input class="form-input form-input__range-body mask-percent" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="repeater-item-js">
                    <div class="form-group__title mb-20">Весовая категория #2</div>
                    <div class="form-group form-group__range row align-items-center mb-15">
                      <div class="col-12 col-lg-3">
                        <label class="form-input__label">Весовая категория</label>
                      </div>
                      <div class="col-12 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">от</span>
                            <input class="form-input form-input__range-body mask-number" type="text" placeholder="0.1" min="0" step="0.1" maxlength="3" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">кг</div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input form-input__range-body mask-number" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">кг</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-group__range row align-items-center mb-15">
                      <div class="col-12 col-lg-3">
                        <label class="form-input__label">% выплат по LME</label>
                      </div>
                      <div class="col-12 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text _bold">Pt</span>
                            <input class="form-input form-input__range-body mask-percent" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">%</div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text _bold">Pd</span>
                            <input class="form-input form-input__range-body mask-percent" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">%</div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text _bold">Rh</span>
                            <input class="form-input form-input__range-body mask-percent" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="link repeater-btn_cat">Добавить весовую категорию</div>
              </div>

              <div class="company-section edit-company__section">
                <div class="company-section__title mb-25">Металлический материал (импорт)</div>
                <div class="edit-company__form">
                  <div class="form-group form-group__range row align-items-center">
                    <div class="col-12 col-lg-3">
                      <label class="form-input__label">Цена за кг</label>
                    </div>
                    <div class="col-12 col-lg-9">
                      <div class="form-input__range-row d-flex">
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">от</span>
                          <input class="form-input form-input__range-body mask-number" type="text" placeholder="100" min="0" step="0.1" maxlength="7" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">до</span>
                          <input class="form-input form-input__range-body mask-number" type="text" placeholder="100" min="0" step="0.1" maxlength="7" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="company-section edit-company__section">
                <div class="company-section__title mb-25">Металлический материал (отеч.)</div>
                <div class="edit-company__form">
                  <div class="form-group form-group__range row align-items-center">
                    <div class="col-12 col-lg-3">
                      <label class="form-input__label">Цена за кг</label>
                    </div>
                    <div class="col-12 col-lg-9">
                      <div class="form-input__range-row d-flex">
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">от</span>
                          <input class="form-input form-input__range-body mask-number" type="text" placeholder="100" min="0" step="0.1" maxlength="7" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">до</span>
                          <input class="form-input form-input__range-body mask-number" type="text" placeholder="100" min="0" step="0.1" maxlength="7" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="edit-company__btns d-flex justify-content-between">
                <a href="#stage-2" id="back-stage-2" class="btn btn_reset-param scrollto">Назад</a>
                <label class="custom-checkbox">
                  <input checked="" class="d-none" type="checkbox" />
                  <span class="custom-checkbox__point"></span>
                  Применить цены ко всем филиалам
                </label>
                <button type="submit" id="to-stage-finish" class="btn btn_black ml-auto">Сохранить и продолжить</button>
              </div>
            </form>
            
            <form action="#" id="stage-finish" class="registration__stage-item hidden">
              <h4 class="primary-title mb-10">Виды и цены сырья бытовой техники</h4>
              <div class="page-sub-title mb-25">Необходимо указать расценки хотя бы для одного вида сырья</div>
              <div class="company-section edit-company__section  repeater-js">
                <div class="company-section__title mb-25">Бытовая техника</div>
                <div class="repeater-list-js">
                  <div class="edit-company__form mb-30 repeater-item-js">
                    <div class="form-group row align-items-center mb-20">
                      <div class="col-lg-3">
                        <label class="form-input__label">Вид техники</label>
                      </div>
                      <div class="col-lg-9">
                        <div class="form-input__wrapp">
                          <select class="custom-select custom-select_js">
                            <option value="" disabled selected hidden>Выберите из списка</option>
                            <option value="1">Холодильники</option>
                            <option value="0">СВЧ печи</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-group__range row align-items-center">
                      <div class="col-12 col-lg-3">
                        <label class="form-input__label">Цена за кг</label>
                      </div>
                      <div class="col-12 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">от</span>
                            <input class="form-input form-input__range-body mask-number" type="text" value="100" maxlength="4" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">₽</div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input form-input__range-body mask-number" type="text" value="100" maxlength="4" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">₽</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="edit-company__form mb-30 repeater-item-js">
                    <div class="form-group row align-items-center mb-20">
                      <div class="col-lg-3">
                        <label class="form-input__label">Вид техники</label>
                      </div>
                      <div class="col-lg-9">
                        <div class="form-input__wrapp">
                          <select class="custom-select custom-select_js">
                            <option value="" disabled selected hidden>Выберите из списка</option>
                            <option value="1">Холодильники</option>
                            <option value="0">СВЧ печи</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-group__range row align-items-center">
                      <div class="col-12 col-lg-3">
                        <label class="form-input__label">Цена за кг</label>
                      </div>
                      <div class="col-12 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">от</span>
                            <input class="form-input form-input__range-body mask-number" type="text" value="100" maxlength="4" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">₽</div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input form-input__range-body mask-number" type="text" value="100" maxlength="4" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">₽</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="edit-company__form mb-30 repeater-item-js">
                    <div class="form-group row align-items-center mb-20">
                      <div class="col-lg-3">
                        <label class="form-input__label">Вид техники</label>
                      </div>
                      <div class="col-lg-9">
                        <div class="form-input__wrapp">
                          <select class="custom-select custom-select_js">
                            <option value="" disabled selected hidden>Выберите из списка</option>
                            <option value="1">Холодильники</option>
                            <option value="0">СВЧ печи</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-group__range row align-items-center">
                      <div class="col-12 col-lg-3">
                        <label class="form-input__label">Цена за кг</label>
                      </div>
                      <div class="col-12 col-lg-9">
                        <div class="form-input__range-row d-flex">
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">от</span>
                            <input class="form-input form-input__range-body mask-number" type="text" value="100" maxlength="4" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">₽</div>
                          </div>
                          <div class="form-input__wrapp form-input__range">
                            <span class="form-input__label-text">до</span>
                            <input class="form-input form-input__range-body mask-number" type="text" value="100" maxlength="4" />
                            <div class="form-input__line"></div>
                            <div class="form-input__range-value">₽</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="link repeater-btn_appliances">Добавить вид техники</div>
              </div>
              <div class="edit-company__btns d-flex justify-content-between">
                <a href="#stage-3" id="back-stage-3" class="btn btn_reset-param scrollto">Назад</a>
                <label class="custom-checkbox">
                  <input checked="" class="d-none" type="checkbox" />
                  <span class="custom-checkbox__point"></span>
                  Применить цены ко всем филиалам
                </label>
                <a href="#reg-finish-popup" type="submit" id="finish-registration" class="btn btn_green ml-auto popup">Завершить регистрацию</a>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 sidebar__registration">
        <div class="sidebar mt-45">
          <div class="sidebar__registration-content">
            <div id="progress-circle" class="ko-progress-circle" data-progress="0">
              <div class="ko-circle">
                <div class="full ko-progress-circle__slice">
                  <div class="ko-progress-circle__fill"></div>
                </div>
                <div class="ko-progress-circle__slice">
                  <div class="ko-progress-circle__fill"></div>
                  <div class="ko-progress-circle__fill ko-progress-circle__bar"></div>
                </div>
              </div>
              <div class="ko-progress-circle__overlay"></div>
              <div class="ko-progress-content">
                <div class="ko-progress-percent-wrapp">
                  <div id="progress-percent" class="ko-progress-percent">0</div>
                  <div class="ko-progress-percent-val">%</div>
                </div>
                <div class="ko-progress-text">
                  процент заполнения <br />
                  профиля
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="reg-finish-popup" class="reg-finish-popup popup-custom mfp-hide">
  <div class="popup-body">
    <div class="ko-progress-circle" data-progress="100">
      <div class="ko-circle">
        <div class="full ko-progress-circle__slice">
          <div class="ko-progress-circle__fill"></div>
        </div>
        <div class="ko-progress-circle__slice">
          <div class="ko-progress-circle__fill"></div>
          <div class="ko-progress-circle__fill ko-progress-circle__bar"></div>
        </div>
      </div>
      <div class="ko-progress-circle__overlay"></div>
      <div class="ko-progress-content">
        <div class="ko-progress-percent-wrapp">
          <div id="progress-percent" class="ko-progress-percent">100</div>
          <div class="ko-progress-percent-val">%</div>
        </div>
        <div class="ko-progress-text">
          процент заполнения <br />
          профиля
        </div>
      </div>
    </div>
    <div class="popup-title">
      Регистрация компании <br />
      прошла успешно!
    </div>
    <a href="/cabinet.php" class="link text-center">Перейти в личный кабинет</a>
    <a href="/cabinet.php" class="popup-custom-close mfp-close">×</a>
  </div>
</div>

<?php include("footer.php"); ?>