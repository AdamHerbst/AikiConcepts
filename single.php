

<!-- Retrieves Header -->
<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
        <!-- Puts in wordpress user's title-->
        <h1><?php the_title(); ?></h1>
        <!-- Retrieves wordpress user content-->
        <?php get_template_part('includes/section', 'blogcontent'); ?>
    </div>
</section>

<!-- retrieves generated footer -->
<?php get_footer(); ?>
