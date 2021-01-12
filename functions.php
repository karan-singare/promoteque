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
    wp_enqueue_script('promoteque-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], '3.5.1', false);
    wp_enqueue_script('promoteque-owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel.js', ['promoteque-jquery'], '1.0', false);
    wp_enqueue_script('promoteque-main', get_template_directory_uri() . '/assets/js/script.js', ['promoteque-jquery'], '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'promoteque_register_scripts');

  /**
   * Activate the menus in the theme
   */
  function promoteque_theme_setup()  {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', ['aside', 'image', 'video'] );

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
   * Custom Post Type Service
   */
  function promoteque_post_type_service() {
    $labels = [
      'name' => 'Services',
      'singular_name' => 'Service',
      'add_new' => 'Add Service',
      'all_items' => 'All Services',
      'add_new_item' => 'Add Service',
      'new_item' => 'New Service',
      'edit_item' => 'Edit Service',
      'view_item' => 'View Service',
      'search_item' => 'Search Service',
      'not_found' => 'No Services found',
      'not_found_in_trash' => 'No Services found in trash',
      'parent_item_colon' => 'Parent Item'
    ];
    $args = [
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchicalal' => false,
      'supports' => [
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'revisions'
      ],
      'taxonomies' => ['category', 'post_tag'],
      'position' => 5,
      'exclude_from_search' => false
    ];

    register_post_type('service', $args);
  }
  add_action('init', 'promoteque_post_type_service');

  /**
   * Function to load the pages
   * Name of the page inside partials directory must be exactly same as the $page_name
   */
  function load_page(string $page_name) {
    get_template_part( "partials/$page_name" );
  }

  function get_static_pages() {
    $static_pages = [
      '404' => [
        'page_name' => '404',
        'page_title' => 'The Page Not Found',
        'page_description' => '',
        'banner_img' => get_images_path() . '404.jpg'
      ],
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
      'blogs' => [
        'page_name' => 'blogs',
        'page_title' => 'News & Views',
        'page_description' => 'Digital trends to keep you ahead of the game',
        'banner_img' => get_images_path() . 'blogs.jpg'
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
    if ($page_name == "") {
      // echo "<script type='text/javascript'>
      //         $('header').css('background': 'black');
      //      </script>";
      echo "";
    } else {

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

  }


?>
