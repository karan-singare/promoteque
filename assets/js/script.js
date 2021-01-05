$(document).ready(() => {
  /**
   * Preloader Handler
   */
  $(window).on('load', function() {
    $('.preloader-container').fadeOut();
  });
  /**
   * Novigation
   */
  $('.menu-main-navigation-container').addClass('navigation__nav');
  $('#menu-main-navigation').addClass('navigation__list');
  $('#menu-main-navigation .menu-item').addClass('navigation__item');
  $('#menu-main-navigation .menu-item a').addClass('navigation__link');



  /**
   * Scroll to Top
   */
  $('.top-anchor').click(() => {
    window.scrollTo(0, 0);
  });
  $(window).scrollTop() > 200 ? $('.top-anchor').fadeIn() : $('.top-anchor').fadeOut();
  $(window).on('scroll', () => {
    $(window).scrollTop() > 200 ? $('.top-anchor').fadeIn() : $('.top-anchor').fadeOut();
  });

  /**
   * Scroll to story section
   */
  $('.story-anchor').click(() => {
    window.scrollTo(0, $('#story').offset().top);
  });
});
