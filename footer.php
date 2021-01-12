    <?php get_template_part('partials/footer'); ?>

    <!-- <a href="#header" class="top-anchor">
      <svg>
        <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-chevron-up'; ?>"></use>
      </svg>
    </a> -->
    <button href="#header" class="top-anchor">
      <svg>
        <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-chevron-up'; ?>"></use>
      </svg>
    </button>


    <?php wp_footer(); ?>
    <script type="text/javascript">
      if (window.location.pathname === "/") {
        // document.addEventListener("DOMContentLoaded", bannerLoaded);
        video = document.querySelector('.video-container video');

        video.addEventListener('loadeddata', (e) => {
          if (video.readyState === 4) {
            $('.preloader-container').fadeOut();
            if (video.paused) {
              video.play();
            }
          }
        });
      }

      $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
          items: 1,
          loop: true,
          autoplay: true,
          autoplayHoverPause: true,
          responsiveClass: true,
          dots: true,
          nav: true,
          pagination: true,
        });
      });
    </script>
  </body>
</html>
