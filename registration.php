<?php include("header.php"); ?>

<section class="cabinet card-company section">
  <div class="container">
    <h2 class="page-title mb-10">Регистрация компании</h2>
    <div class="page-sub-title mb-40">Заполните данные профиля, чтобы воспользоваться всеми возможностями площадки.</div>
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <div class="page-content registration__content">
          <ul class="registration__stage-list">
            <li id="stage-1" class="registration__stage-item">
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
                        <input class="form-input" placeholder="Укажите ваши ФИО" />
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
                        <input class="form-input mask-phone" placeholder="+7 999 999-99-99" maxlength="16" />
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
                        <input class="form-input" placeholder="Например, ООО АвтоМет" />
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
                        <input class="form-input" placeholder="1234422144" />
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
                        <input class="form-input" placeholder="1234422144" />
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
                        <input class="form-input" placeholder="1234422144" />
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
                      <div class="passport-download">
                        <!-- <img src="assets/img/passport.jpg" alt=""> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="edit-company__btns d-flex justify-content-between">
                <a href="#stage-2" id="to-stage-2" class="btn btn_black ml-auto scrollto">Сохранить и продолжить</a>
              </div>
            </li>
            <li id="stage-2" class="registration__stage-item hidden" >
              <h4 class="primary-title mb-20">Компания</h4>
              <div class="company-section edit-company__section">
                <div class="company-section__title mb-25">Информация о компании <span>Заполните все поля</span></div>
                <div class="edit-company__form">
                  <div class="edit-company__logo row align-items-center mb-20">
                    <div class="col-4 col-lg-3">
                      <div class="card-company__logo _img-edit">
                        <!-- <img src="assets/img/icons/arrow-round.svg" class="img-plug" alt="" /> -->
                      </div>
                    </div>
                    <div class="col-8 col-lg-9">
                      <div class="edit-company__logo-text">Загрузите логотип вашей компании или фотографию цеха снаружи. Размер изображение не должен превышать 2 MB.</div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3">
                      <label class="form-input__label">Город</label>
                    </div>
                    <div class="col-lg-9">
                      <div class="form-input__wrapp">
                        <input class="form-input" placeholder="Укажите или выберите из списка" />
                        <div class="form-input__line"></div>
                        <span class="form-input__error">Неверный город</span>
                      </div>
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
                        <input class="form-input" placeholder="Например, 27б, к1, с3" />
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
                          <input class="form-input mask-phone" placeholder="+7 999 999-99-99" maxlength="16" />
                          <div class="form-input__line"></div>
                          <span class="form-input__error">Неверная улица</span>
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
                          <li class="working-btn"><span>пн</span></li>
                          <li class="working-btn active"><span>вт</span></li>
                          <li class="working-btn active"><span>ср</span></li>
                          <li class="working-btn active"><span>чт</span></li>
                          <li class="working-btn active"><span>пт</span></li>
                          <li class="working-btn active"><span>сб</span></li>
                          <li class="working-btn"><span>вс</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row align-items-center mb-15">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                      <div class="custom-checkbox__wrapp d-flex">
                        <label class="custom-checkbox">
                          <input checked="" class="d-none" type="checkbox" />
                          <span class="custom-checkbox__point"></span>
                          Ежедневно
                        </label>
                        <label class="custom-checkbox">
                          <input checked="" class="d-none" type="checkbox" />
                          <span class="custom-checkbox__point"></span>
                          В одно и то же время
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group form-group__range row align-items-center mb-15">
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
                  <div class="form-group form-group__range row align-items-center mb-15">
                    <div class="col-2 col-lg-3">
                      <label class="form-input__label">ВТ</label>
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
                  <div class="form-group form-group__range row align-items-center mb-15">
                    <div class="col-2 col-lg-3">
                      <label class="form-input__label">СР</label>
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
                  <div class="form-group form-group__range row align-items-center mb-15">
                    <div class="col-2 col-lg-3">
                      <label class="form-input__label">ЧТ</label>
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
                <a href="#stage-3" id="to-stage-3" class="btn btn_black scrollto">Сохранить и продолжить</a>
              </div>
            </li>
            <li id="stage-3" class="registration__stage-item hidden" >
              <h4 class="primary-title mb-10">Виды и цены каталитического сырья</h4>
              <div class="page-sub-title mb-25">Заполните данные профиля, чтобы воспользоваться всеми возможностями площадки.</div>
              <div class="company-section edit-company__section">
                <div class="company-section__title mb-25">Керамический материал</div>
                <div class="edit-company__form mb-30">
                  <div class="form-group__title mb-20">Весовая категория #1</div>
                  <div class="form-group form-group__range row align-items-center mb-15">
                    <div class="col-12 col-lg-3">
                      <label class="form-input__label">Весовая категория</label>
                    </div>
                    <div class="col-12 col-lg-9">
                      <div class="form-input__range-row d-flex">
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">от</span>
                          <input class="form-input form-input__range-body" required type="number" value="0.1" maxlength="3" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">кг</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">до</span>
                          <input class="form-input form-input__range-body" required type="number" value="1" maxlength="3" />
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
                          <input class="form-input form-input__range-body" required type="number" value="1" maxlength="3" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">%</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text _bold">Pd</span>
                          <input class="form-input form-input__range-body" required type="number" value="1" maxlength="3" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">%</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text _bold">Rh</span>
                          <input class="form-input form-input__range-body" required type="number" value="1" maxlength="3" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group__title mb-20">Весовая категория #2</div>
                  <div class="form-group form-group__range row align-items-center mb-15">
                    <div class="col-12 col-lg-3">
                      <label class="form-input__label">Весовая категория</label>
                    </div>
                    <div class="col-12 col-lg-9">
                      <div class="form-input__range-row d-flex">
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">от</span>
                          <input class="form-input form-input__range-body" required type="number" value="0.1" maxlength="3" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">кг</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text _bold">до</span>
                          <input class="form-input form-input__range-body" required type="number" value="1" maxlength="3" />
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
                          <input class="form-input form-input__range-body" required type="number" value="1" maxlength="3" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">%</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text _bold">Pd</span>
                          <input class="form-input form-input__range-body" required type="number" value="1" maxlength="3" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">%</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text _bold">Rh</span>
                          <input class="form-input form-input__range-body" required type="number" value="1" maxlength="3" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="link">Добавить весовую категорию</button>
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
                          <input class="form-input form-input__range-body" required type="number" value="100" maxlength="4" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">до</span>
                          <input class="form-input form-input__range-body" required type="number" value="100" maxlength="4" />
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
                          <input class="form-input form-input__range-body" required type="number" value="100" maxlength="4" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">до</span>
                          <input class="form-input form-input__range-body" required type="number" value="100" maxlength="4" />
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
                <a href="#stage-finish" id="to-stage-finish" class="btn btn_black ml-auto scrollto">Сохранить и продолжить</a>
              </div>
            </li>
            <li id="stage-finish" class="registration__stage-item hidden" >
              <h4 class="primary-title mb-10">Виды и цены сырья бытовой техники</h4>
              <div class="page-sub-title mb-25">Необходимо указать расценки хотя бы для одного вида сырья</div>
              <div class="company-section edit-company__section">
                <div class="company-section__title mb-25">Бытовая техника</div>
                <div class="edit-company__form mb-30">
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
                          <input class="form-input form-input__range-body" required type="number" value="100" maxlength="4" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">до</span>
                          <input class="form-input form-input__range-body" required type="number" value="100" maxlength="4" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="edit-company__form mb-30">
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
                          <input class="form-input form-input__range-body" required type="number" value="100" maxlength="4" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">до</span>
                          <input class="form-input form-input__range-body" required type="number" value="100" maxlength="4" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="edit-company__form mb-30">
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
                          <input class="form-input form-input__range-body" required type="number" value="100" maxlength="4" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                        <div class="form-input__wrapp form-input__range">
                          <span class="form-input__label-text">до</span>
                          <input class="form-input form-input__range-body" required type="number" value="100" maxlength="4" />
                          <div class="form-input__line"></div>
                          <div class="form-input__range-value">₽</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="link">Добавить вид техники</button>
              </div>
              <div class="edit-company__btns d-flex justify-content-between">
                <a href="#stage-3" id="back-stage-3" class="btn btn_reset-param scrollto">Назад</a>
                <label class="custom-checkbox">
                  <input checked="" class="d-none" type="checkbox" />
                  <span class="custom-checkbox__point"></span>
                  Применить цены ко всем филиалам
                </label>
                <a href="#" id="finish-registration" class="btn btn_green ml-auto">Завершить регистрацию</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 sidebar__registration">
        <div class="sidebar mt-45">
          <div class="sidebar__registration-content">
            <img src="assets/img/registration-bar.png" style="width: 100%; height: auto" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
