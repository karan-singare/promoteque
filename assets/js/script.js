$(document).ready(() => {
  // Handling the preloader of the website in the pages which do not have
  // const pages = [
  //   '/',
  //   '/about-us/',
  //   '/contact-us/',
  //   '/services/',
  //   '/blogs/'
  // ];
  const pathname = window.location.pathname;
  if (pathname === '/') {
    $('.preloader-container').fadeOut();
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
   * Fixing the font-size issue on the screen width 1280
   */
  if (screen.width === 1280) {
    $('.navigation__link').css({
      'font-size': '4rem',
    });
  }

  /**
   * Auto playing the videos
   */
  const banner_video = document.querySelector('.video-container video');
  const work_video = document.querySelector('.work video');

  const interval1 = setInterval(() => {
    if (banner_video.readyState >=3) {
      if (banner_video.paused) {
        banner_video.play();
        banner_video.controls = false;

      }
      clearInterval(interval1);
    }
  }, 500);

  const interval2 = setInterval(() => {
    if (work_video.readyState >=3) {
      if (work_video.paused) {
        work_video.play();
        banner_video.controls = false;
      }
      clearInterval(interval2);
    }
  }, 500);

});
