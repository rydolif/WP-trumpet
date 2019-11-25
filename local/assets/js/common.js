$(function() {

//------------------------------tabs-----------------------------
  $('.tabs__wrap').hide();
  $('.tabs__wrap:first').show();
  $('.tabs ul a:first').addClass('tabs__active');
   $('.tabs ul a').click(function(event){
    event.preventDefault();
    $('.tabs ul a').removeClass('tabs__active');
    $(this).addClass('tabs__active');
    $('.tabs__wrap').hide();
     var selectTab = $(this).attr('href');
    $(selectTab).fadeIn();
  });


//------------------------------slider-----------------------------
  var swiper = new Swiper('.hero', {
    effect: 'fade',
    pagination: {
      el: '.hero__pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + 0 + (index + 1) + '</span>';
      },
    }
  });

  var swiper = new Swiper('.client__trust', {
    slidesPerView: 5,
    slidesPerColumn: 2,
    navigation: {
      nextEl: '.client__trust_next',
      prevEl: '.client__trust_prev',
    },
    breakpoints: {
      1200: {
        slidesPerView: 4,
        slidesPerColumn: 2,
      },
      992: {
        slidesPerView: 3,
        slidesPerColumn: 2,
      },
      767: {
        slidesPerView: 2,
        slidesPerColumn: 2,
      },
      480: {
        slidesPerView: 1,
        slidesPerColumn: 2,
      },
    }
  });

  var swiper = new Swiper('.client__recommend', {
    slidesPerView: 6,
    spaceBetween: 30,
    navigation: {
      nextEl: '.client__recommend_next',
      prevEl: '.client__recommend_prev',
    },
    breakpoints: {
      992: {
        slidesPerView: 4,
      },
      767: {
        slidesPerView: 3,
      },
      767: {
        slidesPerView: 2,
      },
    }
  });

  var swiper = new Swiper('.certifications__slider', {
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: true,
    breakpoints: {
      1200: {
        slidesPerView: 2,
      },
      480: {
        slidesPerView: 1,
      },
    }
  });


//-------------------------------попандер---------------------------------------
  $('.modal').popup({
    escape: false,
    blur: false,
    scrolllock: true,
    transition: 'all 0.3s'
  });

//------------------------------------form-------------------------------------------
  $('input[type="tel"]').mask('+0 (000) 000-00-00');

//------------------------------гамбургер-----------------------------
  $('.hamburger').click(function() {
    $(this).toggleClass('hamburger--active');
    $('.nav').toggleClass('nav--active');
    $('.header').toggleClass('header--menu');
  });

//------------------------------up-----------------------------
  $(window).scroll(function(){
      if($(this).scrollTop()>100){
          $('.up').addClass('up--active');
      }
      else if ($(this).scrollTop()<100){
          $('.up').removeClass('up--active');
      }
  });

//-------------------------скорость якоря---------------------------------------
  $(".click").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 40}, 'slow', 'swing');
  });

});

