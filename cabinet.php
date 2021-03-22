<?php include("header.php"); ?>

<section class="cabinet card-company section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="sidebar card-company__sidebar">
          <h2 class="sidebar-title page-title">Личный кабинет</h2>
          <div class="card-company__sidebar-head">
            <div class="card-company__logo-wrapp">
              <div class="card-company__logo _premium">
                <img src="assets/img/passport.jpg" alt="" />
              </div>
              <div class="card-company__logo-label-wrapp">
                <div class="card-company__logo-label _blue">реклама</div>
              </div>
            </div>
            <div class="card-company__title-wrapp">
              <h3 class="card-company__title">Выкуп катализаторов</h3>
              <div class="card-company__rating-block">
                <ul class="stars-rating__wrapper">
                  <li class="stars-rating__item stars-rating_on"></li>
                  <li class="stars-rating__item stars-rating_on"></li>
                  <li class="stars-rating__item stars-rating_on"></li>
                  <li class="stars-rating__item stars-rating_on"></li>
                  <li class="stars-rating__item stars-rating_off"></li>
                </ul>
                <div class="card-company__review-num">26 отзывов</div>
              </div>
            </div>
          </div>
          <div class="card-company__buttons">
            <a href="#" class="btn btn_green btn_price">Баланс <b>4 190 ₽</b> <span></span> </a>
            <a href="#" class="btn btn_blue">Вывести в топ</a>
            <a href="#" class="btn btn_exit"> <span> Выйти</span></a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-8 page-content">
        <div id="card-company-content" class="cabinet__content">
          <div class="rating-top">
            <h2 class="rating-top__title page-title">Выведи компанию в ТОП!</h2>
            <div class="rating-top__text">Выделение одной компании и всех филиалов в одной категории агрегатора для увеличения количества клиентов!</div>
            <a href="#" class="rating-top__btn btn btn_blue">Вывести в топ за 990 ₽/мес</a>
          </div>
          <div class="main-tab tab tab-js">
            <div class="tab__wrapper">
              <div class="tab__item tab-item-js active" data-tab="1">
                <svg class="tab__item-icon">
                  <use xlink:href="assets/img/icons/location-tab.svg#tab-company"></use>
                </svg>
                Компании
              </div>
              <div class="tab__item tab-item-js" data-tab="2">
                <svg class="tab__item-icon">
                  <use xlink:href="assets/img/icons/star.svg#tab-star"></use>
                </svg>
                Отзывы
              </div>
              <div class="tab__item tab-item-js" data-tab="3">
                <svg class="tab__item-icon">
                  <use xlink:href="assets/img/icons/user.svg#tab-info"></use>
                </svg>
                <span>Основная</span> информация
              </div>
              <div class="tab__item tab-item-js" data-tab="4">
                <svg class="tab__item-icon">
                  <use xlink:href="assets/img/icons/image.svg#tab-photo"></use>
                </svg>
                Фото
              </div>
            </div>

            <!------- company ------->
            <div class="tab__content all-company tab-content-js active" data-tab="1">
              <div class="card-company__section-row mb-20">
                <h4 class="primary-title mb-20">Компании</h4>
                <a href="#edit-info-filialcompany" id="btn-add-filialcompany" class="btn btn_add-filial scrollto">Добавить филиал</a>
              </div>

              <div class="company-section content-wrapper-js">
                <div class="company-section__top">
                  <ul class="company-label__list">
                    <li class="company-label">Каталитическое сырьё</li>
                    <li class="company-label">Бытовая техника</li>
                  </ul>
                  <div class="company-info__row">
                    <div class="company-info__block">
                      <div class="company-info__block-title">Адрес</div>
                      <div class="company-info__address">
                        Комсомольск-на-Амуре
                        <span>ул. Сталеваров-Строителей, 27б, к1, с3</span>
                      </div>
                    </div>
                    <div class="company-info__block">
                      <div class="company-info__block-title">телефон</div>
                      <a href="tel:+79999999999" class="company-info__tell"> 8 990 435-33-22 </a>
                    </div>
                  </div>
                </div>
                <div class="company-section__bottom content-js">
                  <div class="company-info__block">
                    <div class="company-info__block-title">дополнительный сервис</div>
                    <ul class="company__services-list card-company__services-list">
                      <li class="card-company__services-item" data-tippy-content="Безналичный расчет">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/credit-card-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Помол сырья">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/arrows-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Выездная оценка">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/pistol-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Удаление катализатора">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/exhaust-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Гарантия цены">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/garanty-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Доплата после анализа">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/arrow-credit-card.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Оплата на месте">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/location-green.svg" alt="" />
                        </div>
                      </li>
                    </ul>
                  </div>
                  <ul class="company-accordeon">
                    <li class="accordeon-wrapper accordeon-wrapper-js card-company__table">
                      <div class="accordeon-tab accordeon-tab-js">Керамический материал</div>
                      <div class="accordeon-content accordeon-content-js">
                        <div class="card-company__table-body">
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
                        <ul class="card-company__material-cards">
                          <li class="card-company__material-card">
                            <div class="card-company__material-title">Металлический материал</div>
                            <div class="card-company__material-sub-title">Импорт</div>
                            <div class="card-company__material-price">12 000 – 47 000 ₽/кг</div>
                          </li>
                          <li class="card-company__material-card">
                            <div class="card-company__material-title">Металлический материал</div>
                            <div class="card-company__material-sub-title">отечественный</div>
                            <div class="card-company__material-price">12 000 – 47 000 ₽/кг</div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="accordeon-wrapper accordeon-wrapper-js">
                      <div class="accordeon-tab accordeon-tab-js">Цены на сырьё бытовой техники</div>
                      <div class="accordeon-content accordeon-content-js">
                        <div class="card-company__table-body table-price">
                          <table>
                            <tbody>
                              <tr>
                                <td>Холодильники</td>
                                <td>1 000 - 3 000 ₽/кг</td>
                              </tr>
                              <tr>
                                <td>свч печи</td>
                                <td>1 000 - 3 000 ₽/кг</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="edit-company__btns d-flex justify-content-between mt-10">
                    <a href="#edit-info-allcompany" id="btn-edit-info-allcompany" class="btn btn_reset-param edit-info-company-js scrollto">Редактировать информацию</a>
                    <a href="#edit-info-material" id="btn-edit-info-material" class="btn btn_reset-param ml-10 mr-auto scrollto">Редактирование цен</a>
                    <a href="#delete-branch-popup" class="btn btn_black btn_red scrollto popup">Удалить</a>
                  </div>
                </div>
                <button class="company__btn-more btn btn_add-param button-more-js">Подробнее</button>
              </div>

              <div class="company-section content-wrapper-js">
                <div class="company-section__top">
                  <ul class="company-label__list">
                    <li class="company-label">Каталитическое сырьё</li>
                    <li class="company-label">Бытовая техника</li>
                    <li class="company-label _filial">Филиал</li>
                  </ul>
                  <div class="company-info__row">
                    <div class="company-info__block">
                      <div class="company-info__block-title">Адрес</div>
                      <div class="company-info__address">
                        Комсомольск-на-Амуре
                        <span>ул. Сталеваров-Строителей, 27б, к1, с3</span>
                      </div>
                    </div>
                    <div class="company-info__block">
                      <div class="company-info__block-title">телефон</div>
                      <a href="tel:+79999999999" class="company-info__tell"> 8 990 435-33-22 </a>
                    </div>
                  </div>
                </div>
                <div class="company-section__bottom content-js">
                  <div class="company-info__block">
                    <div class="company-info__block-title">дополнительный сервис</div>
                    <ul class="company__services-list card-company__services-list">
                      <li class="card-company__services-item" data-tippy-content="Безналичный расчет">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/credit-card-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Помол сырья">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/arrows-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Выездная оценка">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/pistol-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Удаление катализатора">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/exhaust-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Гарантия цены">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/garanty-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Доплата после анализа">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/arrow-credit-card.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item" data-tippy-content="Оплата на месте">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/location-green.svg" alt="" />
                        </div>
                      </li>
                    </ul>
                  </div>
                  <ul class="company-accordeon">
                    <li class="accordeon-wrapper accordeon-wrapper-js card-company__table">
                      <div class="accordeon-tab accordeon-tab-js">Керамический материал</div>
                      <div class="accordeon-content accordeon-content-js">
                        <div class="card-company__table-body">
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
                        <ul class="card-company__material-cards">
                          <li class="card-company__material-card">
                            <div class="card-company__material-title">Металлический материал</div>
                            <div class="card-company__material-sub-title">Импорт</div>
                            <div class="card-company__material-price">12 000 – 47 000 ₽/кг</div>
                          </li>
                          <li class="card-company__material-card">
                            <div class="card-company__material-title">Металлический материал</div>
                            <div class="card-company__material-sub-title">отечественный</div>
                            <div class="card-company__material-price">12 000 – 47 000 ₽/кг</div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="accordeon-wrapper accordeon-wrapper-js">
                      <div class="accordeon-tab accordeon-tab-js">Цены на сырьё бытовой техники</div>
                      <div class="accordeon-content accordeon-content-js">
                        <div class="card-company__table-body table-price">
                          <table>
                            <tbody>
                              <tr>
                                <td>Холодильники</td>
                                <td>1 000 - 3 000 ₽/кг</td>
                              </tr>
                              <tr>
                                <td>свч печи</td>
                                <td>1 000 - 3 000 ₽/кг</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="edit-company__btns d-flex justify-content-between mt-10">
                    <a href="#edit-info-filialcompany" id="btn-edit-info-filialcompany" class="btn btn_reset-param scrollto">Редактировать информацию</a>
                    <a href="#edit-info-appliances" id="btn-edit-info-appliances" class="btn btn_reset-param ml-10 mr-auto scrollto">Редактирование цен</a>
                    <a href="#delete-branch-popup" class="btn btn_black btn_red scrollto popup">Удалить</a>
                  </div>
                </div>
                <button class="company__btn-more btn btn_add-param button-more-js">Подробнее</button>
              </div>
            </div>
            <!------- reviews ------->
            <div class="tab__content tab-content-js" data-tab="2">
              <div class="card-company__section">
                <h4 class="primary-title mb-20">Отзывы</h4>
                <ul class="card-company__reviews-list reviews-list more-list-js">
                  <li class="reviews-item more-item-js">
                    <div class="reviews-item__top">
                      <div class="reviews-name">Игорь Тальков</div>
                      <div class="reviews-status">12 / 02 / 2021</div>
                    </div>
                    <div class="reviews-item__info-row">
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">телефон</div>
                        <a href="tel:+79998888888" class="reviews-item__tell">+7 999 xxx-xx-xx</a>
                      </div>
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">оценка</div>
                        <div class="reviews-rating">
                          <ul class="stars-rating__wrapper">
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_off"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="reviews-item__text">
                      <div class="reviews-item__title">отзыв</div>
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами прибора. Рекомендую всем обращаться к этой компании.</p>
                    </div>
                  </li>
                  <li class="reviews-item more-item-js">
                    <div class="reviews-item__top">
                      <div class="reviews-name">Игорь Тальков</div>
                      <div class="reviews-status">12 / 02 / 2021</div>
                    </div>
                    <div class="reviews-item__info-row">
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">телефон</div>
                        <a href="tel:+79998888888" class="reviews-item__tell">+7 999 xxx-xx-xx</a>
                      </div>
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">оценка</div>
                        <div class="reviews-rating">
                          <ul class="stars-rating__wrapper">
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_off"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="reviews-item__text">
                      <div class="reviews-item__title">отзыв</div>
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами прибора. Рекомендую всем обращаться к этой компании.</p>
                    </div>
                  </li>
                  <li class="reviews-item more-item-js">
                    <div class="reviews-item__top">
                      <div class="reviews-name">Игорь Тальков</div>
                      <div class="reviews-status">12 / 02 / 2021</div>
                    </div>
                    <div class="reviews-item__info-row">
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">телефон</div>
                        <a href="tel:+79998888888" class="reviews-item__tell">+7 999 xxx-xx-xx</a>
                      </div>
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">оценка</div>
                        <div class="reviews-rating">
                          <ul class="stars-rating__wrapper">
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_off"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="reviews-item__text">
                      <div class="reviews-item__title">отзыв</div>
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами прибора. Рекомендую всем обращаться к этой компании.</p>
                    </div>
                  </li>
                  <li class="reviews-item more-item-js">
                    <div class="reviews-item__top">
                      <div class="reviews-name">Игорь Тальков</div>
                      <div class="reviews-status">12 / 02 / 2021</div>
                    </div>
                    <div class="reviews-item__info-row">
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">телефон</div>
                        <a href="tel:+79998888888" class="reviews-item__tell">+7 999 xxx-xx-xx</a>
                      </div>
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">оценка</div>
                        <div class="reviews-rating">
                          <ul class="stars-rating__wrapper">
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_off"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="reviews-item__text">
                      <div class="reviews-item__title">отзыв</div>
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами прибора. Рекомендую всем обращаться к этой компании.</p>
                    </div>
                  </li>
                  <li class="reviews-item more-item-js">
                    <div class="reviews-item__top">
                      <div class="reviews-name">Игорь Тальков</div>
                      <div class="reviews-status">12 / 02 / 2021</div>
                    </div>
                    <div class="reviews-item__info-row">
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">телефон</div>
                        <a href="tel:+79998888888" class="reviews-item__tell">+7 999 xxx-xx-xx</a>
                      </div>
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">оценка</div>
                        <div class="reviews-rating">
                          <ul class="stars-rating__wrapper">
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_off"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="reviews-item__text">
                      <div class="reviews-item__title">отзыв</div>
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами прибора. Рекомендую всем обращаться к этой компании.</p>
                    </div>
                  </li>
                  <li class="reviews-item more-item-js">
                    <div class="reviews-item__top">
                      <div class="reviews-name">Игорь Тальков</div>
                      <div class="reviews-status">12 / 02 / 2021</div>
                    </div>
                    <div class="reviews-item__info-row">
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">телефон</div>
                        <a href="tel:+79998888888" class="reviews-item__tell">+7 999 xxx-xx-xx</a>
                      </div>
                      <div class="reviews-item__info">
                        <div class="reviews-item__title">оценка</div>
                        <div class="reviews-rating">
                          <ul class="stars-rating__wrapper">
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_on"></li>
                            <li class="stars-rating__item stars-rating_off"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="reviews-item__text">
                      <div class="reviews-item__title">отзыв</div>
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами прибора. Рекомендую всем обращаться к этой компании.</p>
                    </div>
                  </li>
                  <button id="btn-more" class="reviews__btn-more btn btn_gray">Показать ещё 5 отзывов</button>
                </ul>
              </div>
            </div>
            <!------- main info ------->
            <div class="tab__content tab-content-js" data-tab="3">
              <h4 class="primary-title mb-20">Основная информация</h4>
              <div class="company-section">
                <div class="company-section__title mb-25">Личная информация</div>
                <div class="company-info__row">
                  <div class="company-info__block">
                    <div class="company-info__block-title">фио</div>
                    <div class="company-info__address">Иванов Алексей Федорович</div>
                  </div>
                  <div class="company-info__block">
                    <div class="company-info__block-title">телефон</div>
                    <a href="tel:+79999999999" class="company-info__tell">+7 999 999-99-99</a>
                  </div>
                </div>
                <a href="#edit-info-personal" id="btn-edit-info-personal" class="company__edit-btn btn btn_add-param scrollto">Редактировать</a>
              </div>
              <div class="company-section">
                <div class="company-section__title mb-25">Юридическая информация</div>
                <div class="card-company__table-body table-price" style="padding: 0 0 25px 0">
                  <table>
                    <tbody>
                      <tr>
                        <td>название организации</td>
                        <td>ООО Выкуп катализаторов</td>
                      </tr>
                      <tr>
                        <td>форма работы</td>
                        <td>ООО</td>
                      </tr>
                      <tr>
                        <td>инн</td>
                        <td>1234422144</td>
                      </tr>
                      <tr>
                        <td>кпп</td>
                        <td>1234422144</td>
                      </tr>
                      <tr>
                        <td>огрн</td>
                        <td>1234422144</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="company-info__block">
                  <div class="company-info__block-title">фото документов</div>
                  <div class="company-info__photo-doc">
                    <img src="assets/img/passport.jpg" alt="" />
                  </div>
                </div>
                <a href="#edit-info-legal" id="btn-edit-info-legal" class="company__edit-btn btn btn_add-param scrollto">Редактировать</a>
              </div>
            </div>
            <!------- photo ------->
            <div class="tab__content tab-content-js" data-tab="4">
              <h4 class="primary-title mb-20">Фотографии</h4>
              <div class="card-company__section-sub-title">Загрузите не более 10 фотографии вашей компании. Размер одной фотографии не должен превышать 5 MB.</div>
              <ul class="card-company__gallery-list card-company__gallery-download">
                <li class="card-company__gallery-item">
                  <span class="delete-btn"></span>
                  <img src="assets/img/gallery-company/gallery-company-1.jpg" alt="" />
                </li>
                <li class="card-company__gallery-item _loading">
                  <img src="assets/img/gallery-company/gallery-company-1.jpg" alt="" />
                  <div class="loading-level"><span style="width: 60%"></span></div>
                </li>
                <li class="card-company__gallery-item"></li>
                <li class="card-company__gallery-item"></li>
                <li class="card-company__gallery-item"></li>
                <li class="card-company__gallery-item"></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- ======= Edit info of company and filial======== -->
        <div id="edit-info-allcompany" class="edit-company__wrapp hidden">
          <button class="btn-come__back come-back-js">Назад</button>
          <form action="#">
            <div class="company-section edit-company__section">
              <div class="company-section__title mb-25" id="edit-company-title">Информация о компании <span>Заполните все поля</span></div>
              <div class="edit-company__form">

                <div class="edit-company__logo row align-items-center mb-20" id="edit-company-logo">
                  <div class="col-4 col-lg-3">
                    <label class="card-company__logo _img-edit">
                      <input type="file" class="hidden" multiple="">
                      <!-- <img src="assets/img/icons/arrow-round.svg" class="img-plug" alt="" /> -->
                    </label>
                  </div>
                  <div class="col-8 col-lg-9">
                    <div class="edit-company__logo-text">Загрузите логотип вашей компании или фотографию цеха снаружи. Размер изображение не должен превышать 2 MB.</div>
                  </div>
                </div>

                <div class="form-group row align-items-center mb-15">
                  <div class="col-lg-3">
                    <label class="form-input__label">Категории<br> сбыта</label>
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
                        <li class="working-btn active"><span>пн</span></li>
                        <li class="working-btn active"><span>вт</span></li>
                        <li class="working-btn active"><span>ср</span></li>
                        <li class="working-btn active"><span>чт</span></li>
                        <li class="working-btn active"><span>пт</span></li>
                        <li class="working-btn"><span>сб</span></li>
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
                  <div class="working-day__item form-group form-group__range row align-items-center mb-15">
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
                  <div class="working-day__item form-group form-group__range row align-items-center mb-15">
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
                  <div class="working-day__item form-group form-group__range row align-items-center mb-15">
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
                  <div class="working-day__item form-group form-group__range row align-items-center mb-15">
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
                  <div class="working-day__item form-group form-group__range row align-items-center mb-15">
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
                  <div class="working-day__item form-group form-group__range row align-items-center mb-15 hidden">
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
                  <div class="working-day__item form-group form-group__range row align-items-center mb-15 hidden">
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
                      <label class="form-input__label">ПН-ВС</label>
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
              <a href="#card-company-content" class="btn btn_reset-param come-back-js scrollto">Отменить</a>
              <a href="#card-company-content" class="btn btn_black come-back-js scrollto">Сохранить изменения</a>
            </div>
          </form>
        </div>

        <!-- ======= Edit info of personal information ======== -->
        <div id="edit-info-personal" class="edit-company__wrapp hidden">
          <button class="btn-come__back come-back-js">Назад</button>
          <div class="company-section edit-company__section">
            <div class="company-section__title mb-25">Личная информация</div>
            <div class="edit-company__form mb-30">
              <div class="form-group row align-items-center mb-15">
                <div class="col-sm-3 col-lg-4">
                  <label class="form-input__label">Ваши ФИО</label>
                </div>
                <div class="col-sm-9 col-lg-8">
                  <div class="form-input__wrapp">
                    <input class="form-input mask-string" type="text" placeholder="Тальков Игорь Николаевич" />
                    <div class="form-input__line"></div>
                    <span class="form-input__error">Некорректное имя</span>
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
            <div class="edit-company__btns d-flex justify-content-between">
              <a href="#card-company-content" class="btn btn_reset-param come-back-js scrollto">Отменить</a>
              <a href="#card-company-content" class="btn btn_black come-back-js scrollto">Сохранить изменения</a>
            </div>
          </div>
        </div>

        <!-- ======= Edit info of Legal information ======== -->
        <div id="edit-info-legal" class="edit-company__wrapp hidden">
          <button class="btn-come__back come-back-js">Назад</button>
          <div class="company-section edit-company__section">
            <div class="company-section__title mb-25">Юридическая информация</div>
            <div class="edit-company__form mb-30">
              <div class="form-group row align-items-center mb-15">
                <div class="col-lg-3">
                  <label class="form-input__label">Название организации</label>
                </div>
                <div class="col-lg-9">
                  <div class="form-input__wrapp">
                    <input class="form-input" placeholder="ООО Выкуп катализаторов" />
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
                    <input type="file" class="hidden" multiple="">
                    <!-- <img src="assets/img/passport.jpg" alt=""> -->
                  </label>
                </div>
              </div>
            </div>
            <div class="edit-company__btns d-flex justify-content-between">
              <a href="#card-company-content" class="btn btn_reset-param come-back-js scrollto">Отменить</a>
              <a href="#card-company-content" class="btn btn_black come-back-js scrollto">Сохранить изменения</a>
            </div>
          </div>
        </div>

        <!-- ======= Edit info of material price ======== -->
        <div id="edit-info-material" class="edit-company__wrapp hidden">
          <button class="btn-come__back come-back-js">Назад</button>
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
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="1" min="0"  step="0.1"/>
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">кг</div>
                    </div>
                    <div class="form-input__wrapp form-input__range">
                      <span class="form-input__label-text">до</span>
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="1" min="0"  step="0.1"/>
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
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="1" min="0"  step="0.1"/>
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">%</div>
                    </div>
                    <div class="form-input__wrapp form-input__range">
                      <span class="form-input__label-text _bold">Pd</span>
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="1" min="0"  step="0.1"/>
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">%</div>
                    </div>
                    <div class="form-input__wrapp form-input__range">
                      <span class="form-input__label-text _bold">Rh</span>
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="1" min="0"  step="0.1"/>
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
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="0.1" min="0"  step="0.1"/>
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">кг</div>
                    </div>
                    <div class="form-input__wrapp form-input__range">
                      <span class="form-input__label-text _bold">до</span>
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="1" min="0"  step="0.1"/>
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
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="1" min="0"  step="0.1"/>
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">%</div>
                    </div>
                    <div class="form-input__wrapp form-input__range">
                      <span class="form-input__label-text _bold">Pd</span>
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="1" min="0"  step="0.1"/>
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">%</div>
                    </div>
                    <div class="form-input__wrapp form-input__range">
                      <span class="form-input__label-text _bold">Rh</span>
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="1" min="0"  step="0.1"/>
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
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="100" min="0"  step="0.1"  max="100000"/>
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">₽</div>
                    </div>
                    <div class="form-input__wrapp form-input__range">
                      <span class="form-input__label-text">до</span>
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="100" min="0"  step="0.1"  max="100000"/>
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
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="100" min="0"  step="0.1"  max="100000"/>
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">₽</div>
                    </div>
                    <div class="form-input__wrapp form-input__range">
                      <span class="form-input__label-text">до</span>
                      <input class="form-input form-input__range-body mask-number" type="number" placeholder="100" min="0"  step="0.1"  max="100000"/>
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">₽</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="edit-company__btns d-flex justify-content-between">
            <a href="#card-company-content" class="btn btn_reset-param come-back-js scrollto">Отменить</a>

            <label class="custom-checkbox">
              <input checked="" class="d-none" type="checkbox" />
              <span class="custom-checkbox__point"></span>
              Применить цены ко всем филиалам
            </label>
            <a href="#card-company-content" class="btn btn_black come-back-js scrollto">Сохранить изменения</a>
          </div>
        </div>

        <!-- ======= Edit info of appliances price ======== -->
        <div id="edit-info-appliances" class="edit-company__wrapp hidden">
          <button class="btn-come__back come-back-js">Назад</button>
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
                      <input class="form-input form-input__range-body mask-number" type="number" value="100" maxlength="4" />
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">₽</div>
                    </div>
                    <div class="form-input__wrapp form-input__range">
                      <span class="form-input__label-text">до</span>
                      <input class="form-input form-input__range-body mask-number" type="number" value="100" maxlength="4" />
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
                      <input class="form-input form-input__range-body mask-number" type="number" value="100" maxlength="4" />
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">₽</div>
                    </div>
                    <div class="form-input__wrapp form-input__range">
                      <span class="form-input__label-text">до</span>
                      <input class="form-input form-input__range-body mask-number" type="number" value="100" maxlength="4" />
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
                      <input class="form-input form-input__range-body mask-number" type="number" value="100" maxlength="4" />
                      <div class="form-input__line"></div>
                      <div class="form-input__range-value">₽</div>
                    </div>
                    <div class="form-input__wrapp form-input__range">
                      <span class="form-input__label-text">до</span>
                      <input class="form-input form-input__range-body mask-number" type="number" value="100" maxlength="4" />
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
            <a href="#card-company-content" class="btn btn_reset-param come-back-js scrollto">Отменить</a>
            <label class="custom-checkbox">
              <input checked="" class="d-none" type="checkbox" />
              <span class="custom-checkbox__point"></span>
              Применить цены ко всем филиалам
            </label>
            <a href="#card-company-content" class="btn btn_black come-back-js scrollto">Сохранить изменения</a>
          </div>
        </div>

      </div>
    </div>

    <!-- popup  Delete branch -->
    <div id="delete-branch-popup" class="delete-branch-popup popup-custom mfp-hide">
      <div class="popup-body">
        <div class="popup-title">Удалить филиал?</div>
        <div class="popup-text">После удаления, вы не сможете восстановить филлиал.</div>
        <div class="popup-btns d-flex justify-content-between">
          <button class="btn btn_red popup-close-js notice-show-js">Удалить</button>
          <button class="btn btn_reset-param popup-close-js">Отменить</button>
        </div>
      </div>
    </div>

    <div class="notice-popup notice-popup-js hidden">
      Филиал удален
      <div class="notice-popup__close notice-close-js"></div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
