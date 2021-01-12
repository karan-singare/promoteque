/**
* Preloader Handler
*/
function hidePreloader() {
  $('.preloader-container').fadeOut();
}



$(document).ready(() => {
  // Handling the preloader of the website in the pages which do not have
  const pages = [
    '/',
    '/about-us/',
    '/contact-us/',
    '/services/',
    '/blogs/'
  ];
  const pathname = window.location.pathname;
  for (let i=0; i < pages.length; i++ ) {
    if (pathname !== pages[i]) {
      $('.preloader-container').fadeOut();
    }
  }

  $('.menu-main-navigation-container').addClass('navigation__nav');
  $('#menu-main-navigation').addClass('navigation__list');
  $('#menu-main-navigation .menu-item').addClass('navigation__item');
  $('#menu-main-navigation .menu-item a').addClass('navigation__link');

  $('.navigation__button').click(() => {
    $('.navigation__list').css({
      'visibility': 'visible',
    });
  });
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

  /**
   * Moving Text animation
   */
  // let val = 10;
  // setInterval(() => {
  //   $('.moving-text').css({
  //     'width': `${val}%`,
  //     'height': '8rem',
  //   });
  //   val += 10;
  //   if (val === 100) {
  //     val = 10;
  //   }
  // }, 500);

});
