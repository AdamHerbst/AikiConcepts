
<?php //This function gets the front page header
get_header(); ?>
<section class="page-wrap">
  <div class="container">
    <!-- Inputs title from wordpress user of front page-->
    <h1><?php the_title(); ?></h1>
    <!-- gets content for front page-->
    <?php get_template_part('includes/section', 'content'); ?>
  </div>
</section>
<!-- //This function gets the footer information from wordpress user -->
<?php get_footer(); ?>
