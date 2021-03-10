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

  //======================== MASK
  $('.mask-phone').mask('+7 (999) 999-99-99');

  //======================== Scrollbar
  $('.scrollbar').scrollbar();

 
  //======================== Tabs 
  $(".tab-js").on("click", ".tab__item", function (event) {
    event.preventDefault();
    var tab = $(this).attr("data-tab");
    var wrapper = $(this).closest(".tab-js");
    wrapper.find(".tab__item").removeClass("active");
    $(this).addClass("active");
    wrapper.find(".tab__content").hide();
    wrapper.find(".tab__content[data-tab = " + tab + "]").show();
  });

  //======================== Custom select
  $(".custom-select_js").selectize();
  $('.selectize-dropdown-content').scrollbar();
  
});