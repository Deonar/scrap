jQuery(document).ready(function ($) {
    if ($(window).width() > 767) {
        //Yandex map
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("yandex-map", {
                center: [55.191700, 61.430303],
                zoom: 12,
                controls: ['zoomControl']
            })
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<div style="color: #FFFFFF;">$[properties.iconContent]</div>'
                ),
                getPointOpt = function () {
                    hrefIcon = 'assets/img/icons/map-icon.svg';
                    return {
                        iconLayout: "default#imageWithContent",

                        iconImageHref: hrefIcon,
                        iconImageSize: [40, 40],
                        iconImageOffset: [-20, -20],
                        iconContentOffset: [15, 12],
                        iconContentLayout: MyIconContentLayout,
                        hideIconOnBalloonOpen: false
                    }
                }

            getPointData = function (id) {
                el = document.getElementById('map-address');
                el = el.querySelectorAll(".map-address__item")[id];
                data = {
                    name: (el.querySelector('.map-address__item-title')).innerHTML,
                    address: (el.querySelector('.map-address__item-sub-title')).innerHTML
                }
                return {
                    balloonContentHeader: `<h5>` + data.name + `</h5><div style='margin: 10px 0;border-bottom: 1px solid #74686830;'></div>`,
                    balloonContentBody: '<p class="mb-10"><span>' + data.address + '<br></span>',
                    iconContent: id + 1,
                    hintContent: data.address,
                }
            }

            getPoint = function (id) {
                el = document.querySelectorAll('#map-address .map-address__item');
                return [el[id].getAttribute('data-coord-x'), el[id].getAttribute('data-coord-y')]
            }

            geoObjects = []

            function updatePoints() {

                myMap.geoObjects.removeAll();
                geoObjects = []
                for (var i = 0; i < $('#map-address .map-address__item').length; i++) {
                    geoObjects[i] = new ymaps.Placemark(getPoint(i), getPointData(i), getPointOpt());
                    myMap.geoObjects.add(geoObjects[i]);
                }

                for (var i = 0; i < $('#map-address .map-address__item').length; i++) {
                    $('#map-address .map-address__item').eq(i).click(function (i) {
                        return function (e) {
                            e.preventDefault();
                            $('html, body').animate({
                                scrollTop: $('#yandex-map').offset().top - 50,
                            });
                            $('#map-address .map-address__item').removeClass('active')
                            $('#map-address .map-address__item').eq(i).addClass('active')
                            a = [parseFloat($('#map-address .map-address__item').eq(i).attr('data-coord-x')), parseFloat($('#map-address .map-address__item').eq(i).attr('data-coord-y'))]

                            myMap.panTo(a, {
                                flying: true,
                                duration: 1000
                            }).then(function () {
                                geoObjects[i].balloon.open();
                            });
                        }
                    }(i))
                }


                if (geoObjects.length == 1) {
                    myMap.setBounds(myMap.geoObjects.getBounds(), {
                        checkZoomRange: true,
                        zoomMargin: 9
                    }).then(function () {
                        myMap.setZoom(17, {
                            smooth: false,
                        })
                    });
                } else {
                    myMap.setBounds(myMap.geoObjects.getBounds(), {
                        checkZoomRange: true,
                        zoomMargin: 9
                    }).then(function () {
                        myMap.setZoom(12, {
                            smooth: false,
                        })
                    });
                }

            }

            updatePoints()
        }
    }
});