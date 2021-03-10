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
                <img src="assets/img/icons/arrow-round.svg" alt="" />
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
                <div class="card-company__review-num">26 отзывов</div>
              </div>
            </div>
          </div>
          <div class="card-company__buttons">
            <a href="#" class="btn btn_phone"> Позвонить </a>
            <a href="#" class="btn btn_yellow"> Оставить отзыв </a>
          </div>
          <div class="card-company__block">
            <div class="card-company__block-head">
              <div class="card-company__block-title">Адрес</div>
            </div>
            <div class="card-company__street">
              Комсомольск-на-Амуре
              <span>ул. Сталеваров-Строителей, 27б, к1, с3</span>
            </div>
            <a href="#" class="card-company__street-link">Ещё 4 адреса</a>
          </div>
          <div class="card-company__block">
            <div class="card-company__block-head">
              <div class="card-company__block-title">Время работы</div>
              <div class="card-company__block-schedule-label _open">открыто</div>
              <div class="card-company__block-schedule-label _close">закрыто</div>
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
        <div class="page-content card-company__content">
          <div class="main-tab tab tab-js">
            <div class="tab__wrapper">
              <div class="tab__item tab-item-js active" data-tab="1">
                <svg class="tab__item-icon">
                  <use xlink:href="assets/img/icons/info.svg#tab-info"></use>
                </svg>
                <span>Основная</span> информация
              </div>
              <div class="tab__item tab-item-js" data-tab="2">
                <svg class="tab__item-icon">
                  <use xlink:href="assets/img/icons/icon-location-3.svg#tab-location"></use>
                </svg>
                Отзывы
              </div>
              <div class="tab__item tab-item-js" data-tab="3">
                <svg class="tab__item-icon">
                  <use xlink:href="assets/img/icons/star.svg#tab-star"></use>
                </svg>
                Адреса
              </div>
            </div>

            <div class="tab__content tab-content-js active" data-tab="1">
              <div class="card-company__section">
                <h4 class="card-company__section-title">Принимаемое сырьё и цены</h4>

                <div class="card-company__accordeon-title-mob">Тип сырья</div>
                <ul class="card-company__accordeon-mob">
                  <li class="accordeon-wrapper-js card-company__table">
                    <div class="card-company__table-title accordeon-tab-js">Керамический материал</div>
                    <div class="card-company__table-body accordeon-content-js">
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
                  <li class="accordeon-wrapper-js">
                    <div class="card-company__material-title accordeon-tab-js _mob">Металлически материал</div>
                    <ul class="card-company__material-cards accordeon-content-js">
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

            <div class="tab__content tab-content-js" data-tab="2">
              <h2>Content - Отзывы</h2>
            </div>

            <div class="tab__content tab-content-js" data-tab="3">
              <h2>Content - Адреса</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
