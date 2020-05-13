<?php get_header(); ?>

<section class="page-wrap">
    <h1 class="title"><?php bloginfo( 'name' ); ?></h1>
    <div class="container">
        <div class="row">
        <div class="mt-1 col-lg-9">
            <?php get_template_part('includes/section','content'); ?>
        </div>
        <div class="widget pl-5 col-lg-3">
            <?php if(is_active_sidebar('page-sidebar')) :?>
                <?php dynamic_sidebar('page-sidebar'); ?>
            <?php endif; ?>
        </div> 
        </div>      
    </div>
</section>

<?php get_footer(); ?>

