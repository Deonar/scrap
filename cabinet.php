<?php include("header.php"); ?>

<section class="cabinet card-company section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="sidebar card-company__sidebar">
          <h2 class="sidebar-title h2">Личный кабинет</h2>
          <div class="card-company__sidebar-head">
            <div class="card-company__logo-wrapp">
              <div class="card-company__logo _premium">
                <img src="assets/img/icons/arrow-round.svg" class="img-plug" alt="" />
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
      <div class="col-sm-12 col-md-8">
        <div id="card-company-content" class="page-content cabinet__content">
          <div class="rating-top">
            <h2 class="rating-top__title h2">Выведи компанию в ТОП!</h2>
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
            <div class="tab__content tab-content-js active" data-tab="1">
              <div class="card-company__section-row mb-20">
                <h4 class="card-company__section-title">Компании</h4>
                <a href="#" class="btn btn_add-filial">Добавить филиал</a>
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
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/credit-card-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/arrows-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/pistol-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/exhaust-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/garanty-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/arrow-credit-card.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
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
                </div>
                <button class="company__btn-more btn btn_add-param button-more-js">Подробнее</button>
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
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/credit-card-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/arrows-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/pistol-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/exhaust-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/garanty-green.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
                        <div class="card-company__services-icon">
                          <img src="assets/img/icons/arrow-credit-card.svg" alt="" />
                        </div>
                      </li>
                      <li class="card-company__services-item">
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
                </div>
                <button class="company__btn-more btn btn_add-param button-more-js">Подробнее</button>
              </div>
            </div>
            <!------- reviews ------->
            <div class="tab__content tab-content-js" data-tab="2">
              <div class="card-company__section">
                <h4 class="card-company__section-title">Отзывы</h4>
                <ul class="card-company__reviews-list reviews-list more-list-js">
                  <li class="reviews-item _moderation more-item-js">
                    <div class="reviews-item__top">
                      <div class="reviews-name">Игорь Тальков</div>
                      <div class="reviews-status">На модерации</div>
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
              <h4 class="card-company__section-title">Основная информация</h4>
              <div class="company-section">
                <div class="company-section__title">Личная информация</div>
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
                <a href="#" class="company__edit-btn btn btn_add-param">Редактировать</a>
              </div>
              <div class="company-section">
                <div class="company-section__title">Юридическая информация</div>
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
                <a href="#" class="company__edit-btn btn btn_add-param">Редактировать</a>
              </div>
            </div>
            <!------- photo ------->
            <div class="tab__content tab-content-js" data-tab="4">
              <h4 class="card-company__section-title">Фотографии</h4>
              <div class="card-company__section-sub-title">Загрузите не более 10 фотографии вашей компании. Размер одной фотографии не должен превышать 5 MB.</div>
              <ul class="card-company__gallery-list card-company__gallery-download ">
                <li class="card-company__gallery-item ">
                  <span class="delete-btn"></span>
                  <img src="assets/img/gallery-company/gallery-company-1.jpg" alt="" />
                </li>
                <li class="card-company__gallery-item _loading">
                  <img src="assets/img/gallery-company/gallery-company-1.jpg" alt="" />
                  <div class="loading-level"><span style="width: 60%;"></span></div>
                </li>
                <li class="card-company__gallery-item"></li>
                <li class="card-company__gallery-item"></li>
                <li class="card-company__gallery-item"></li>
                <li class="card-company__gallery-item"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
