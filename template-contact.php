<?php
/*
Template Name: Contact form
*/
?>

<?php get_header(); ?>

<section class="page-wrap">
    <h1 class="title"> <?php the_title(); ?></h1>
    <div class="container">     
        <p>Contact form</p>
        <?php get_template_part('includes/section','content'); ?>
    </div>
</section>


<?php get_footer(); ?>