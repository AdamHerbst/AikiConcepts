<?php get_header();?>

<!-- The following puts the applicable information on the front page -->
<section class="page-wrap">
<div class="container">
		<h1><?php the_title();?></h1>
		<?php get_template_part('includes/section','content');?>
</div>
</section>

<?php get_footer();?>