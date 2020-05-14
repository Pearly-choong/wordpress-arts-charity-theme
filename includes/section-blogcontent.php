<div class="">
  <?php
  if (have_posts()) :
    while (have_posts()):
      the_post();
  ?>

  <hr>
  <div class="row">
    <div class="col-lg-4">  
      <p class="theme-color-2">Date: 
      <?php  echo get_the_date('l, h:i:s d/m/Y'); //check php date format ?>
      </p>
    </div>
    <div class="col-lg-4">
      <?php
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
      ?>
      <p class="theme-color-2"> <?php echo 'Posted by: ' . $fname . ' ' . $lname; ?> </p>
    </div>
    <div class="col-lg-4">
      <?php
      $categories = get_the_category();
      ?>
        <p class="text-danger">Category :
          <?php
          foreach($categories as $cat):?>

          <a class="" href="<?php echo get_category_link($cat->term_id); ?>">
            <?php echo $cat->name; //go and add single_cat_title() in archive ?>
          </a>
          <?php endforeach; ?>
        </p>
    </div>
  </div> <!-- row ends here -->
  <div class="row">
    <div class="col-lg-12">
      <?php
        $tags = get_the_tags();
      ?>
      <p class="text-danger">Tag : 
        <?php
          foreach($tags as $tag):?>
            <a class="ml-3" href="<?php echo get_tag_link($tag -> term_id);  ?>">
              <?php echo $tag -> name; ?>
            </a>
        <?php endforeach; ?>
      </p>
    </div>
  </div> <!-- row ends here -->
  <hr>

  <?php
    the_content();
    // the_author();
  ?>

  


<?php// comments_template();?>
<!-- /to get multiple parts of a page add this in single.php -->

<?php

  endwhile;
 else:
endif;

?>
</div>