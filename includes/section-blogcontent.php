<!-- Retrieves all posts to display them -->
<?php if(have_posts() ): while( have_posts() ): the_post();?>

<!-- Retrieves date of post -->
	<?php echo get_the_date();?>
	
<!-- Retrieves the author's first and last name for display on a post -->
	<?php 
	$fname = get_the_author_meta('first_name');
	$lname = get_the_author_meta('last_name');
	?>
<!-- Puts "posted by: first name last name in top of post -->
	<p>Posted by: <?php echo $fname . ' '. $lname;?></p>
<!--
	The following will implement tags for the posts - Bug/issue - no tags generates an error
-->
<!--
	This code does not work correctly right now.
	<?php 
	$tags = get_the_tags();
	foreach($tags as $tag):?>
	
		<a href="<?php echo get_tag_link($tag->term_id);?>">
			<?php echo $tag->name;?>
		</a>
		
		<?php endforeach;?>
-->
	
	
<!-- Puts the content of the post on the correct web page -->
		<?php the_content();?>
	

<?php endwhile; else: endif;?>
