<?php

  function promoteque_theme_support() {
  	add_theme_support( 'title-tag' );
  }
  add_action('after_theme_setup', 'promoteque_theme_support');

  function promoteque_register_styles() {
    wp_enqueue_style('promoteque-animate', get_template_directory_uri() . '/assets/css/animate.min.css', [], '1.0', 'all');
    wp_enqueue_style('promoteque-main', get_template_directory_uri() . '/assets/css/styles.css', [], '1.0', 'all');
    wp_enqueue_style('promoteque-rjedit', get_template_directory_uri() . '/assets/css/rjstyles.css', [], '1.0', 'all');
  }
  add_action('wp_enqueue_scripts', 'promoteque_register_styles');

  function promoteque_register_scripts() {
    wp_enqueue_script('promoteque-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], '3.5.1', true);
    wp_enqueue_script('promoteque-main', get_template_directory_uri() . '/assets/js/script.js', ['promoteque-jquery'], '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'promoteque_register_scripts');

  /**
   * Activate the menus in the theme
   */
  function promoteque_theme_setup()  {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menu('primary', 'Primary Header Navigation');

  }
  add_action('init', 'promoteque_theme_setup');


  /*
   * Custom Helper functions
   */

  function get_favicon() {
    echo get_template_directory_uri() . '/assets/images/favicon.png';
  }

  function get_images_path() {
    return get_template_directory_uri() . '/assets/images/';
  }

  /**
   * Function to load the pages
   * Name of the page inside partials directory must be exactly same as the $page_name
   */
  function load_page(string $page_name) {
    get_template_part( "partials/$page_name" );
  }

  function get_static_pages() {
    $static_pages = [
      'about-us' => [
        'page_name' => 'about-us',
        'page_title' => 'The Social Edition',
        'page_description' => 'Tell your story right',
        'banner_img' => get_images_path() . 'about-us.jpg'
      ],
      'services' => [
        'page_name' => 'services',
        'page_title' => 'Services',
        'page_description' => 'Digital solutions that address real business needs',
        'banner_img' => get_images_path() . 'services.jpg'
      ],
      'contact-us' => [
        'page_name' => 'contact-us',
        'page_title' => 'Contact Us',
        'page_description' => '',
        'banner_img' => get_images_path() . 'contact-us.jpg'
      ],
      'blog' => [
        'page_name' => 'blog',
        'page_title' => 'News, Views & Tips',
        'page_description' => '<a href="https://thesocialedition.com/">The Social Edition</a> / News, Views & Tips',
        'banner_img' => get_images_path() . 'blog.jpg'
      ],
    ];

    return $static_pages;
  }



  function get_page_details(string $page_name) {
    $static_pages = get_static_pages();

    foreach ($static_pages as $key => $page ) {
      if ($key == $page_name) {
        return $page;
      }
    }
  }

  function load_banner(string $page_name) {
    $page = get_page_details($page_name);

    echo "
      <div class='banner'>
        <div class='banner__photo'>
          <img src='" . $page['banner_img'] . "' alt='' class='banner__img' onload='hidePreloader()'>
        </div>
        <div class='banner__headings'>
          <h1 class='heading__primary heading__primary--main'>" . $page['page_title'] . "</h1>
          <h2 class='heading__primary heading__primary--sub'>" . $page['page_description'] . "</h2>
        </div>
      </div>
      ";
  }








?>
