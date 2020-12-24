jQuery(document).ready(function ($) {
  // startAuction
  $('#start-auction').on('click', function (e) {
    $('#offer').show();
    $('.auction-start').hide();
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

  //======================== POPUPS
  $('.popup').magnificPopup({});

  //======================== MASK
  $('.mask-phone').mask('+7 (999) 999-99-99');

  //======================== Scrollbar
  $('.scrollbar').scrollbar();
  //======================== ALL SELECTIZES
  $('.custom-select').selectize();

  $('#filter-toggle').on('click', '.select__item', function () {
    let selectDataName = $(this).data('selectValue');

    if (selectDataName == 'state-number') {
      $('#state-number').css('display', 'block');
      $('#model-car').css('display', 'none');
    } else if (selectDataName == 'model-car') {
      $('#state-number').css('display', 'none');
      $('#model-car').css('display', 'flex');
    }
  });

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
        select = this.closest('.select-custom-js'),
        selectDataValue = this.dataset.selectValue;
      if (select) {
        currentText = select.querySelector('.select__current');
        currentInput = select.querySelector('input');

        currentText.innerHTML = text;
        currentInput.value = selectDataValue;
      }
      select.classList.remove('is-active');
    }
  };
  select();
  //======================== ALL SELECTIZES AND

  // rating
  $('.select__rating-star').hover(function () {
    var rat = $(this).attr('value');
    document.getElementById('rating').value = rat;
    $('.select__rating-value').html('\u00A0' + rat);
    $(`.select__rating-star:gt(${Number(rat) - 1}) svg`).removeClass('active-star');
    $(`.select__rating-star:lt(${rat}) svg`).addClass('active-star');
  });

  $(document).on('click', '.select__rating-star', function () {
    var selectRating = $(this).closest('.select');
    selectRating.find('.select__current').html($('.select__rating-text').html());
    selectRating.removeClass('is-active');
    val = $(this).attr('value');
  });

  // GeoLocation
  $('.input-search-js').on('input', function () {
    let val = this.value.toLowerCase().trim();
    let elasticItems = document.querySelectorAll('.select__body .select__item-search');
    if (val != '') {
      elasticItems.forEach(function (elem) {
        if (elem.innerText.toLowerCase().search(val) == -1) {
          elem.classList.add('hide');
          elem.innerHTML = elem.innerText;
        } else {
          elem.classList.remove('hide');
          let str = elem.innerText;
          elem.innerHTML = insertMark(str, elem.innerText.search(RegExp(val, 'gi')), val.length);
        }
      });
    } else {
      elasticItems.forEach(function (elem) {
        elem.classList.remove('hide');
        elem.innerHTML = elem.innerText;
      });
    }
  });

  function insertMark(string, pos, len) {
    $('.scrollbar-inner').scrollbar();
    return string.slice(0, pos) + '<mark class="mark-color">' + string.slice(pos, pos + len) + '</mark>' + string.slice(pos + len);
  }

  $('.select__header-search').on('click', function () {
    $(this).parent('.container-search-js').addClass('is-active');
  });
  $('.select__item-search').on('click', function () {
    $(this).closest('.container-search-js').find('input.input-search-js').val($(this).text().trim());
    $('.container-search-js').removeClass('is-active');
  });

  $('.scrollbar-inner').scrollbar();

  // Слайдер на цену
  $('#slider-range').slider({
    range: true,
    min: 0,
    max: 500,
    values: [75, 300],
    slide: function (event, ui) {
      $('#price').val(ui.values[0]);
      $('#price2').val(ui.values[1]);
      $('.price .select__current').html('<p class="input-price"><span class="price-val1">' + ui.values[0] + '₽</span> - <span class="price-val2">' + ui.values[1] + '₽</span></p>');
    },
  });
  $('#price').val($('#slider-range').slider('values', 0));
  $('#price2').val($('#slider-range').slider('values', 1));

  // При изминение инпута меняеться положение ползунка
  $('#price2').change(function () {
    if (Number($(this).val()) > Number($('#price').val())) {
      $('#slider-range').slider('values', 1, $(this).val());
    } else {
      $(this).val($('#slider-range').slider('values', 1));
    }
  });
  $('#price').change(function () {
    if (Number($(this).val()) < Number($('#price2').val())) {
      $('#slider-range').slider('values', 0, $(this).val());
    } else {
      $(this).val($('#slider-range').slider('values', 0));
    }
  });

  // Подтягиваются значения, при изминения инпута
  $('.price .range__input').change(function () {
    $('.select__current-price').html('<p class="input-price"><span class="price-val1">' + $('#slider-range').slider('values', 0) + '₽</span> - <span class="price-val2">' + $('#slider-range').slider('values', 1) + '₽</span></p>');
  });

  // ------------------------------------------------------------------------------------------------------

  // Time work
  function initTimeWork(rangeTime, atTime, toTime) {
    let rangeTimeWork = $('#' + rangeTime);
    let atTimeWork = $('#' + atTime);
    let toTimeWork = $('#' + toTime);

    rangeTimeWork.slider({
      range: true,
      min: 0,
      max: 24,
      values: [0, 24],
      slide: function (event, ui) {
        atTimeWork.val(ui.values[0]);
        toTimeWork.val(ui.values[1]);
        $('.graph .select__current').html('<p class="input-price"><span class="price-val1">' + ui.values[0] + ':00</span> - <span class="price-val2">' + ui.values[1] + ':00</span></p>');
      },
    });
    atTimeWork.val(rangeTimeWork.slider('values', 0));
    toTimeWork.val(rangeTimeWork.slider('values', 1));

    // При изминение инпута меняеться положение ползунка
    toTimeWork.change(function () {
      if (Number($(this).val()) > Number(atTimeWork.val())) {
        rangeTimeWork.slider('values', 1, $(this).val());
      } else {
        $(this).val(rangeTimeWork.slider('values', 1));
      }
    });
    atTimeWork.change(function () {
      if (Number($(this).val()) < Number(toTimeWork.val())) {
        rangeTimeWork.slider('values', 0, $(this).val());
      } else {
        $(this).val(rangeTimeWork.slider('values', 0));
      }
    });

    $('.graph .range__input').change(function () {
      $('.select__current-graph').html('<p class="input-graph"><span class="graph-val1">' + rangeTimeWork.slider('values', 0) + ':00</span> - <span class="graph-val2">' + rangeTimeWork.slider('values', 1) + ':00</span></p>');
    });
  }

  // Time work in popup form
  initTimeWork('rangeTimeWork', 'atTimeWork', 'toTimeWork');
  initTimeWork('rangeTimeWork_edit_filial', 'atTimeWork_edit_filial', 'toTimeWork_edit_filial');
  initTimeWork('rangeTimeWork_add_filial', 'atTimeWork_add_filial', 'toTimeWork_add_filial');

  // Addition service
  $('.select-checkbox-js').on('click', '.select__item-check', function () {
    var valueService = '';
    $(this).toggleClass('active-check');
    $(this)
      .closest('.select-checkbox-js')
      .find('.active-check')
      .each(function (i) {
        valueService = valueService + $(this).text().trim().toLowerCase() + ', ';
      });
    valueService = valueService.slice(0, -2);
    $(this)
      .closest('.select-checkbox-js')
      .find('input')
      .val(valueService.charAt(0).toUpperCase() + valueService.substr(1));
  });

  $('.select').on('click', function () {
    if ($('.select').not(this).hasClass('is-active')) {
      $('.select').not(this).removeClass('is-active');
    }
  });

  $(document).mouseup(function (e) {
    var select = $('.select');
    if (e.target != select[0] && select.has(e.target).length === 0) {
      $('.select').removeClass('is-active');
    }
  });

  // Select city
  $('#city-list').on('click', '.selectCity__item', function () {
    city = $(this).data('city');
    region = $(this).data('region');
    $('.selectCity__item').removeClass('selectCity__current');
    $(this).addClass('selectCity__current');
    $('.header-cities .header-cities__link').text(city);
    $('#geo-city').text(city);

    $('#inputCity').val(city);

    $.magnificPopup.close();
  });
});
