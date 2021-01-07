<?php

  get_header();

  load_banner("");

  $args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
  ];
  $posts = new WP_Query($args);

 ?>
<div class="">


  <div class="row">
    <div class="">
      <?php if ( $posts->have_posts() ): ?>


        <?php while( $posts->have_posts() ): $posts->the_post(); ?>
          <div class="post__single">
						<div class="post__single-photo">
							<?php  echo get_the_post_thumbnail(); ?>
						</div>

            <h3 class="post__title"><?php the_title(); ?></h3>
            <div class="post__details">
              <?php the_content(); ?>
            </div>

          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php wp_reset_postdata();  ?>
    </div>

  </div>

</div>



<?php get_footer(); ?>
