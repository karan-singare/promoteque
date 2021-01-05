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

});
