
<!-- This is the blog page template -->
<?php
/*
 * Template Name:Blog
 * */
?>

<?php get_header(); ?>
<!-- The following puts the blog sidebar to the left of the content. This is different than the other templates made -->
<section class="page-wrap">
    <div class="container">

        <section class="row">
            <div class="col-lg-3">

             <?php if(is_active_sidebar('blog-sidebar')):?>
                 <?php dynamic_sidebar('blog-sidebar');?>
            <?php endif;?>
                </div>

        <div class="col-lg-9">
        <!-- Puts in wordpress user's title-->
        <h1><?php the_title(); ?></h1>
        <!-- Retrieves wordpress user content-->
        <?php get_template_part('includes/section', 'content'); ?>
        </div>
    </div>
</section>
</div>
</section>

<!-- Retrieves footer from wordpress -->
<?php get_footer(); ?>
