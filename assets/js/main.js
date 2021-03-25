jQuery(document).ready(function ($) {
  //Mob-menu
  $('.burger-js').on('click', function (e) {
    $(this).toggleClass('active');
    $('body').toggleClass('overflow-h');
    $('#header-navbar').toggleClass('active');
  });
  $('.navbar-menu a').on('click', function (e) {
    $('body').removeClass('overflow-h');
    $('#header-navbar').removeClass('active');
    $('.burger-js').removeClass('active');
  });
  $('#close-navbar').on('click', function (e) {
    $('body').removeClass('overflow-h');
    $('#header-navbar').removeClass('active');
    $('.burger-js').removeClass('active');
  });
  //======================== POPUPS
  window.Utils = {
    magnificPopupConfiguration: function () {
      var startWindowScroll = 0;

      return {
        beforeOpen: function () {
          startWindowScroll = $(window).scrollTop();
          $('html').addClass('mfp-helper');
        },
        close: function () {
          $('html').removeClass('mfp-helper');
          setTimeout(function () {
            $('body').animate({
                scrollTop: startWindowScroll,
              },
              0
            );
          }, 0);
        },
      };
    },
  };
  startWindowScroll = 0;
  $('.popup').magnificPopup({
    mainClass: 'mfp-fade',
    type: 'inline',
    fixedContentPos: false,
    fixedBgPos: true,
    midClick: true,
    fixedContentPos: true,
    callbacks: Utils.magnificPopupConfiguration(),
    callbacks: {
      open: function () {
        $('body').addClass('overflow-h');
      },
      close: function () {
        $('body').removeClass('overflow-h');
      },
    },
  });

  $('.popup-close-js').on('click', function () {
    $.magnificPopup.close();
  });

  $('.popup-param').magnificPopup({
    removalDelay: 500, //delay removal by X to allow out-animation
    mainClass: 'mfp-fade',
    type: 'inline',
    fixedContentPos: false,
    fixedBgPos: true,
    midClick: true,
    fixedContentPos: true,
    callbacks: Utils.magnificPopupConfiguration(),
    callbacks: {
      beforeOpen: function () {
        this.st.mainClass = 'mfp-move-from-top';
      },
      open: function () {
        $('body').addClass('overflow-h');
      },
      close: function () {
        $('body').removeClass('overflow-h');
      },
    },
  });

  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Загрузка изображения #%curr%...',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
    },
  });

  // notice-popup-hide and show
  $('.notice-show-js').on('click', function () {
    $('.notice-popup-js span').text('Филиал удален');
    $('.notice-popup-js').removeClass('hidden');
  });
  $('.notice-close-js').on('click', function () {
    $('.notice-popup-js').addClass('hidden');
  });

  //====== registration show stage

  function showStage(hiddenId, activeId) {
    $(hiddenId).addClass('hidden');
    $(activeId).removeClass('hidden');
    $(activeId).find('input').eq(0).focus();
    $('html, body').animate({
      scrollTop: $(activeId).offset().top - 50,
    });
  }

  $('#stage-1').on('submit', function (e) {
    e.preventDefault();
    showStage('#stage-1', '#stage-2');
    let progressPercent = '15';
    $('#progress-circle').attr('data-progress', progressPercent);
    $('#progress-percent').text(progressPercent);
  });

  $('#stage-2').on('submit', function (e) {
    e.preventDefault();
    showStage('#stage-2', '#stage-3');
    let progressPercent = '70';
    $('#progress-circle').attr('data-progress', progressPercent);
    $('#progress-percent').text(progressPercent);
  });

  $('#stage-3').on('submit', function (e) {
    e.preventDefault();
    showStage('#stage-3', '#stage-finish');
    let progressPercent = '85';
    $('#progress-circle').attr('data-progress', progressPercent);
    $('#progress-percent').text(progressPercent);
  });

  $('#stage-finish').on('submit', function (e) {
    e.preventDefault();
    window.location.href = '/cabinet.php';
  });

  $('#back-stage-1').on('click', function () {
    showStage('#stage-2', '#stage-1');
    let progressPercent = '0';
    $('#progress-circle').attr('data-progress', progressPercent);
    $('#progress-percent').text(progressPercent);
  });
  $('#back-stage-2').on('click', function () {
    showStage('#stage-3', '#stage-2');
    let progressPercent = '15';
    $('#progress-circle').attr('data-progress', progressPercent);
    $('#progress-percent').text(progressPercent);
  });
  $('#back-stage-3').on('click', function () {
    showStage('#stage-finish', '#stage-3');
    let progressPercent = '70';
    $('#progress-circle').attr('data-progress', progressPercent);
    $('#progress-percent').text(progressPercent);
  });

  //================ add new reviews
  $('.add-reviews-js').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('.new-reviews__wrapper').addClass('active');
    $('.thanks__for-reviews__wrapper').removeClass('active');
  });
  //================ come back
  $('.come-back-js').on('click', function (e) {
    $('#card-company-content .main-tab').removeClass('hidden');
    $('.new-reviews__wrapper').removeClass('active');
    $('.thanks__for-reviews__wrapper').removeClass('active');
    $('.edit-company__wrapp').addClass('hidden');
  });

  //=============== Reviews-submit
  $('#review-form').on('submit', function (e) {
    e.preventDefault();
    $('.new-reviews__wrapper').removeClass('active');
    $('html, body').animate({
      scrollTop: $('#card-company-content').offset().top - 50,
    });
    $('.thanks__for-reviews__wrapper').addClass('active');
  });

  //====== edit stage show

  $('#btn-edit-info-allcompany').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('#edit-info-allcompany').removeClass('hidden');
    $('#edit-company-logo').show();
    $('#edit-company-title').html('Информация о компании <span>Заполните все поля</span>');
  });

  $('#btn-edit-info-filialcompany').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('#edit-info-allcompany').removeClass('hidden');
    $('#edit-company-logo').hide();
    $('#edit-company-title').html('Информация о филиале <span>Заполните все поля</span>');
  });

  $('#btn-add-filialcompany').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('#edit-info-allcompany').removeClass('hidden');
    $('#edit-company-logo').hide();
    $('#edit-company-title').html('Информация о филиале <span>Заполните все поля</span>');
  });

  $('#btn-edit-info-material').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('#edit-info-material').removeClass('hidden');
  });

  $('#btn-edit-info-appliances').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('#edit-info-appliances').removeClass('hidden');
  });

  $('#btn-edit-info-personal').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('#edit-info-personal').removeClass('hidden');
  });

  $('#btn-edit-info-legal').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('#edit-info-legal').removeClass('hidden');
  });

  //=========== open tab from hash

  function showReviewsContent() {
    $('.tab-item-js').removeClass('active');
    $('#reviews-tab').addClass('active');
    $('.tab-content-js').hide();
    $('#reviews-tab-content').show();
  }

  function showAddressContent() {
    $('.tab-item-js').removeClass('active');
    $('#address-tab').addClass('active');
    $('.tab-content-js').hide();
    $('#address-tab-content').show();
  }

  function showPricesContent() {
    $('.tab-item-js').removeClass('active');
    $('#prices-tab').addClass('active');
    $('.tab-content-js').hide();
    $('#prices-tab-content').show();
  }

  function openTabsProfile() {
    let hash = window.location.hash;
    if (hash == '#reviews') {
      showReviewsContent();
    } else if (hash == '#address') {
      showAddressContent();
    } else if (hash == '#prices') {
      showPricesContent();
    }
  }
  openTabsProfile();

  //=========== open tab from link
  $('.show-address-js').on('click', function (e) {
    showAddressContent();
  });
  $('.show-reviews-js').on('click', function (e) {
    showReviewsContent();
  });

  // ======================== MASK
  $('.mask-phone').mask('+7 ZZZ ZZZ-ZZ-ZZ', {
    translation: {
      Z: {
        pattern: /[0-9]/,
      },
    },
  });

  $('.mask-car-number').mask('Z BBB ZZ', {
    translation: {
      B: {
        pattern: /[0-9]/,
      },
      Z: {
        pattern: /[A-Za-z-А-Яа-я]/,
      },
    },
  });

  $('.mask-car-region').mask('999');

  $('.mask-phone').on('blur', function () {
    if ($(this).val() == '+7 8') {
      $(this).val('+7 ');
    }

    if ($(this).val().length >= 16) {
      $(this).closest('.form-input__wrapp').removeClass('error').addClass('done');
    } else {
      $(this).closest('.form-input__wrapp').addClass('error').removeClass('done');
    }
  });

  $('.mask-phone').on('input', function () {
    if ($(this).val().length >= 16) {
      $(this).closest('.form-input__wrapp').removeClass('error').addClass('done');
    }
  });

  $('.mask-string').bind('change keyup input click', function () {
    if (this.value.match(/[^а-яА-Яa-zA-Z\s]/g)) {
      this.value = this.value.replace(/[^а-яА-Яa-zA-Z\s]/g, '');
    }
  });

  $('.mask-number').bind('change keyup input click', function () {
    if (this.value.match(/[^0-9,.]/g)) {
      this.value = this.value.replace(/[^0-9,.]/g, '');
    }
  });

  //=================== scroll to page
  $('.scrollto').on('click', function () {
    let href = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(href).offset().top - 100,
    }, {
      duration: 600, // по умолчанию «400»
      easing: 'linear', // по умолчанию «swing»
    });
    if ($(window).width() < 768) {
      $('html, body').animate({
        scrollTop: $(href).offset().top - 50,
      });
    }
    return false;
  });
  // ===================== more btn
  $('.more-list-js .more-item-js').hide();
  $('.more-list-js .more-item-js').slice(0, 5).show();
  $('#btn-more').click(function (e) {
    e.preventDefault();
    $('.more-list-js .more-item-js:hidden').slice(0, 5).fadeIn('slow');

    if ($('.more-list-js .more-item-js:hidden').length == 0) {
      $('#btn-more').fadeOut('slow');
    }
  });

  //======================== Scrollbar
  $('.scrollbar').scrollbar();

  //======================== Tabs
  $('.tab-js').on('click', '.tab-item-js', function (event) {
    event.preventDefault();
    var tab = $(this).attr('data-tab');
    var wrapper = $(this).closest('.tab-js');
    wrapper.find('.tab-item-js').removeClass('active');
    $(this).addClass('active');
    wrapper.find('.tab-content-js').hide();
    wrapper.find('.tab-content-js[data-tab = ' + tab + ']').show();
    $('html, body').animate({
      scrollTop: $('.tab-js').offset().top - 50,
    });
  });

  //======================== Custom select
  $('.custom-select_js').selectize({
    readOnly: true,
    onDelete: function () {
      return false
    }
  });

  $('.custom-select_js input').prop('disabled', true);

  $('.custom-select-tag_js').selectize({
    plugins: ['remove_button'],
    create: true,
    sortField: {
      field: 'text',
      direction: 'asc',
    },
    dropdownParent: 'body',
  });

  $('.custom-search-select_js').selectize({
    persist: false,
  });

  $('.selectize-dropdown-content').scrollbar();

  $('#select-auto_search').on('change', function () {
    if ($('#select-auto_search').val() == 'number') {
      $('#search-auto_mark').hide();
      $('#search-auto_number').show();
    } else {
      $('#search-auto_mark').show();
      $('#search-auto_number').hide();
    }
  });

  $('#select-metal_search').on('change', function () {
    if ($('#select-metal_search').val() == 'metal') {
      $('#search-form_metal').show();
      $('#search-form_ceramic').hide();
    } else {
      $('#search-form_metal').hide();
      $('#search-form_ceramic').show();
    }
  });

  //accordeon
  $('.accordeon-tab-js').click(function (event) {
    event.stopPropagation();
    if ($(this).closest('.accordeon-wrapper-js').hasClass('active')) {
      $(this).closest('.accordeon-wrapper-js').removeClass('active');
      $(this).closest('.accordeon-wrapper-js').find('.accordeon-content-js').slideUp(300);
    } else {
      // $('.accordeon-wrapper-js').removeClass('active');
      // $('.accordeon-content-js').slideUp(300);
      $(this).closest('.accordeon-wrapper-js').toggleClass('active');
      $(this).closest('.accordeon-wrapper-js').find('.accordeon-content-js').slideDown(300);
    }
  });

  //accordeon-content more
  $('.button-more-js').click(function (event) {
    event.stopPropagation();
    if ($(this).closest('.content-wrapper-js').hasClass('active')) {
      $(this).closest('.content-wrapper-js').removeClass('active open');
      $(this).closest('.content-wrapper-js').find('.content-js').slideUp(300);
      $(this).text('Подробнее');
    } else {
      $('.content-wrapper-js').removeClass('active open');
      $('.content-js').slideUp(300);
      $(this).closest('.content-wrapper-js').addClass('active open');
      $(this).closest('.content-wrapper-js').find('.content-js').slideDown(300);
      $('.button-more-js').text('Подробнее');
      $(this).text('Скрыть');
    }
  });

  // Working hours
  $('.working-btns li').on('click', function () {
    $(this).toggleClass('active');
    var day = $(this).attr('data-day');

    if ($('#working-sametime-checkbox').is(':checked')) {

    } else {
      $('.working-day .working-day__item[data-day = ' + day + ']').toggleClass('hidden');
    }

    if ($('.working-btns li.active').length == 7) {
      $('#working-everyday-checkbox').prop('checked', true);
    } else {
      $('#working-everyday-checkbox').prop('checked', false);
    }
  });

  $('#working-everyday-checkbox').click(function () {
    if ($(this).is(':checked')) {
      $('.working-day .working-day__item').removeClass('hidden');
      $('.working-btns li').addClass('active');

      $('#working-sametime-checkbox').prop('checked', false);
      $('#working-sametime').addClass('hidden');
    }
  });

  $('#working-sametime-checkbox').click(function () {
    if ($(this).is(':checked')) {
      $('.working-day .working-day__item').addClass('hidden');
      $('#working-sametime').toggleClass('hidden');
    } else {
      $('#working-sametime').addClass('hidden');

      for (var i = 0; i < $('.working-btns li.active').length; i++) {

        var day = $('.working-btns li.active').eq(i).attr('data-day');
        $('.working-day .working-day__item[data-day = ' + day + ']').toggleClass('hidden');
      }
    }
  });

  //========= Displaying
  $('.displaying-row-js').on('click', function () {
    $('.displaying-row-js').addClass('active');
    $('.displaying-grid-js').removeClass('active');
    $('.offer').removeClass('offer_grid').addClass('offer_row');
  });

  $('.displaying-grid-js').on('click', function () {
    $('.displaying-grid-js').addClass('active');
    $('.displaying-row-js').removeClass('active');
    $('.offer').removeClass('offer_row').addClass('offer_grid');
  });

  // Regulation
  $('.regulation-link-js').on('click', function (e) {
    $('body').addClass('overflow-h');
    $(this).closest('.regulations-js').addClass('active');
  });
  $('.regulations-js .btn-come__back').on('click', function (e) {
    $('body').removeClass('overflow-h');
    $(this).closest('.regulations-js').removeClass('active');
  });

  //  Tooltips
  tippy('[data-tippy-content]', {
    theme: 'custom',
  });

  //Demonstration js
  $('#param-reset').on('click', function () {
    $('#param-form input:checkbox').removeAttr('checked');
  });

  $('#param-add').on('click', function () {
    $('.tag-list').show();
    $('.search-result').show();
    $.magnificPopup.close();
  });

  $('form.search-input').on('submit', function (e) {
    e.preventDefault();
    $('.tag-list').show();
    $('.search-result').show();
  });

  $('.edit-company__wrapp form').on('submit', function (e) {
    e.preventDefault();
    $('.notice-popup-js span').text('Изменения сохранены');
    $('#card-company-content .main-tab').removeClass('hidden');
    $('.new-reviews__wrapper').removeClass('active');
    $('.thanks__for-reviews__wrapper').removeClass('active');
    $('.edit-company__wrapp').addClass('hidden');
    $('.notice-popup-js').removeClass('hidden');
  });

  $('.repeater-btn_cat').click(function () {
    repeaterList = $(this).closest('.repeater-js').find('.repeater-list-js');
    let repeaterNum = ($(this).closest('.repeater-js').find(".repeater-item-js").length) + 1;
    addCategory(repeaterList, repeaterNum);
  })

  $('.repeater-btn_appliances').click(function () {
    repeaterList = $(this).closest('.repeater-js').find('.repeater-list-js');
    addAppliances(repeaterList);
    repeaterList.find('.custom-select_js').last().selectize();
  })
  
  $('.repeater-js').on('click', '.cross-js', function(){
    $(this).closest('.repeater-item-js').remove();
  })

  function addCategory(repeaterList, repeaterNum) {
    repeaterList.append(
      `<div class="repeater-item-js">
      <div class="mb-20 d-flex">
      <div class="form-group__title">Весовая категория #` + repeaterNum + `</div><div class="ml-auto cross cross-js"></div>
      </div>
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
          <input class="form-input form-input__range-body mask-number" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
          <div class="form-input__line"></div>
          <div class="form-input__range-value">%</div>
        </div>
        <div class="form-input__wrapp form-input__range">
          <span class="form-input__label-text _bold">Pd</span>
          <input class="form-input form-input__range-body mask-number" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
          <div class="form-input__line"></div>
          <div class="form-input__range-value">%</div>
        </div>
        <div class="form-input__wrapp form-input__range">
          <span class="form-input__label-text _bold">Rh</span>
          <input class="form-input form-input__range-body mask-number" type="text" placeholder="1" min="0" step="0.1" maxlength="3" />
          <div class="form-input__line"></div>
          <div class="form-input__range-value">%</div>
        </div>
      </div>
    </div>
  </div>
</div>`
    )
  }


  function addAppliances(repeaterList) {
    repeaterList.append(
      `<div class="edit-company__form mb-30 repeater-item-js">
      
      <div class="form-group row align-items-center mb-20">
        <div class="col-9 col-lg-3 order-lg-0">
          <label class="form-input__label">Вид техники</label>
        </div>
        <div class="col-3 col-lg-1 order-lg-1 d-flex">
          <div class="ml-auto cross cross-js"></div>
      </div>
        <div class="col-lg-8 order-lg-0">
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
    </div>`
    )
  }

});