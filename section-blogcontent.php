<?php if(have_posts() ): while( have_posts() ): the_post();?>


	<?php echo get_the_date();?>
	
	
	<?php 
	$fname = get_the_author_meta('first_name');
	$lname = get_the_author_meta('last_name');
	?>
	
	<p>Posted by: <?php echo $fname . ' '. $lname;?></p>
	
	<?php 
	$tags = get_the_tags();
	foreach($tags as $tag):?>
	
		<a href="<?php echo get_tag_link($tag->term_id);?>">
			<?php echo $tag->name;?>
		</a>
		
		<?php endforeach;?>
	
	
	
		<?php the_content();?>
	

<?php endwhile; else: endif;?>
