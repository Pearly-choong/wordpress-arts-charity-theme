<?php

//load stylesheets
function load_css(){
    //bootstrap
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.5.0', 'all');
    wp_enqueue_style('bootstrap');

    //own css style sheet
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');


//load javascript
function load_js()
{
		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '4.5.0', true);
		wp_enqueue_script('bootstrap');
    wp_register_script('js', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true);
		wp_enqueue_script('js');

}
add_action('wp_enqueue_scripts', 'load_js');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support( 'custom-logo');

// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )

);

//adding google fonts
function wpb_add_google_fonts(){
  wp_register_style('wp-googleFonts', '<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">');
  wp_enqueue_style('wp_googleFonts');
}
add_action('wp_print-styles', 'wpb_add_google_fonts');


//custom image size
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);


// Register sidebars
function my_sidebars(){
  register_sidebar(
      array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
      )
    );

    register_sidebar(
        array(
          'name' => 'Blog Sidebar',
          'id' => 'blog-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'
        )
      );
}

add_action('widgets_init', 'my_sidebars');


// custom logo
function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
    add_theme_support('site-title', $defaults);
   }
   
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


// custom post type
function my_first_post_type(){
  $args = array(
    'labels' => array(
        'name' => 'Arts',
        'singular_name' => 'Art',
    ),
  'hierarchical' => true, //booleans value toggles between pages & posts without labels
  'menu_icon' => 'dashicons-admin-customizer',
  'public' => true,
  'has_archive' => true,
  'supports' => array('title', 'editor', 'thumbnail','custom-fields'),// if one of the argument is  not mentioned,
  //if makes difference in features

);
  register_post_type('arts',$args);
}
add_action('init','my_first_post_type');


// Taxanomy

function my_first_taxonomy(){
  $args = array(
    'labels' => array(
      'name' => 'Types',
      'singular_name' => 'Type',
    ),

    'public' => true,
    'hierarchical' => true,//false works like tags, true like catgories without labels


  );
  register_taxonomy('types', array('arts'),$args);

}

add_action('init', 'my_first_taxonomy');



//header image
register_default_headers( array(
  'defaultImage' => array(
      'url'           => get_template_directory_uri() . '/images/background-image.jpg',
      'thumbnail_url' => get_template_directory_uri() . '/images/background-image.jpg',
      'description'   => __( 'The default image for the custom header.', 'artTheme' )
  )
) );

$customHeaderDefaults = array(
  'width' => 1280,
  'height' => 520,
  'default-image' => get_template_directory_uri() . '/images/background-image.jpg'
);

add_theme_support('custom-header', $customHeaderDefaults);


//customize API
require_once get_template_directory() . '/customizer.php';