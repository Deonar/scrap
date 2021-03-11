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

  //================ add new reviews
  $('.add-reviews-js').on('click', function (e) {
    $('.card-company__content .main-tab').addClass('hidden');
    $('.new-reviews__wrapper').addClass('active');
  });
  //================ come back
  $('.come-back-js').on('click', function (e) {
    $('.card-company__content .main-tab').removeClass('hidden');
    $('.new-reviews__wrapper').removeClass('active');
    $('.thanks__for-reviews__wrapper').removeClass('active');
  });
  //=============== reviews-finish
  $('.reviews-finish-js').on('click', function (e) {
    $('.new-reviews__wrapper').removeClass('active');
    $('.thanks__for-reviews__wrapper').addClass('active');
  });

  // ======================== MASK
  $('.mask-phone').mask('+7 ZZZ ZZZ-ZZ-ZZ', {
    translation: {
      Z: {
        pattern: /[0-9]/,
      },
    },
  });

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
  $('.selectize-dropdown-content').scrollbar();

  //accordeon
  $('.accordeon-tab-js').click(function (event) {
    event.stopPropagation();
    if ($(this).closest('.accordeon-wrapper-js').hasClass('active')) {
      $(this).closest('.accordeon-wrapper-js').removeClass('active');
      $(this).closest('.accordeon-wrapper-js').find('.accordeon-content-js').slideUp(300);
    } else {
      $('.accordeon-wrapper-js').removeClass('active');
      $('.accordeon-content-js').slideUp(300);
      $(this).closest('.accordeon-wrapper-js').addClass('active');
      $(this).closest('.accordeon-wrapper-js').find('.accordeon-content-js').slideDown(300);
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
        duration: 300, // по умолчанию «400»
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
});
