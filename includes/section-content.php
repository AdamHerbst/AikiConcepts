<!-- This script retrieves all the posts made in the blog and the content applicable to each -->
<?php if( have_posts() ): while( have_posts() ): the_post();?>

	<?php the_content();?>

<?php endwhile; else: endif;?>

