<!-- This is the template for a potential contact us page -->
<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header();?>

<section class="page-wrap">
<div class="container">
	<!-- The following declares the skeleton design of the contact us page -->
	<h1><?php the_title();?></h1>

		<div class="row">
			<!-- When I create the contact us page and use this template the following is where a contact form would go -->
			<div class="col-lg-6">
							
				This is where the contact form goes

			</div>

				<div class="col-lg-6">
							
					<?php get_template_part('includes/section','content');?>

				</div>

		</div>
</div>
</section>

<?php get_footer();?>