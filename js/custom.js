(function ($) {
  'use strict';

  $(window).on('load', function () {
    $('.preloader').addClass('done');
    window.setTimeout(function () { $('.preloader').remove(); }, 500);
  });

  $(function () {
    var $slides = $('.hero-slide');
    var currentSlide = 0;

    if ($slides.length > 1) {
      window.setInterval(function () {
        $slides.eq(currentSlide).removeClass('active');
        $('.hero-dots button').eq(currentSlide).removeClass('active');
        currentSlide = (currentSlide + 1) % $slides.length;
        $slides.eq(currentSlide).addClass('active');
        $('.hero-dots button').eq(currentSlide).addClass('active');
      }, 5000);
    }

    $('.hero-dots button').on('click', function () {
      var index = $(this).index();
      $slides.removeClass('active').eq(index).addClass('active');
      $('.hero-dots button').removeClass('active').eq(index).addClass('active');
      currentSlide = index;
    });

    $('.navbar-collapse a[href*="#"]').on('click', function () {
      $('.navbar-collapse').collapse('hide');
    });

    $('.navbar a[href*="#"]:not([href="#"])').on('click', function (event) {
      var target = this.hash;
      var $target = $(target);
      if ($target.length && location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')) {
        event.preventDefault();
        $('html, body').stop().animate({ scrollTop: $target.offset().top - 49 }, 650);
      }
    });

    function revealOnScroll() {
      var threshold = $(window).scrollTop() + $(window).height() - 40;
      $('.fade-in-up').each(function () {
        if ($(this).offset().top < threshold) $(this).addClass('visible');
      });
      $('.back-top').toggle($(window).scrollTop() > 350);
    }
    $(window).on('scroll resize', revealOnScroll);
    revealOnScroll();

    $('.back-top').on('click', function (event) {
      event.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, 600);
    });

    $('.mobile-sidebar-toggle').on('click', function () {
      $('.dash-sidebar').toggleClass('open');
    });

    $('.dash-menu a[href^="#"]').on('click', function (event) {
      var $tab = $('.portal-tabs a[href="' + this.hash + '"]');
      if ($tab.length) {
        event.preventDefault();
        $tab.tab('show');
      }
      $('.dash-sidebar').removeClass('open');
    });

    $('#login-form').on('submit', function (event) {
      event.preventDefault();
      window.location.href = 'dashboard.php';
    });
    $('#signup-form').on('submit', function (event) {
      event.preventDefault();
      window.location.href = 'login.php';
    });
  });
}(jQuery));
