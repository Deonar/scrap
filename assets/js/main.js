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
  $(".custom-select_js").selectize();
  $('.selectize-dropdown-content').scrollbar();

  $('#select-auto_search').on('change', function () {
    if($('#select-auto_search').val() == 'number'){
      $('#search-auto_mark').hide();
      $('#search-auto_number').show();
    }else{
      $('#search-auto_mark').show();
      $('#search-auto_number').hide();
    }
  });
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
});