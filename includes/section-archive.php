<!-- This is a skeleton of how the archived blog posts should look -->
<?php if( have_posts() ): while( have_posts() ): the_post();?>
	<!-- As with the other sections the following is a different way of displaying the archived posts -->
	<div class="card mb-3">
		<!-- Defines as a card layout to display the appropriate information -->
		<div class="card-body d-flex justify-content-center align-items-center">
			<?php if(has_post_thumbnail()):?>

				<img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">

			<?php endif;?>
			<!-- Inserts the content when this template is used -->
			<div class="blog-content">
				<!-- Inserts the wordpress archived post title and an excerpt of the post if longer than a certain number of characters -->
				<h3><?php the_title();?></h3>
				<?php the_excerpt();?>

				<a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>

			</div>
		</div>
	</div>

<?php endwhile; else: endif;?>

