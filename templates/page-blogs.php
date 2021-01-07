<?php
  /*
    Template Name: Blogs
  */

  get_header();

  load_banner('blogs');

  $args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
  ];
  $posts = new WP_Query($args);

 ?>
<section class="posts-section">


  <div class="row">
    <div class="posts">
      <?php if ( $posts->have_posts() ): ?>
        <?php while( $posts->have_posts() ): $posts->the_post(); ?>
          <div class="post">
            <div class="post__photo">
              <a href="<?php echo get_post_permalink(get_the_ID()); ?>">
                <img src="<?php  echo get_the_post_thumbnail_url(); ?>" alt="">
              </a>
            </div>
            <a href="<?php echo get_post_permalink(get_the_ID()); ?>">
              <h3 class="post__title"><?php the_title(); ?></h3>
            </a>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>

      <?php wp_reset_postdata();  ?>
    </div>

  </div>

</section>



<?php get_footer(); ?>
