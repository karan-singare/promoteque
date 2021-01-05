<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Creative Service - The Social Edition</title>
  <link rel="icon" href="<?php get_favicon(); ?>" type="image/png">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


    <header class="header">
      <div class="row">
        <div class="header-container">
          <div class="site-logo">
            <a href="/"><img src="<?php echo get_images_path() . 'site-logo.png' ?>" alt="The Social Edition Logo"></a>
          </div>
          <?php get_template_part('partials/navigation'); ?>

        </div>

      </div>



    </header>
