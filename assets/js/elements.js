jQuery(document).ready(function ($) {

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


  // rating
    $( ".select__rating-star" ).hover(
	    function() {
		    var rat = $(this).attr('value');
			document.getElementById("rating").value = rat;
			$('.select__rating-value').html('\u00A0' + rat);
			$(`.select__rating-star:gt(${Number(rat) - 1}) svg`).removeClass('active-star');
			$(`.select__rating-star:lt(${rat}) svg`).addClass('active-star');
		}
	);


	$(document).on("click", ".select__rating-star", function(){
		var selectRating = $(this).closest('.select');
		selectRating.find('.select__current').html($('.select__rating-text').html());
		selectRating.removeClass('is-active');
		val = $(this).attr('value');
	});




	// Геолокация
	document.querySelector('#geolocation').oninput = function () {
		let val = this.value.toLowerCase().trim();
		let elasticItems = document.querySelectorAll('.select__body .select__item-search');
		if (val != '') {
			elasticItems.forEach(function (elem) {
				if (elem.innerText.toLowerCase().search(val) == -1) {
					elem.classList.add('hide');
					elem.innerHTML = elem.innerText;
				}
				else {
					elem.classList.remove('hide');
					let str = elem.innerText;
					elem.innerHTML = insertMark(str, elem.innerText.search(RegExp(val,"gi")), val.length);
				}
			});
		}
		else {
			elasticItems.forEach(function (elem) {
				elem.classList.remove('hide');
				elem.innerHTML = elem.innerText;
			});
		}
	}

	function insertMark(string, pos, len) {
		$('.scrollbar-inner').scrollbar();
	    return string.slice(0, pos) + '<mark class="mark-color">' + string.slice(pos, pos + len) + '</mark>' + string.slice(pos + len);
	}

	$('.select__header-search').on('click', function() {
		 $(this).parent('.geolocation').addClass('is-active');
	})
	$('.select__item-search').on('click', function() {
		$('input#geolocation-visible').val($(this).text().trim());
		$('input#geolocation').val($(this).text().trim());
		$('.geolocation').removeClass('is-active')
	})

	$('.scrollbar-inner').scrollbar();


	// Слайдер на цену
	$( "#slider-range" ).slider({
	  range: true,
	  min: 0,
	  max: 500,
	  values: [ 75, 300 ],
	  slide: function( event, ui ) {
		    $("#price" ).val(ui.values[0] );
		    $("#price2").val(ui.values[1] );
	  		$('.price .select__current').html('<p class="input-price"><span class="price-val1">'+ ui.values[0] + '₽</span> - <span class="price-val2">'+ ui.values[1] +'₽</span></p>'); },
	});
	$( "#price").val($("#slider-range" ).slider( "values", 0 ) );
	$('#price2').val($("#slider-range" ).slider( "values", 1 ) );

	// При изминение инпута меняеться положение ползунка
	$('#price2').change(function() {
	  	if (Number($(this).val()) > Number($('#price').val())) {
			$("#slider-range").slider('values', 1 , $(this).val());
		} else {
			$(this).val($("#slider-range" ).slider( "values", 1 ) );
		}
	});
	$('#price').change(function() {
	  	if (Number($(this).val()) < Number($('#price2').val())) {
			$("#slider-range").slider('values', 0 , $(this).val());
		} else {
			$(this).val($("#slider-range" ).slider( "values", 0 ) );
		}
	});

	// Подтягиваются значения, при изминения инпута
	$('.price .range__input').change(function() {
		$('.select__current-price').html('<p class="input-price"><span class="price-val1">'+ $( "#slider-range" ).slider( "values", 0 ) + '₽</span> - <span class="price-val2">'+ $( "#slider-range" ).slider( "values", 1 ) +'₽</span></p>');
	})

	// ------------------------------------------------------------------------------------------------------

	// Слайдер на график
	$( "#slider-range-graph" ).slider({
	  range: true,
	  min: 0,
	  max: 24,
	  values: [ 0, 24 ],
	  slide: function( event, ui ) {
		    $("#graph" ).val(ui.values[0] );
		    $("#graph2").val(ui.values[1] );
	  		$('.graph .select__current').html('<p class="input-price"><span class="price-val1">'+ ui.values[0] + ':00</span> - <span class="price-val2">'+ ui.values[1] +':00</span></p>'); },
	});
	$("#graph").val($("#slider-range-graph" ).slider( "values", 0 ) );
	$('#graph2').val($("#slider-range-graph" ).slider( "values", 1 ) );


	// При изминение инпута меняеться положение ползунка
	$('#graph2').change(function() {
	  	if (Number($(this).val()) > Number($('#graph').val())) {
			$("#slider-range-graph").slider('values', 1 , $(this).val());
		} else {
			$(this).val($("#slider-range-graph" ).slider( "values", 1 ) );
		}
	});
	$('#graph').change(function() {
	  	if (Number($(this).val()) < Number($('#graph2').val())) {
			$("#slider-range-graph").slider('values', 0 , $(this).val());
		} else {
			$(this).val($("#slider-range-graph" ).slider( "values", 0 ) );
		}
	});

	$('.graph .range__input').change(function() {
		$('.select__current-graph').html('<p class="input-graph"><span class="graph-val1">'+ $( "#slider-range-graph" ).slider( "values", 0 ) + ':00</span> - <span class="graph-val2">'+ $( "#slider-range-graph" ).slider( "values", 1 ) +':00</span></p>');
	})


	// доп. сервис
	$('.select__item-check').on('click', function() {
		var valueService = '';
		$(this).toggleClass('active-check');
		$('.active-check').each(function(i) {
		   valueService = valueService + $(this).text().trim().toLowerCase() + ', ';
		});
		valueService = valueService.slice(0,-2);
		$('#service').val(valueService);
		$('#view-service').val(valueService.charAt(0).toUpperCase() +  valueService.substr(1));
	})

		$('.select').on('click', function() {
			if ($('.select').not(this).hasClass('is-active')) {
				$('.select').not(this).removeClass('is-active');
			}
		})

	$(document).mouseup(function(e) {
        var select = $('.select');
        if (e.target!=select[0]&&select.has(e.target).length === 0) {
        	$('.select').removeClass('is-active');
        }
    })


});