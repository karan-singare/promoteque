<?php
  /*
    Template Name: Services
  */

  get_header();

  load_banner('services');

  $args = [
    'post_type' => 'service',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
  ];
  $services = new WP_Query($args);
  $i=0;

 ?>
<section class="services-section">


  <div class="row">
    <div class="services">
      <?php if ( $services->have_posts() ): ?>


        <?php while( $services->have_posts() ): $services->the_post(); ?>
          <div class="service">
            <h3 class="service__title"><?php echo ++$i . ". "; ?><?php the_title(); ?></h3>
            <div class="service__description">
              <?php the_excerpt(); ?>
            </div>
            <div class="service__details">
              <?php the_content(); ?>
            </div>

          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php wp_reset_postdata();  ?>
    </div>

  </div>

</section>



<?php get_footer(); ?>
