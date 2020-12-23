jQuery(document).ready(function ($) {
  //wow init
  new WOW().init();
  // startAuction
  $('#start-auction').on('click', function (e) {
    $('#offer').show();
    $('.auction-start').hide();
    var wow = new WOW();
    new WOW().init();
  });

  //Mob-menu
  $('.burgerJs').on('click', function (e) {
    $(this).toggleClass('active');
    $('body').toggleClass('overflow-h');
    $('#headerNavbar').toggleClass('active');
  });
  $('.navbar-menu a').on('click', function (e) {
    $('body').removeClass('overflow-h');
    $('#headerNavbar').removeClass('active');
    $('.burgerJs').removeClass('active');
  });
  $('#closeNavbar').on('click', function (e) {
    $('body').removeClass('overflow-h');
    $('#headerNavbar').removeClass('active');
    $('.burgerJs').removeClass('active');
  });

  //======================== TABS
  $('.retailTabJs').on('click', function (e) {
    $(this).addClass('active');
    $('.wholesaleTabJs').removeClass('active');
    $('.retailJs').show();
    $('.wholesaleJs').hide();
  });
  $('.wholesaleTabJs').on('click', function (e) {
    $(this).addClass('active');
    $('.retailTabJs').removeClass('active');
    $('.wholesaleJs').show();
    $('.retailJs').hide();
  });

  // Login reg Tabs
  $('.login-tab').on('click', function (e) {
    $('.reg-tab').removeClass('partners-link_active');
    $(this).addClass('partners-link_active');
    $('.login-block').show();
    $('.reg-block').hide();
  });
  $('.reg-tab').on('click', function (e) {
    $('.login-tab').removeClass('partners-link_active');
    $(this).addClass('partners-link_active');
    $('.reg-block').show();
    $('.login-block').hide();
  });

  // Exchange Tabs
  $('#exchange-rus_btn').on('click', function (e) {
    $('.exchange-btn__item').removeClass('active');
    $(this).addClass('active');
    $('#exchange-rus').show();
    $('#exchange-usd').hide();
  });
  $('#exchange-usd_btn').on('click', function (e) {
    $('.exchange-btn__item').removeClass('active');
    $(this).addClass('active');
    $('#exchange-usd').show();
    $('#exchange-rus').hide();
  });

  // Mob Tabs
  $('#account-tabs__info').on('click', function (e) {
    $('.account-tabs__item').removeClass('active');
    $('.account-content').hide();
    $(this).addClass('active');
    $('#account-info').show();
  });
  $('#account-tabs__exchange').on('click', function (e) {
    $('.account-tabs__item').removeClass('active');
    $('.account-content').hide();
    $(this).addClass('active');
    $('#account-exchange').show();
  });
  $('#account-tabs__balance').on('click', function (e) {
    $('.account-tabs__item').removeClass('active');
    $('.account-content').hide();
    $(this).addClass('active');
    $('#account-balance').show();
  });

  //======================== ALL SELECTIZES
  $('.custom-select').selectize();

  let stateNumber = document.getElementById('state-number');
  let modelCar = document.getElementById('model-car');

  let select = function () {
    let selectHeader = document.querySelectorAll('.select__header');
    let selectItem = document.querySelectorAll('.select__item');

    selectHeader.forEach((item) => {
      item.addEventListener('click', selectToggle);
    });

    selectItem.forEach((item) => {
      item.addEventListener('click', selectChoose);
    });

    function selectToggle() {
      this.parentElement.classList.toggle('is-active');
    }

    function selectChoose() {
      let text = this.innerHTML,
        select = this.closest('.select'),
        selectDataName = this.dataset.tabName;

      currentText = select.querySelector('.select__current');
      currentText.innerHTML = text;
      select.classList.remove('is-active');

      if (selectDataName == 'state-number') {
        stateNumber.style.display = 'block';
        modelCar.style.display = 'none';
      } else if (selectDataName == 'model-car') {
        stateNumber.style.display = 'none';
        modelCar.style.display = 'flex';
      }
    }
  };

  select();

  //======================== POPUPS
  $('.popup').magnificPopup({});

  //======================== MASK
  $('.mask-phone').mask('+7 (999) 999-99-99');
});
