(function ($) {
  $(document).ready(function () {
    // START document ready
    // start
    $('.cities__list').slick({
      infinite: true,
      slidesToShow: 7,
      slidesToScroll: 1,
      prevArrow: $('.cities__slider-prev'),
      nextArrow: $('.cities__slider-next'),
      responsive: [
        {
          breakpoint: 1001,
          settings: {
            slidesToShow: 5,
          },
        },
        {
          breakpoint: 801,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 601,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 351,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    });
    // end
    // start
    $('.topsingle__img-list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: $('.topsingle__slider-prev'),
      nextArrow: $('.topsingle__slider-next'),
    });
    // end
    // start
    $('.trustus__list').each(function () {
      const $this = $(this);
      const $slider = $this.closest('.trustus__slider');
      $this.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $slider.find('.trustus__slider-prev'),
        nextArrow: $slider.find('.trustus__slider-next'),
      });
    });
    // end
    // start
    $('.featuresofserv__list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: $('.featuresofserv__slider-prev'),
      nextArrow: $('.featuresofserv__slider-next'),
    });
    // end
    // start
    $('.header-nav__mob-btn').on('click', function () {
      $(this).toggleClass('active');
      $('.header-nav nav').toggleClass('active');
    });
    // end
    // start
    var slickInitCatalogchar = false;
    var slickInitForrent = false;
    var slickInitKindofcranes = false;

    function initSlickCatalogchar() {
      if ($(window).width() < 900 && !slickInitCatalogchar) {
        $('.catalogchar__list').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          prevArrow: $('.catalogchar__slider-prev'),
          nextArrow: $('.catalogchar__slider-next'),
          responsive: [
            {
              breakpoint: 501,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        });
        slickInitCatalogchar = true;
      } else if ($(window).width() >= 900 && slickInitCatalogchar) {
        $('.catalogchar__list').slick('unslick');
        slickInitCatalogchar = false;
      }
    }

    function initSlickForrent() {
      if ($(window).width() < 900 && !slickInitForrent) {
        $('.forrent__list').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          prevArrow: $('.forrent__slider-prev'),
          nextArrow: $('.forrent__slider-next'),
          responsive: [
            {
              breakpoint: 501,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        });
        slickInitForrent = true;
      } else if ($(window).width() >= 900 && slickInitForrent) {
        $('.forrent__list').slick('unslick');
        slickInitForrent = false;
      }
    }

    function initSlickKindofcranest() {
      if ($(window).width() < 900 && !slickInitKindofcranes) {
        $('.kindofcranes__list').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          prevArrow: $('.kindofcranes__slider-prev'),
          nextArrow: $('.kindofcranes__slider-next'),
          responsive: [
            {
              breakpoint: 501,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        });
        slickInitKindofcranes = true;
      } else if ($(window).width() >= 900 && slickInitKindofcranes) {
        $('.kindofcranes__list').slick('unslick');
        slickInitKindofcranes = false;
      }
    }

    initSlickCatalogchar();
    initSlickForrent();
    initSlickKindofcranest();

    $(window).resize(function () {
      initSlickCatalogchar();
      if (slickInitCatalogchar) {
        $('.catalogchar__list').slick('setPosition');
      }

      initSlickForrent();
      if (slickInitForrent) {
        $('.forrent__list').slick('setPosition');
      }

      initSlickKindofcranest();
      if (slickInitKindofcranes) {
        $('.kindofcranes__list').slick('setPosition');
      }

      disableSlick('.home .forrent__list');
    });
    // end
    // start
    function disableSlick(el) {
      $(el).each(function () {
        if ($(this).hasClass('slick-initialized')) {
          $(this).slick('unslick');
        }
      });
    }
    disableSlick('.home .forrent__list');
    // end
    // END document ready
  });
})(jQuery);
