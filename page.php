<?php get_header(); ?>

<section class="page-wrap">
    <h1 class="title"> <?php the_title(); ?></h1>
    <div class="container">
        <!-- <div class="mt-1 w-100"> -->
           
        <!-- </div> -->
        <?php if(has_post_thumbnail()): ?>
            This has a featured image
            <div>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
            </div>
        <?php endif; ?>

        <?php get_template_part('includes/section','content'); ?>
    </div>
</section>


<?php get_footer(); ?>