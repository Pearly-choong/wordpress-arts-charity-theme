<div class="">

<?php
if (have_posts()) : ?>
 
  <div class="row">
    <div class="col-lg-9 mb-3">
    <div class="d-flex justify-content-center">
      <?php while (have_posts()):
        the_post();
      ?>
        <div class="blog-info">
        <!-- <div class="col-lg-4 mx-4"> -->
        <div class="card my-3 border mr-5 shadow" style="width: 28rem;">        
            <?php if(has_post_thumbnail()): ?>
                <div>
                  <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="card-img-top img-thumbnail">
                </div>
            <?php endif; ?>
          <div class="card-body mb-2">
            <h5 class="theme-color card-title"> <?php the_title(); ?></h5>
              <?php
              the_excerpt();//cut of some portion of text
              ?>
              <a href="<?php the_permalink(); ?>" class="theme-color-2 my-border mb-4 px-3 py-2 rounded"> Read more </a>
          </div>
        </div>
        </div>
        
      <?php endwhile; ?>

      </div>
    </div> <!-- col ends here -->
    
    <div class="col-lg-3 widget">
        <?php if(is_active_sidebar('blog-sidebar')) :?>
          <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php endif; ?>
      </div> <!-- col ends here -->
  </div>  <!-- row ends here -->

<?php
 else:
endif;
?>

</div>