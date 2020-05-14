<?php get_header(); ?>

<section class="page-wrap">
<div class="">
      <!-- <div class="mt-5"> -->
      <h1 class="title"> <?php echo single_cat_title(); ?> </h1>
      <hr class="title-decoration">
      <?php get_template_part('includes/section','archive'); ?>
      <!-- Pagination Method 1 -->
   <?php //previous_posts_link();  ?>
   <?php //next_posts_link();  ?>

   <!-- Pagination Method 2 -->
   <div class="container">
      <?php
         global $wp_query;
         $big = 99999999999;
         echo paginate_links(array(
         'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
         'format'=>'?paged-%#%',
         'current' => max(1, get_query_var('paged')),
         'total' => $wp_query -> max_num_pages
         ));
      ?>
   </div>
   <!-- </div> -->
</div>
</section>
<?php get_footer(); ?>