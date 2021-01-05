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

          <div class="menu-icon">
            <span>Menu</span>
            <svg class="menu-svg">
              <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-menu' ?>"></use>
            </svg>
          </div>

        </div>


      </div>

      <div class="nav-container">
        <div class="row">
          <svg class="nav-icon">
            <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-close' ?>"></use>
          </svg>
          <?php wp_nav_menu(['theme_location' => 'primary']); ?>
        </div>
      </div>


    </header>
