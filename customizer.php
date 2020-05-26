<?php

//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here


   // Background Colour
   $wp_customize->add_setting( 'art_backgroundColour' , array(
       'default'   => '#ffffff',
       'transport' => 'refresh',
   ) );


   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'art_backgroundColourControl', array(
   	'label'      => __( 'Background Colour', 'artTheme' ),
    'description' => 'Change the background Colour',
   	'section'    => 'colors',
   	'settings'   => 'art_backgroundColour',
   ) ) );

   // Header and Footer garden_backgroundColour // Background Colour
    $wp_customize->add_setting( 'art_headerFooterColour' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'art_headerFooterColourControl', array(
    	'label'      => __( 'Header and Footer Colour', 'artTheme' ),
     'description' => 'Change the Header and Footer Colour',
    	'section'    => 'colors',
    	'settings'   => 'art_headerFooterColour',
    ) ) );


   // Footer Message
   $wp_customize->add_section( 'art_footerSection' , array(
       'title'      => __( 'Footer Text', 'artTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'art_footerMessage' , array(
       'default'   => 'copyright@2020',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'art_footerMessageControl', array(
     'label'      => __( 'Footer Text', 'artTheme' ),
     'section'    => 'art_footerSection',
     'settings'   => 'art_footerMessage',
   ) ) );

   // Site Title Text
   $wp_customize->add_section( 'art_siteTitleTextSection' , array(
       'title'      => __( 'Site Title Text', 'artTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'art_siteTitleText' , array(
       'default'   => 'Art Wellington',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'art_siteTitleTextControl', array(
     'label'      => __( 'Site Title Text', 'artTheme' ),
     'section'    => 'art_siteTitleTextSection',
     'settings'   => 'art_siteTitleText',
   ) ) );


   // header image
   $wp_customize->add_section( 'art_frontPageImage' , array(
      'title'      => __( 'Front Page Header Image', 'artTheme' ),
      'priority'   => 30,
  ) );

  $wp_customize->add_setting( 'art_frontPageImageSetting' , array(
      'default'   => '',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'art_frontPageImageControl', array(
    'label'      => __( 'Front Page Header Image', 'artTheme' ),
    'section'    => 'art_frontPageImage',
    'settings'   => 'art_frontPageImageSetting',
  ) ) );




   }

 add_action( 'customize_register', 'mytheme_customize_register' );


//Hook2: wp_head to output custom-generated CSS
 function mytheme_customize_css()
 {
   ?>
    <style type="text/css">
    body {
            background-color: <?php echo get_theme_mod('art_backgroundColour','#ffffff'); ?>!important;
         }
   .myTheme{
             background-color: <?php echo get_theme_mod('art_headerFooterColour', '#000000'); ?>!important ;
           }


  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');