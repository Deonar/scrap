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

  //======================== Additional service
  $('.select__item-check').on('click', function () {
    if ($('.service .select__item-check').not(this).hasClass('active-check')) {
      $('.service .select__item-check').not(this).removeClass('active-check');
    }
    $(this).addClass('active-check');
  });

  //======================== Price and time work

  function init2slider(idX, btwX, btn1X, btn2X, input1, input2) {
    var slider = document.getElementById(idX);
    var between = document.getElementById(btwX);
    var button1 = document.getElementById(btn1X);
    var button2 = document.getElementById(btn2X);
    var inpt1 = document.getElementById(input1);
    var inpt2 = document.getElementById(input2);

    var min = inpt1.min;
    var max = inpt1.max;

    /*init*/
    var sliderCoords = getCoords(slider);
    button1.style.marginLeft = '0px';
    button2.style.marginLeft = slider.offsetWidth - button1.offsetWidth + 'px';
    between.style.width = slider.offsetWidth - button1.offsetWidth + 'px';
    inpt1.value = min;
    inpt2.value = max;

    inpt1.onchange = function (evt) {
      if (parseInt(inpt1.value) < min) inpt1.value = min;
      if (parseInt(inpt1.value) > max) inpt1.value = max;
      if (parseInt(inpt1.value) > parseInt(inpt2.value)) {
        var temp = inpt1.value;
        inpt1.value = inpt2.value;
        inpt2.value = temp;
      }

      var sliderCoords = getCoords(slider);
      var per1 = (parseInt(inpt1.value - min) * 100) / (max - min);
      var per2 = (parseInt(inpt2.value - min) * 100) / (max - min);
      var left1 = (per1 * (slider.offsetWidth - button1.offsetWidth)) / 100;
      var left2 = (per2 * (slider.offsetWidth - button1.offsetWidth)) / 100;

      button1.style.marginLeft = left1 + 'px';
      button2.style.marginLeft = left2 + 'px';

      if (left1 > left2) {
        between.style.width = left1 - left2 + 'px';
        between.style.marginLeft = left2 + 'px';
      } else {
        between.style.width = left2 - left1 + 'px';
        between.style.marginLeft = left1 + 'px';
      }
    };
    inpt2.onchange = function (evt) {
      if (parseInt(inpt2.value) < min) inpt2.value = min;
      if (parseInt(inpt2.value) > max) inpt2.value = max;
      if (parseInt(inpt1.value) > parseInt(inpt2.value)) {
        var temp = inpt1.value;
        inpt1.value = inpt2.value;
        inpt2.value = temp;
      }

      var sliderCoords = getCoords(slider);
      var per1 = (parseInt(inpt1.value - min) * 100) / (max - min);
      var per2 = (parseInt(inpt2.value - min) * 100) / (max - min);
      var left1 = (per1 * (slider.offsetWidth - button1.offsetWidth)) / 100;
      var left2 = (per2 * (slider.offsetWidth - button1.offsetWidth)) / 100;

      button1.style.marginLeft = left1 + 'px';
      button2.style.marginLeft = left2 + 'px';

      if (left1 > left2) {
        between.style.width = left1 - left2 + 'px';
        between.style.marginLeft = left2 + 'px';
      } else {
        between.style.width = left2 - left1 + 'px';
        between.style.marginLeft = left1 + 'px';
      }
    };

    /*mouse*/
    button1.onmousedown = function (evt) {
      var sliderCoords = getCoords(slider);
      var betweenCoords = getCoords(between);
      var buttonCoords1 = getCoords(button1);
      var buttonCoords2 = getCoords(button2);
      var shiftX2 = evt.pageX - buttonCoords2.left;
      var shiftX1 = evt.pageX - buttonCoords1.left;

      document.onmousemove = function (evt) {
        var left1 = evt.pageX - shiftX1 - sliderCoords.left;
        var right1 = slider.offsetWidth - button1.offsetWidth;
        if (left1 < 0) left1 = 0;
        if (left1 > right1) left1 = right1;
        button1.style.marginLeft = left1 + 'px';

        shiftX2 = evt.pageX - buttonCoords2.left;
        var left2 = evt.pageX - shiftX2 - sliderCoords.left;
        var right2 = slider.offsetWidth - button2.offsetWidth;
        if (left2 < 0) left2 = 0;
        if (left2 > right2) left2 = right2;

        var per_min = 0;
        var per_max = 0;
        if (left1 > left2) {
          between.style.width = left1 - left2 + 'px';
          between.style.marginLeft = left2 + 'px';

          per_min = (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
          per_max = (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
        } else {
          between.style.width = left2 - left1 + 'px';
          between.style.marginLeft = left1 + 'px';

          per_min = (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
          per_max = (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
        }
        inpt1.value = parseInt(min) + Math.round(((max - min) * per_min) / 100);
        inpt2.value = parseInt(min) + Math.round(((max - min) * per_max) / 100);
      };
      document.onmouseup = function () {
        document.onmousemove = document.onmouseup = null;
      };
      return false;
    };

    button2.onmousedown = function (evt) {
      var sliderCoords = getCoords(slider);
      var betweenCoords = getCoords(between);
      var buttonCoords1 = getCoords(button1);
      var buttonCoords2 = getCoords(button2);
      var shiftX2 = evt.pageX - buttonCoords2.left;
      var shiftX1 = evt.pageX - buttonCoords1.left;

      document.onmousemove = function (evt) {
        var left2 = evt.pageX - shiftX2 - sliderCoords.left;
        var right2 = slider.offsetWidth - button2.offsetWidth;
        if (left2 < 0) left2 = 0;
        if (left2 > right2) left2 = right2;
        button2.style.marginLeft = left2 + 'px';

        shiftX1 = evt.pageX - buttonCoords1.left;
        var left1 = evt.pageX - shiftX1 - sliderCoords.left;
        var right1 = slider.offsetWidth - button1.offsetWidth;
        if (left1 < 0) left1 = 0;
        if (left1 > right1) left1 = right1;

        var per_min = 0;
        var per_max = 0;

        if (left1 > left2) {
          between.style.width = left1 - left2 + 'px';
          between.style.marginLeft = left2 + 'px';
          per_min = (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
          per_max = (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
        } else {
          between.style.width = left2 - left1 + 'px';
          between.style.marginLeft = left1 + 'px';
          per_min = (left1 * 100) / (slider.offsetWidth - button1.offsetWidth);
          per_max = (left2 * 100) / (slider.offsetWidth - button1.offsetWidth);
        }
        inpt1.value = parseInt(min) + Math.round(((max - min) * per_min) / 100);
        inpt2.value = parseInt(min) + Math.round(((max - min) * per_max) / 100);
      };
      document.onmouseup = function () {
        document.onmousemove = document.onmouseup = null;
      };
      return false;
    };

    button1.ondragstart = function () {
      return false;
    };
    button2.ondragstart = function () {
      return false;
    };

    function getCoords(elem) {
      var box = elem.getBoundingClientRect();
      return {
        top: box.top + pageYOffset,
        left: box.left + pageXOffset,
      };
    }
    const selectElement = document.querySelector('.ice-cream');
  }
  setTimeout(init2slider('price-bw', 'price-b', 'price-b1', 'price-b2', 'price-in1', 'price-in2'), 0);
  setTimeout(init2slider('g-bw', 'g-b', 'g-b1', 'g-b2', 'g-in1', 'g-in2'), 0);
  setTimeout(init2slider('g-bw23', 'g-b23', 'g-b123', 'g-b223', 'g-in123', 'g-in223'), 0);
  setTimeout(init2slider('g-bw24', 'g-b24', 'g-b124', 'g-b224', 'g-in124', 'g-in224'), 0);

  $(document).on('click', '#select-price .select__price-slider', function () {
    var in1 = $('#select-price .select__range-input-wrapp .range_inpt1').val();
    var in2 = $('#select-price .select__range-input-wrapp .range_inpt2').val();
    $('#select-price .select__current').html(`<p class="input-price"><span class="price-val1">${in1} ₽</span> - <span class="price-val2">${in2} ₽</span></p>`);
  });
  $(document).on('click', '.graph .select__price-slider', function () {
    var in3 = $('.graph .select__range-input-wrapp .range_inpt1').val();
    var in4 = $('.graph .select__range-input-wrapp .range_inpt2').val();
    $('.graph .select__current').html(`<p class="input-graph"><span class="graph-val1">${in3}:00</span> - <span class="graph-val2">${in4}:00</span></p>`);
  });

  $('.select').on('click', function () {
    if ($('.select').not(this).hasClass('is-active')) {
      $('.select').not(this).removeClass('is-active');
    }
  });

  // additional service
  $('.select__item-check').on('click', function () {
    if ($('.service .select__item-check').not(this).hasClass('active-check')) {
      $('.service .select__item-check').not(this).removeClass('active-check');
    }
    $(this).addClass('active-check');
    $('#service').val($(this).text().trim());
  });

  $(document).mouseup(function (e) {
    var select = $('.select');
    if (e.target != select[0] && select.has(e.target).length === 0) {
      $('.select').removeClass('is-active');
    }
  });

  //Search city
  document.querySelector('#geolocation').oninput = function () {
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
  };

  function insertMark(string, pos, len) {
    $('.scrollbar-inner').scrollbar();
    return string.slice(0, pos) + '<mark class="mark-color">' + string.slice(pos, pos + len) + '</mark>' + string.slice(pos + len);
  }

  $('.select__header-search').on('click', function () {
    $(this).parent('.geolocation').addClass('is-active');
  });
  $('.select__item-search').on('click', function () {
    $('input#geolocation').val($(this).text().trim());
    $('.geolocation').removeClass('is-active');
  });

  $('.scrollbar-inner').scrollbar();
});
