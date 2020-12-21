jQuery(document).ready(function ($) {
  //Mob-menu
  // $('.burgerJs').on('click', function (e) {
  //   $(this).toggleClass('active');
  //   $('body').toggleClass('overflow-h');
  //   $('#headerNavbar').toggleClass('active');
  // });
  // $('.navbar-menu a').on('click', function (e) {
  //   $('body').removeClass('overflow-h');
  //   $('#headerNavbar').removeClass('active');
  //   $('.burgerJs').removeClass('active');
  // });
  // $('#closeNavbar').on('click', function (e) {
  //   $('body').removeClass('overflow-h');
  //   $('#headerNavbar').removeClass('active');
  //   $('.burgerJs').removeClass('active');
  // });

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

  //======================== ALL SELECTIZES
  $('.custom-select').selectize();

  let stateNumber = document.getElementById('state-number');
  let modelCar = document.getElementById('model-car');
  //Configurate
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
  //======================== ALL SELECTIZES AND

  //======================== POPUPS
  $('.popup-telephone__start').magnificPopup({
    items: {
      src: '#popup-telephone',
      type: 'inline',
    },
    midClick: true,
    mainClass: 'mfp-fade',
  });

  $('.popup-branch__delete').magnificPopup({
    items: {
      src: '#popup-branch-delete',
      type: 'inline',
    },
    midClick: true,
    mainClass: 'mfp-fade',
  });

  $('.popup-addbranch__start').magnificPopup({
    items: {
      src: '#popup-addbranch',
      type: 'inline',
    },
    midClick: true,
    mainClass: 'mfp-fade',
  });
  $('.popup-editinfo__start').magnificPopup({
    items: {
      src: '#popup-editinfo',
      type: 'inline',
    },
    midClick: true,
    mainClass: 'mfp-fade',
    fixedContentPos: false,
  });
  $('.popup-editbranch__start').magnificPopup({
    items: {
      src: '#popup-editbranch',
      type: 'inline',
    },
    midClick: true,
    mainClass: 'mfp-fade',
  });
  //======================== POPUPS AND
});
