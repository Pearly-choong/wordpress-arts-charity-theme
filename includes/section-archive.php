<div class="bg-info">
<?php
if (have_posts()) : ?>
  <div class="row">
  <div class="col-lg-9">
  <?php while (have_posts()):
    the_post();
  ?>
    <!-- <div class="card  mb-3 ">
      <div class="card-body"> -->

        <?php if(has_post_thumbnail()): ?>
            This has a featured image
            <div>
              <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
            </div>
      <?php endif; ?>

    <h1> <?php the_title(); ?>   </h1>

    <?php
    the_excerpt();//cut of some portion of text
    ?>

    <a href="<?php the_permalink(); ?>" class="text-light"> Read more </a>
  <!-- </div>
</div> -->
  <?php endwhile; ?>
  </div> 
  <!-- col ends here -->
  <div class="col-lg-3 widget">

      <?php if(is_active_sidebar('blog-sidebar')) :?>
        <?php dynamic_sidebar('blog-sidebar'); ?>

      <?php endif; ?>
    </div>
  </div>
  <!-- row ends here -->
  <?php
 else:
endif;

?>
</div>