    <?php get_template_part('partials/footer'); ?>

    <button href="#header" class="top-anchor">
      <svg>
        <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-chevron-up'; ?>"></use>
      </svg>
    </button>


    <?php wp_footer(); ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
          items: 1,
          loop: true,
          autoplay: true,
          autoplayTimeout: 8000,
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
