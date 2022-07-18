
  /*==========================
  javaScript search Product
  ============================*/

var qsRegex;

var $grid = $('.grid').isotope({
    itemSelector: '.element-item',
    layoutMode: 'fitRows',
    filter: function() {
        return qsRegex ? $(this).text().match(qsRegex) : true;
    }
});

var $quicksearch = $('.quicksearch').keyup(debounce(function() {
    qsRegex = new RegExp($quicksearch.val(), 'gi');
    $grid.isotope();
}, 200));

function debounce(fn, threshold) {
    var timeout;
    threshold = threshold || 100;
    return function debounced() {
        clearTimeout(timeout);
        var args = arguments;
        var _this = this;

        function delayed() {
            fn.apply(_this, args);
        }
        timeout = setTimeout(delayed, threshold);
    };
}



$(document).ready(function () {
  "use strict";

  var window_width = $(window).width(),
    window_height = window.innerHeight,
    header_height = $(".default-header").height(),
    header_height_static = $(".site-header.static").outerHeight(),
    fitscreen = window_height - header_height;


  $(".fullscreen").css("height", window_height)
  $(".fitscreen").css("height", fitscreen);

  //------- Active Nice Select --------//

  $('select').niceSelect();


  $('.navbar-nav li.dropdown').hover(function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });

  $('.img-pop-up').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true
    }
  });

  // Search Toggle
  $("#search_input_box").hide();
  $("#search").on("click", function () {
    $("#search_input_box").slideToggle();
    $("#search_input").focus();
  });
  $("#close_search").on("click", function () {
    $('#search_input_box').slideUp(500);
  });

  /*==========================
  javaScript for sticky header
  ============================*/
  $(".sticky-header").sticky();

  /*=================================
  Javascript for banner area carousel
  ==================================*/
  $(".active-banner-slider").owlCarousel({
    items: 1,
    autoplay: false,
    autoplayTimeout: 5000,
    loop: true,
    nav: true,
    navText: ["<img src='img/banner/prev.png'>", "<img src='img/banner/next.png'>"],
    dots: false
  });

  /*=================================
  Javascript for product area carousel
  ==================================*/
  $(".active-product-area").owlCarousel({
    items: 1,
    autoplay: false,
    autoplayTimeout: 5000,
    loop: true,
    nav: true,
    navText: ["<img src='img/product/prev.png'>", "<img src='img/product/next.png'>"],
    dots: false
  });

  /*=================================
  Javascript for single product area carousel
  ==================================*/
  $(".s_Product_carousel").owlCarousel({
    items: 1,
    autoplay: false,
    autoplayTimeout: 5000,
    loop: true,
    nav: false,
    dots: true
  });

  /*=================================
  Javascript for exclusive area carousel
  ==================================*/
  $(".active-exclusive-product-slider").owlCarousel({
    items: 1,
    autoplay: false,
    autoplayTimeout: 5000,
    loop: true,
    nav: true,
    navText: ["<img src='img/product/prev.png'>", "<img src='img/product/next.png'>"],
    dots: false
  });

  //--------- Accordion Icon Change ---------//

  $('.collapse').on('shown.bs.collapse', function () {
    $(this).parent().find(".lnr-arrow-right").removeClass("lnr-arrow-right").addClass("lnr-arrow-left");
  }).on('hidden.bs.collapse', function () {
    $(this).parent().find(".lnr-arrow-left").removeClass("lnr-arrow-left").addClass("lnr-arrow-right");
  });

  // Select all links with hashes
  $('.main-menubar a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top - 70
          }, 1000, function () {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });



  // -------   Mail Send ajax

  $(document).ready(function () {
    var form = $('#booking'); // contact form
    var submit = $('.submit-btn'); // submit button
    var alert = $('.alert-msg'); // alert div for show alert message

    // form submit event
    form.on('submit', function (e) {
      e.preventDefault(); // prevent default form submit

      $.ajax({
        url: 'booking.php', // form action url
        type: 'POST', // form submit method get/post
        dataType: 'html', // request type html/json/xml
        data: form.serialize(), // serialize form data
        beforeSend: function () {
          alert.fadeOut();
          submit.html('Sending....'); // change submit button text
        },
        success: function (data) {
          alert.html(data).fadeIn(); // fade in response data
          form.trigger('reset'); // reset form
          submit.attr("style", "display: none !important");; // reset submit button text
        },
        error: function (e) {
          console.log(e)
        }
      });
    });
  });




  $(document).ready(function () {
    $('#mc_embed_signup').find('form').ajaxChimp();
  });



  if (document.getElementById("js-countdown")) {

    var countdown = new Date("October 17, 2018");

    function getRemainingTime(endtime) {
      var milliseconds = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor(milliseconds / 1000 % 60);
      var minutes = Math.floor(milliseconds / 1000 / 60 % 60);
      var hours = Math.floor(milliseconds / (1000 * 60 * 60) % 24);
      var days = Math.floor(milliseconds / (1000 * 60 * 60 * 24));

      return {
        'total': milliseconds,
        'seconds': seconds,
        'minutes': minutes,
        'hours': hours,
        'days': days
      };
    }

    function initClock(id, endtime) {
      var counter = document.getElementById(id);
      var daysItem = counter.querySelector('.js-countdown-days');
      var hoursItem = counter.querySelector('.js-countdown-hours');
      var minutesItem = counter.querySelector('.js-countdown-minutes');
      var secondsItem = counter.querySelector('.js-countdown-seconds');

      function updateClock() {
        var time = getRemainingTime(endtime);

        daysItem.innerHTML = time.days;
        hoursItem.innerHTML = ('0' + time.hours).slice(-2);
        minutesItem.innerHTML = ('0' + time.minutes).slice(-2);
        secondsItem.innerHTML = ('0' + time.seconds).slice(-2);

        if (time.total <= 0) {
          clearInterval(timeinterval);
        }
      }

      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
    }

    initClock('js-countdown', countdown);

  };



  $('.quick-view-carousel-details').owlCarousel({
    loop: true,
    dots: true,
    items: 1,
  })



  //----- Active No ui slider --------//



  $(function () {

    if (document.getElementById("price-range")) {

      var nonLinearSlider = document.getElementById('price-range');

      noUiSlider.create(nonLinearSlider, {
        connect: true,
        behaviour: 'tap',
        start: [500, 4000],
        range: {
          // Starting at 500, step the value by 500,
          // until 4000 is reached. From there, step by 1000.
          'min': [0],
          '10%': [500, 500],
          '50%': [4000, 1000],
          'max': [10000]
        }
      });


      var nodes = [
        document.getElementById('lower-value'), // 0
        document.getElementById('upper-value')  // 1
      ];

      // Display the slider value and how far the handle moved
      // from the left edge of the slider.
      nonLinearSlider.noUiSlider.on('update', function (values, handle, unencoded, isTap, positions) {
        nodes[handle].innerHTML = values[handle];
      });

    }

  });


  //-------- Have Cupon Button Text Toggle Change -------//

  $('.have-btn').on('click', function (e) {
    e.preventDefault();
    $('.have-btn span').text(function (i, text) {
      return text === "Have a Coupon?" ? "Close Coupon" : "Have a Coupon?";
    })
    $('.cupon-code').fadeToggle("slow");
  });

  $('.load-more-btn').on('click', function (e) {
    e.preventDefault();
    $('.load-product').fadeIn('slow');
    $(this).fadeOut();
  });





  //------- Start Quantity Increase & Decrease Value --------//




  var value,
    quantity = document.getElementsByClassName('quantity-container');

  function createBindings(quantityContainer) {
    var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
    var increase = quantityContainer.getElementsByClassName('increase')[0];
    var decrease = quantityContainer.getElementsByClassName('decrease')[0];
    increase.addEventListener('click', function () { increaseValue(quantityAmount); });
    decrease.addEventListener('click', function () { decreaseValue(quantityAmount); });
  }

  function init() {
    for (var i = 0; i < quantity.length; i++) {
      createBindings(quantity[i]);
    }
  };

  function increaseValue(quantityAmount) {
    value = parseInt(quantityAmount.value, 10);

    console.log(quantityAmount, quantityAmount.value);

    value = isNaN(value) ? 0 : value;
    value++;
    quantityAmount.value = value;
  }

  function decreaseValue(quantityAmount) {
    value = parseInt(quantityAmount.value, 10);

    value = isNaN(value) ? 0 : value;
    if (value > 0) value--;

    quantityAmount.value = value;
  }

  init();

  //------- End Quantity Increase & Decrease Value --------//

  /*----------------------------------------------------*/
  /*  Google map js
    /*----------------------------------------------------*/

  if ($("#mapBox").length) {
    var $lat = $("#mapBox").data("lat");
    var $lon = $("#mapBox").data("lon");
    var $zoom = $("#mapBox").data("zoom");
    var $marker = $("#mapBox").data("marker");
    var $info = $("#mapBox").data("info");
    var $markerLat = $("#mapBox").data("mlat");
    var $markerLon = $("#mapBox").data("mlon");
    var map = new GMaps({
      el: "#mapBox",
      lat: $lat,
      lng: $lon,
      scrollwheel: false,
      scaleControl: true,
      streetViewControl: false,
      panControl: true,
      disableDoubleClickZoom: true,
      mapTypeControl: false,
      zoom: $zoom,
      styles: [
        {
          featureType: "water",
          elementType: "geometry.fill",
          stylers: [
            {
              color: "#dcdfe6"
            }
          ]
        },
        {
          featureType: "transit",
          stylers: [
            {
              color: "#808080"
            },
            {
              visibility: "off"
            }
          ]
        },
        {
          featureType: "road.highway",
          elementType: "geometry.stroke",
          stylers: [
            {
              visibility: "on"
            },
            {
              color: "#dcdfe6"
            }
          ]
        },
        {
          featureType: "road.highway",
          elementType: "geometry.fill",
          stylers: [
            {
              color: "#ffffff"
            }
          ]
        },
        {
          featureType: "road.local",
          elementType: "geometry.fill",
          stylers: [
            {
              visibility: "on"
            },
            {
              color: "#ffffff"
            },
            {
              weight: 1.8
            }
          ]
        },
        {
          featureType: "road.local",
          elementType: "geometry.stroke",
          stylers: [
            {
              color: "#d7d7d7"
            }
          ]
        },
        {
          featureType: "poi",
          elementType: "geometry.fill",
          stylers: [
            {
              visibility: "on"
            },
            {
              color: "#ebebeb"
            }
          ]
        },
        {
          featureType: "administrative",
          elementType: "geometry",
          stylers: [
            {
              color: "#a7a7a7"
            }
          ]
        },
        {
          featureType: "road.arterial",
          elementType: "geometry.fill",
          stylers: [
            {
              color: "#ffffff"
            }
          ]
        },
        {
          featureType: "road.arterial",
          elementType: "geometry.fill",
          stylers: [
            {
              color: "#ffffff"
            }
          ]
        },
        {
          featureType: "landscape",
          elementType: "geometry.fill",
          stylers: [
            {
              visibility: "on"
            },
            {
              color: "#efefef"
            }
          ]
        },
        {
          featureType: "road",
          elementType: "labels.text.fill",
          stylers: [
            {
              color: "#696969"
            }
          ]
        },
        {
          featureType: "administrative",
          elementType: "labels.text.fill",
          stylers: [
            {
              visibility: "on"
            },
            {
              color: "#737373"
            }
          ]
        },
        {
          featureType: "poi",
          elementType: "labels.icon",
          stylers: [
            {
              visibility: "off"
            }
          ]
        },
        {
          featureType: "poi",
          elementType: "labels",
          stylers: [
            {
              visibility: "off"
            }
          ]
        },
        {
          featureType: "road.arterial",
          elementType: "geometry.stroke",
          stylers: [
            {
              color: "#d6d6d6"
            }
          ]
        },
        {
          featureType: "road",
          elementType: "labels.icon",
          stylers: [
            {
              visibility: "off"
            }
          ]
        },
        {},
        {
          featureType: "poi",
          elementType: "geometry.fill",
          stylers: [
            {
              color: "#dadada"
            }
          ]
        }
      ]
    });
  }
});









/* =======================
Maincoza.js
======================= */

(function ($) {

  /*[ Back to top ]
  ===========================================================*/
  var windowH = $(window).height() / 2;

  $(window).on('scroll', function () {
      if ($(this).scrollTop() > windowH) {
          $("#myBtn").css('display', 'flex');
      } else {
          $("#myBtn").css('display', 'none');
      }
  });

  $('#myBtn').on("click", function () {
      $('html, body').animate({ scrollTop: 0 }, 300);
  });


  /*==================================================================
  [ Fixed Header ]*/
  var headerDesktop = $('.container-menu-desktop');
  var wrapMenu = $('.wrap-menu-desktop');

  if ($('.top-bar').length > 0) {
      var posWrapHeader = $('.top-bar').height();
  }
  else {
      var posWrapHeader = 0;
  }

  if ($(window).scrollTop() > posWrapHeader) {
      $(headerDesktop).addClass('fix-menu-desktop');
      $(wrapMenu).css('top', 0);
  }
  else {
      $(headerDesktop).removeClass('fix-menu-desktop');
      $(wrapMenu).css('top', posWrapHeader - $(this).scrollTop());
  }

  $(window).on('scroll', function () {
      if ($(this).scrollTop() > posWrapHeader) {
          $(headerDesktop).addClass('fix-menu-desktop');
          $(wrapMenu).css('top', 0);
      }
      else {
          $(headerDesktop).removeClass('fix-menu-desktop');
          $(wrapMenu).css('top', posWrapHeader - $(this).scrollTop());
      }
  });


  /*==================================================================
  [ Menu mobile ]*/
  $('.btn-show-menu-mobile').on('click', function () {
      $(this).toggleClass('is-active');
      $('.menu-mobile').slideToggle();
  });

  var arrowMainMenu = $('.arrow-main-menu-m');

  for (var i = 0; i < arrowMainMenu.length; i++) {
      $(arrowMainMenu[i]).on('click', function () {
          $(this).parent().find('.sub-menu-m').slideToggle();
          $(this).toggleClass('turn-arrow-main-menu-m');
      })
  }

  $(window).resize(function () {
      if ($(window).width() >= 992) {
          if ($('.menu-mobile').css('display') == 'block') {
              $('.menu-mobile').css('display', 'none');
              $('.btn-show-menu-mobile').toggleClass('is-active');
          }

          $('.sub-menu-m').each(function () {
              if ($(this).css('display') == 'block') {
                  console.log('hello');
                  $(this).css('display', 'none');
                  $(arrowMainMenu).removeClass('turn-arrow-main-menu-m');
              }
          });

      }
  });


  /*==================================================================
  [ Show / hide modal search ]*/
  $('.js-show-modal-search').on('click', function () {
      $('.modal-search-header').addClass('show-modal-search');
      $(this).css('opacity', '0');
  });

  $('.js-hide-modal-search').on('click', function () {
      $('.modal-search-header').removeClass('show-modal-search');
      $('.js-show-modal-search').css('opacity', '1');
  });

  $('.container-search-header').on('click', function (e) {
      e.stopPropagation();
  });


  /*==================================================================
  [ Isotope ]*/
  var $topeContainer = $('.isotope-grid');
  var $filter = $('.filter-tope-group');

  // filter items on button click
  $filter.each(function () {
      $filter.on('click', 'button', function () {
          var filterValue = $(this).attr('data-filter');
          $topeContainer.isotope({ filter: filterValue });
      });

  });

  // init Isotope
  $(window).on('load', function () {
      var $grid = $topeContainer.each(function () {
          $(this).isotope({
              itemSelector: '.isotope-item',
              layoutMode: 'fitRows',
              percentPosition: true,
              animationEngine: 'best-available',
              masonry: {
                  columnWidth: '.isotope-item'
              }
          });
      });
  });

  var isotopeButton = $('.filter-tope-group button');

  $(isotopeButton).each(function () {
      $(this).on('click', function () {
          for (var i = 0; i < isotopeButton.length; i++) {
              $(isotopeButton[i]).removeClass('how-active1');
          }
          $(this).addClass('how-active1');
      });
  });

  /*==================================================================
  [ Filter / Search product ]*/
  $('.js-show-filter').on('click', function () {
      $(this).toggleClass('show-filter');
      $('.panel-filter').slideToggle(400);

      if ($('.js-show-search').hasClass('show-search')) {
          $('.js-show-search').removeClass('show-search');
          $('.panel-search').slideUp(400);
      }
  });

  $('.js-show-search').on('click', function () {
      $(this).toggleClass('show-search');
      $('.panel-search').slideToggle(400);

      if ($('.js-show-filter').hasClass('show-filter')) {
          $('.js-show-filter').removeClass('show-filter');
          $('.panel-filter').slideUp(400);
      }
  });




  /*==================================================================
  [ Cart ]*/
  $('.js-show-cart').on('click', function () {
      $('.js-panel-cart').addClass('show-header-cart');
  });

  $('.js-hide-cart').on('click', function () {
      $('.js-panel-cart').removeClass('show-header-cart');
  });

  /*==================================================================
  [ Cart ]*/
  $('.js-show-sidebar').on('click', function () {
      $('.js-sidebar').addClass('show-sidebar');
  });

  $('.js-hide-sidebar').on('click', function () {
      $('.js-sidebar').removeClass('show-sidebar');
  });

  /*==================================================================
  [ +/- num product ]*/
  $('.btn-num-product-down').on('click', function () {
      var numProduct = Number($(this).next().val());
      if (numProduct > 0) $(this).next().val(numProduct - 1);
  });

  $('.btn-num-product-up').on('click', function () {
      var numProduct = Number($(this).prev().val());
      $(this).prev().val(numProduct + 1);
  });

  /*==================================================================
  [ Rating ]*/
  $('.wrap-rating').each(function () {
      var item = $(this).find('.item-rating');
      var rated = -1;
      var input = $(this).find('input');
      $(input).val(0);

      $(item).on('mouseenter', function () {
          var index = item.index(this);
          var i = 0;
          for (i = 0; i <= index; i++) {
              $(item[i]).removeClass('zmdi-star-outline');
              $(item[i]).addClass('zmdi-star');
          }

          for (var j = i; j < item.length; j++) {
              $(item[j]).addClass('zmdi-star-outline');
              $(item[j]).removeClass('zmdi-star');
          }
      });

      $(item).on('click', function () {
          var index = item.index(this);
          rated = index;
          $(input).val(index + 1);
      });

      $(this).on('mouseleave', function () {
          var i = 0;
          for (i = 0; i <= rated; i++) {
              $(item[i]).removeClass('zmdi-star-outline');
              $(item[i]).addClass('zmdi-star');
          }

          for (var j = i; j < item.length; j++) {
              $(item[j]).addClass('zmdi-star-outline');
              $(item[j]).removeClass('zmdi-star');
          }
      });
  });

  /*==================================================================
  [ Show modal1 ]*/
  $('.js-show-modal1').on('click', function (e) {
      e.preventDefault();
      $('.js-modal1').addClass('show-modal1');
  });

  $('.js-hide-modal1').on('click', function () {
      $('.js-modal1').removeClass('show-modal1');
  });



})(jQuery);