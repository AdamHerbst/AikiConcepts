<!-- The logic of the content for the blogs is below -->
<!-- Makes sure to display posts only if there are any that exist -->
<?php if( have_posts() ): while( have_posts() ): the_post();?>
	<!-- Puts the date in -->
	<p><?php echo get_the_date('l jS F, Y');?></p>
	<!-- Places the content from wordpress user below date -->
	<?php the_content();?>
	<!-- Inserts User first and last name if present -->
	<?php 
		$fname = get_the_author_meta('first_name');
		$lname = get_the_author_meta('last_name');
	?>
	<p>Posted by <?php echo $fname;?> <?php echo $lname;?></p>
	<!-- Retrieves the tags inputted by wordpress user for blog post -->
	<?php
		$tags = get_the_tags();
			if($tags):
			foreach($tags as $tag):?>
			<a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
				<?php echo $tag->name;?>
			</a>
	<?php endforeach; endif;?>

	<?php 
		$categories = get_the_category();
			foreach($categories as $cat):?>
			<a href="<?php echo get_category_link($cat->term_id);?>">
				<?php echo $cat->name;?>
			</a>
	<?php endforeach;?>
				<!-- Comments need to be implemented -->
	<?php // comments_template();?>

<?php endwhile; else: endif;?>

