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
          <?php if ($i < 4): ?>
            <div class="service service__light">
              <span class="service__number"><?php echo "0". ++$i . ". "; ?></span>
              <h3 class="service__title"><?php the_title(); ?></h3>
              <div class="service__description">
                <?php the_excerpt(); ?>
              </div>
              <div class="service__details">
                <?php the_content(); ?>
              </div>

              <div class="service__separator"></div>

            </div>
          <?php else: ?>

            <div class="service service__dark">
              <span class="service__number"><?php echo "0". ++$i . ". "; ?></span>
              <h3 class="service__title"><?php the_title(); ?></h3>
              <div class="service__description">
                <?php the_excerpt(); ?>
              </div>
              <div class="service__details">
                <?php the_content(); ?>
              </div>

              <div class="service__separator"></div>

            </div>


          <?php endif; ?>



        <?php endwhile; ?>
      <?php endif; ?>

      <?php wp_reset_postdata();  ?>
    </div>
  </div>

  <!-- <a href="#" class="service--btn btn btn--hollow">Get in touch</a> -->

</section>



<?php get_footer(); ?>
