<?php
  $page_name = get_query_var('pagename');

 ?>

<?php get_header(); ?>


  <?php load_banner($page_name); ?>

  <div class="posts-container">
    <div class="row">
      <?php if (have_posts()): ?>
        <?php while( have_posts() ): the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <div class="">
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>








<?php get_footer(); ?>
