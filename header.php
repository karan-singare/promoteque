<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Creative Service - The Social Edition</title>
  <link rel="icon" href="<?php get_favicon(); ?>" type="image/png" sizes="16x16">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <div class="header-container">
    <header class="header">
      <div class="row">

        <div class="col-1-of-3">
          <div class="site-logo">
            <img src="<?php echo get_images_path() . 'footer-logo.png' ?>" alt="The Social Edition Logo">
          </div>
        </div>

        <div class="col-2-of-3">

          <div class="nav-container">

            <?php wp_nav_menu(['theme_location' => 'primary']); ?>

            <a href="#" class="call-btn">
              <svg>
                <use xlink:href="<?php echo get_images_path() . 'sprite.svg#icon-phone' ?>"></use>
              </svg>
              get in touch
            </a>
          </div>

        </div>

      </div>


    </header>
  </div>
