

<?php
// This is a template for a contact us page. Will create another specialized template like this later based on this
/*
 * Template Name:Contact Us
 * */
?>

<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!--This is where the contact form goes -->
            </div>

            <div class="col-lg-6">
                <?php get_template_part('includes/section', 'content'); ?>
            </div>
        </div>

        <!-- Retrieves title from wordpress -->
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<!-- Retrieves footer from wordpress -->
<?php get_footer(); ?>
