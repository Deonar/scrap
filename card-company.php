<?php include("header.php"); ?>

<section class="card-company section">
  <div class="container">
    <?php include("bredcrumbs.php"); ?>
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="sidebar card-company__sidebar">
          <div class="card-company__sidebar-head">
            <div class="card-company__logo-wrapp">
              <div class="card-company__logo _premium">
                <!-- <img src="assets/img/gallery-company/gallery-company-1.jpg" alt="" /> -->
              </div>
              <div class="card-company__logo-label-wrapp">
                <div class="card-company__logo-label _blue">реклама</div>
                <div class="card-company__logo-label _black">new</div>
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
                <a href="#reviews-tab-content" class="card-company__review-num show-reviews-js link scrollto">26
                  отзывов</a>
              </div>
            </div>
          </div>
          <div class="card-company__buttons">
            <a href="tel:7888888888" class="btn btn_phone"> Позвонить </a>
            <a href="#card-company-content" class="btn btn_yellow add-reviews-js  scrollto">Оставить отзыв</a>
          </div>
          <div class="card-company__block">
            <div class="card-company__block-head">
              <div class="card-company__block-title">Адрес</div>
            </div>
            <div class="card-company__street">
              Комсомольск-на-Амуре<br />
              <span>ул. Сталеваров-Строителей, 27б, к1, с3</span>
            </div>
            <a href="#address-tab-content"
              class="card-company__street-link link link-location show-address-js scrollto">Ещё 4 адреса</a>
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
        </div>
      </div>
      <div class="col-sm-12 col-md-8">
        <div id="card-company-content" class="page-content card-company__content">
          <div class="main-tab tab tab-js">
            <div class="tab__wrapper">
              <div id="prices-tab" class="tab__item tab-item-js active scrollto" data-tab="1">
                <svg class="tab__item-icon">
                  <use xlink:href="assets/img/icons/info.svg#tab-info"></use>
                </svg>
                <span>Основная</span> информация
              </div>
              <div id="reviews-tab" class="tab__item tab-item-js scrollto" data-tab="2">
                <svg class="tab__item-icon">
                  <use xlink:href="assets/img/icons/star.svg#tab-star"></use>
                </svg>
                Отзывы
              </div>
              <div id="address-tab" class="tab__item tab-item-js scrollto" data-tab="3">
                <svg class="tab__item-icon">
                  <use xlink:href="assets/img/icons/icon-location-3.svg#tab-location"></use>
                </svg>
                Адреса
              </div>
            </div>

            <!------- prices ------->
            <div id="prices-tab-content" class="tab__content tab-content-js active" data-tab="1">
              <div class="card-company__section">
                <h4 class="card-company__section-title">Принимаемое сырьё и цены</h4>

                <div class="card-company__accordeon-title-mob">Тип сырья</div>
                <ul class="card-company__accordeon-mob">
                  <li class="accordeon-wrapper accordeon-wrapper-js card-company__table">
                    <div class="card-company__table-title accordeon-tab accordeon-tab-js">Керамический материал</div>
                    <div class="card-company__table-body accordeon-content accordeon-content-js">
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
                  </li>
                  <li class="accordeon-wrapper accordeon-wrapper-js">
                    <div class="card-company__table-title accordeon-tab accordeon-tab-js _mob">Металлически материал
                    </div>
                    <ul class="card-company__material-cards accordeon-content accordeon-content-js">
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
                  </li>
                </ul>
              </div>

              <div class="card-company__section">
                <h4 class="card-company__section-title">Дополнительный сервис</h4>
                <ul class="card-company__services-list">
                  <li class="card-company__services-item">
                    <div class="card-company__services-icon">
                      <img src="assets/img/icons/credit-card-green.svg" alt="" />
                    </div>
                    <div class="card-company__services-text">Безналичный расчет</div>
                  </li>
                  <li class="card-company__services-item">
                    <div class="card-company__services-icon">
                      <img src="assets/img/icons/arrows-green.svg" alt="" />
                    </div>
                    <div class="card-company__services-text">Помол сырья</div>
                  </li>
                  <li class="card-company__services-item">
                    <div class="card-company__services-icon">
                      <img src="assets/img/icons/pistol-green.svg" alt="" />
                    </div>
                    <div class="card-company__services-text">Выездная оценка</div>
                  </li>
                  <li class="card-company__services-item">
                    <div class="card-company__services-icon">
                      <img src="assets/img/icons/exhaust-green.svg" alt="" />
                    </div>
                    <div class="card-company__services-text">Удаление катализатора</div>
                  </li>
                  <li class="card-company__services-item">
                    <div class="card-company__services-icon">
                      <img src="assets/img/icons/garanty-green.svg" alt="" />
                    </div>
                    <div class="card-company__services-text">Гарантия цены</div>
                  </li>
                  <li class="card-company__services-item">
                    <div class="card-company__services-icon">
                      <img src="assets/img/icons/arrow-credit-card.svg" alt="" />
                    </div>
                    <div class="card-company__services-text">Доплата после анализа</div>
                  </li>
                  <li class="card-company__services-item">
                    <div class="card-company__services-icon">
                      <img src="assets/img/icons/location-green.svg" alt="" />
                    </div>
                    <div class="card-company__services-text">Оплата на месте</div>
                  </li>
                </ul>
              </div>
              <div class="card-company__section">
                <h4 class="card-company__section-title">Фотографии</h4>
                <ul class="card-company__gallery-list popup-gallery">
                  <li class="card-company__gallery-item">
                    <a href="assets/img/gallery-company/gallery-company-1.jpg" rel="alternate">
                      <img src="assets/img/gallery-company/gallery-company-1.jpg" alt="" />
                    </a>
                  </li>
                  <li class="card-company__gallery-item">
                    <a href="assets/img/gallery-company/gallery-company-2.jpg" rel="alternate">
                      <img src="assets/img/gallery-company/gallery-company-2.jpg" alt="" />
                    </a>
                  </li>
                  <li class="card-company__gallery-item">
                    <a href="assets/img/gallery-company/gallery-company-3.jpg" rel="alternate">
                      <img src="assets/img/gallery-company/gallery-company-3.jpg" alt="" />
                    </a>
                  </li>
                  <li class="card-company__gallery-item">
                    <a href="assets/img/gallery-company/gallery-company-4.jpg" rel="alternate">
                      <img src="assets/img/gallery-company/gallery-company-4.jpg" alt="" />
                    </a>
                  </li>
                  <li class="card-company__gallery-item">
                    <a href="assets/img/gallery-company/gallery-company-1.jpg" rel="alternate">
                      <img src="assets/img/gallery-company/gallery-company-1.jpg" alt="" />
                    </a>
                  </li>
                  <li class="card-company__gallery-item">
                    <a href="assets/img/gallery-company/gallery-company-2.jpg" rel="alternate">
                      <img src="assets/img/gallery-company/gallery-company-2.jpg" alt="" />
                    </a>
                  </li>
                  <li class="card-company__gallery-item">
                    <a href="assets/img/gallery-company/gallery-company-3.jpg" rel="alternate">
                      <img src="assets/img/gallery-company/gallery-company-3.jpg" alt="" />
                    </a>
                  </li>
                  <li class="card-company__gallery-item">
                    <a href="assets/img/gallery-company/gallery-company-4.jpg" rel="alternate">
                      <img src="assets/img/gallery-company/gallery-company-4.jpg" alt="" />
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!------- reviews ------->
            <div id="reviews-tab-content" class="tab__content tab-content-js" data-tab="2">
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
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами
                        прибора. Рекомендую всем обращаться к этой компании.</p>
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
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами
                        прибора. Рекомендую всем обращаться к этой компании.</p>
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
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами
                        прибора. Рекомендую всем обращаться к этой компании.</p>
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
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами
                        прибора. Рекомендую всем обращаться к этой компании.</p>
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
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами
                        прибора. Рекомендую всем обращаться к этой компании.</p>
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
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами
                        прибора. Рекомендую всем обращаться к этой компании.</p>
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
                      <p>Сделка произошла очень быстро, минут 15, наверное. Оплату произвели в точности с расчетами
                        прибора. Рекомендую всем обращаться к этой компании.</p>
                    </div>
                  </li>
                  <button id="btn-more" class="reviews__btn-more btn btn_gray">Показать ещё 5 отзывов</button>
                </ul>
              </div>
              <div class="card-company__section reviews__no-reviews">
                <div class="reviews__no-reviews-content">
                  <div class="reviews__no-reviews-title">У этой компании пока нет отзывов</div>
                  <div class="reviews__no-reviews-sub-title">Будьте первым! Оставьте свой отзыв, если уже сотрудничали с
                    этой компанией.</div>
                  <a href="#card-company-content"
                    class="reviews__no-reviews-btn btn btn_yellow add-reviews-js scrollto">Оставить отзыв</a>
                </div>
              </div>
            </div>
            <!------- address ------->
            <div id="address-tab-content" class="tab__content tab-content-js" data-tab="3">
              <div class="card-company__section map">
                <div id="yandex-map" class="map-body" style="width: 100%; height: 440px"></div>
              </div>
              <div class="card-company__section">
                <h4 class="card-company__section-title _mob">Адреса</h4>
                <ul class="map-address__list" id="map-address">
                  <li class="map-address__item" data-coord-x="55.191700569517366" data-coord-y="61.430302499999904">
                    <div class="map-address__item-num">1</div>
                    <div class="map-address__item-text">
                      <div class="map-address__item-title">Комсомольск-на-Амуре</div>
                      <div class="map-address__item-sub-title">ул. Сталеваров-Строителей, 27б, к1, с3</div>
                    </div>
                    <a href="https://yandex.ru/maps/?text=г. Челябинск, ул. Механическая 101/2&amp;roistat_visit=115264"
                      class="map-address__item-link link link-location">Показать на карте</a>
                  </li>
                  <li class="map-address__item" data-coord-x="55.17811556954169" data-coord-y="61.344208">
                    <div class="map-address__item-num">2</div>
                    <div class="map-address__item-text">
                      <div class="map-address__item-title">Комсомольск-на-Амуре #2</div>
                      <div class="map-address__item-sub-title">ул. Сталеваров-Строителей, 27б, к1, с3</div>
                    </div>
                    <a href="https://yandex.ru/maps/?text=г. Челябинск, ул. Механическая 101/2&amp;roistat_visit=115264"
                      class="map-address__item-link link link-location">Показать на карте</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>

          <div class="new-reviews__wrapper">
            <button class="btn-come__back come-back-js">Назад</button>
            <div class="new-reviews">
              <h4 class="card-company__section-title">Новый отзыв</h4>
              <form action="#" class="new-reviews__form form" id="review-form">
                <div class="form-group row">
                  <div class="col-lg-3">
                    <label class="form-input__label">Как вас зовут?</label>
                  </div>
                  <div class="col-lg-9">
                    <div class="form-input__wrapp">
                      <input class="form-input mask-string" name="name" type="text" placeholder="Укажите ваше имя"
                        required />
                      <div class="form-input__line"></div>
                      <span class="form-input__error">Не верно указано имя</span>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-3">
                    <label class="form-input__label">Укажите<br />
                      телефон</label>
                  </div>
                  <div class="col-lg-9">
                    <div class="form-input__wrapp form-input-phone">
                      <input class="form-input mask-phone" name="phone" type="text" placeholder="+7 999 999-99-99"
                        maxlength="16" required />
                      <div class="form-input__line"></div>
                      <span class="form-input__error">Не верно указан номер</span>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-3">
                    <label class="form-input__label">Оцените сервис</label>
                  </div>
                  <div class="col-lg-9">
                    <div class="star-rating">
                      <fieldset>
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label for="star5" title="Outstanding"></label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label for="star4" title="Very Good"></label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label for="star3" title="Good"></label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label for="star2" title="Poor"></label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label for="star1" title="Very Poor"></label>
                      </fieldset>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-3">
                    <label class="form-input__label">Оставьте отзыв</label>
                  </div>
                  <div class="col-lg-9">
                    <div class="form-input__wrapp">
                      <textarea name="comment" class="form-input" cols="30" rows="5"> </textarea>
                    </div>
                  </div>
                </div>
                <!-- Сообщение об ошибке сервера -->
                <div class="network-error" style="display: none;">Не удалось отправить отзыв. Произошла ошибка на
                  сервере. Обновите страницу или попробуйте отправить отзыв позже.</div>

                <button type="submit" class="form-submit btn btn_yellow reviews-finish-js">оставить отзыв</button>
                <label class="custom-checkbox">
                  <input checked="" class="d-none" type="checkbox" />
                  <span class="custom-checkbox__point"></span>Я согласен с
                  <a href="#" class="link">политикой конфиденциальности</a>
                </label>
              </form>
            </div>
          </div>
          <div class="thanks__for-reviews__wrapper">
            <button class="btn-come__back come-back-js">Назад</button>
            <div class="thanks__for-reviews">
              <img src="assets/img/icons/hand-star.svg" alt="" class="thanks__for-reviews-icon" />
              <div class="thanks__for-reviews-title">Спасибо за обратную связь!</div>
              <div class="thanks__for-reviews-text">Ваш отзыв отправлен на модерацию. В течение 24 часов ваш отзыв будет
                опубликован в случае успешно пройденной модерации.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Maps -->
<script src="//api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&lang=ru-RU" type="text/javascript">
</script>
<script defer src="assets/js/map.js"></script>

<?php include("footer.php"); ?>