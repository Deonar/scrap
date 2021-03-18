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
  $('.popup').magnificPopup({});

  $('.popup-param').magnificPopup({
    removalDelay: 500, //delay removal by X to allow out-animation
    callbacks: {
      beforeOpen: function () {
        this.st.mainClass = 'mfp-move-from-top';
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

  //====== registration show stage

  function showStage(hiddenId, activeId) {
    $(hiddenId).addClass('hidden');
    $(activeId).removeClass('hidden');
  }

  $('#to-stage-2').on('click', function () {
    showStage('#stage-1', '#stage-2');
    let progressPercent = '15';
    $('#progress-circle').attr('data-progress', progressPercent);
    $('#progress-percent').text(progressPercent);
  });
  $('#to-stage-3').on('click', function () {
    showStage('#stage-2', '#stage-3');
    let progressPercent = '70';
    $('#progress-circle').attr('data-progress', progressPercent);
    $('#progress-percent').text(progressPercent);
  });
  $('#to-stage-finish').on('click', function () {
    showStage('#stage-3', '#stage-finish');
    let progressPercent = '85';
    $('#progress-circle').attr('data-progress', progressPercent);
    $('#progress-percent').text(progressPercent);
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
  //=============== reviews-finish
  $('.reviews-finish-js').on('click', function (e) {
    $('.new-reviews__wrapper').removeClass('active');
    $('.thanks__for-reviews__wrapper').addClass('active');
  });

  //====== edit stage show

  $('#btn-edit-info-allcompany').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('#edit-info-allcompany').removeClass('hidden');
  });

  $('#btn-edit-info-material').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('#edit-info-material').removeClass('hidden');
  });

  $('#btn-edit-info-filialcompany').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('#edit-info-filialcompany').removeClass('hidden');
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

  $('#btn-add-filialcompany').on('click', function (e) {
    $('#card-company-content .main-tab').addClass('hidden');
    $('#edit-info-filialcompany').removeClass('hidden');
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

  $('.mask-phone').on('blur input', function () {
    console.log($(this).val());
    if ($(this).val() == '+7 8') {
      $(this).val('+7 ');
    }

    if ($(this).val().length >= 16) {
      $(this).closest('.form-input__wrapp').removeClass('error').addClass('done');
    } else {
      $(this).closest('.form-input__wrapp').addClass('error').removeClass('done');
    }
  });
  //=================== scroll to page
  $('.scrollto').on('click', function () {
    let href = $(this).attr('href');

    $('html, body').animate(
      {
        scrollTop: $(href).offset().top - 100,
      },
      {
        duration: 600, // по умолчанию «400»
        easing: 'linear', // по умолчанию «swing»
      }
    );
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
  });

  //======================== Custom select
  $('.custom-select_js').selectize();

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

  // working-btns
  $('#working-btns .working-btn').on('click', function () {
    $(this).toggleClass('active');
  });

  // ============
  // ====end=====
  // ============

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
    // $('#param-form').serializeArray();

    $('.tag-list').show();
    $('.search-result').show();
    $.magnificPopup.close();
  });

  $('form.search-input').on('submit', function (e) {
    e.preventDefault();
    $('.tag-list').show();
    $('.search-result').show();
  });
});
