$(document).ready(() => {
  $('.menu-icon').click(() => {
    $('.nav-container').slideDown(100);
    $('.menu-icon').fadeOut(200);
  });
  $('.nav-icon').click(() => {
    $('.nav-container').slideUp(100);
    $('.menu-icon').fadeIn(200);
  });

  /**
   * Novigation
   */
  $('.menu-main-navigation-container').addClass('navigation__nav');
  $('#menu-main-navigation').addClass('navigation__list');
  $('#menu-main-navigation .menu-item').addClass('navigation__item');
  $('#menu-main-navigation .menu-item a').addClass('navigation__link');


});
