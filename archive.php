

<!-- Retrieves Header -->
<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
        <!-- Puts in wordpress user's title-->
   
        <!-- Retrieves wordpress user content-->
        <?php get_template_part('includes/section', 'archive'); ?>
        
        <?php previous_posts_link();?>
        <?php next_posts_link();?>
        
    </div>
</section>

<!-- retrieves generated footer -->
<?php get_footer(); ?>
