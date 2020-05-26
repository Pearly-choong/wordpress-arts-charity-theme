<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?> <!-- notice the wordpress admin bar on top-->

  </head>
  <body>
  <!-- <div class="bg-info">
        <h1 class="display-4 text-light siteTitle"> <?php //echo get_theme_mod('art_siteTitleText'); ?></h1>
  </div> -->
  <header class="myTheme" >
    <!-- <div class="d-flex justify-content-between"> -->
      <div class="logo text-center pb-3">
          <?php 
          if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
            // echo ('site-title'); 
          }
        ?>
      </div>
      <div class="social-icon">
      </div>
      <!-- </div> -->
      <div class="py-5">
          <!-- <hr> -->
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