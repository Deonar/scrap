jQuery(document).ready(function ($) {
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

  


  $('.custom-select').selectize();
});
