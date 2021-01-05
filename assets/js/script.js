$(document).ready(() => {
  $('.menu-icon').click(() => {
    $('.nav-container').slideDown(100);
    $('.menu-icon').fadeOut(200);
  });
  $('.nav-icon').click(() => {
    $('.nav-container').slideUp(100);
    $('.menu-icon').fadeIn(200);
  });




});
