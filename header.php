<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?> <!-- notice the wordpress admin bar on top-->

  </head>
  <body>
  <!-- <div class="bg-info">
        <h1 class="display-4 text-light siteTitle"> <?php //echo get_theme_mod('art_siteTitleText'); ?></h1>
  </div> -->
  <header class="myTheme px-5 pb-5">
    <div class="row">
      <div class="logo mb-5 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
              // echo ('site-title'); 
            }
          ?>
      </div>
      <div class="container text-right my-searchbar col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <?php get_search_form(); ?>
      </div>
    </div>
    <div class="row mt-2">     
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            //'menu' => 'top_bar,
            'menu_class' => 'top-bar'
          )
          );
        ?>
    </div>
  
</header>