<?php get_header(); ?>
<!-- Loads front page content -->
      <div class="row">
        <div class="col-sm-12 blog-main text-center">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
        </div><!-- blog-main -->
<?php get_footer(); ?>
