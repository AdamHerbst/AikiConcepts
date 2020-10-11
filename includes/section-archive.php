<?php if(have_posts() ): while( have_posts() ): the_post();?>

	<div class="card mb-3">

		<div class="card-body">

	<!-- Puts title in loop to make every post's title show up-->
	<h3><?php the_title(); ?></h3>
	<!-- purs only a portion of the post-->
	<?php the_excerpt();?>
	
	<a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
	</div>
	
	</div>

<?php endwhile; else: endif;?>
