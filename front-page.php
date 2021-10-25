<?php get_header(); ?>
<?php
add_filter( 'the_title', 'max_title_length');
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>COVID-19 Alert!</strong> Aikido classes on hold! Socially distanced Jodo still going on.
</div>
      <div class="row">
        <div class="col-sm-12 blog-main" >
          <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
          <div class="blog-post">
            <?php the_content(); ?>
          </div><!-- blog-post -->
          <?php
            endwhile; ?>
        <?php else: ?>
          <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>
        </div><!-- blog-main -->

        <div class="text-center">
          <a href="/aikiconcepts/about-us/#learnMoreAbout" class="btn" id="learnMore">Learn More About Aikido</a>
        </div>
        <div id="design-cast">

    <div class="member">
      
        <img src="https://images.adamherbst.com/apply3rd.jpg" class="img-responsive img-thumbnail" alt="Responsive image" />
        <a href="/aikiconcepts//about-us/#moreAikido">  <div class="name">Aikido</div> </a>
    </div>
    <div class="member">
        <img src="https://images.adamherbst.com/jodoMain.jpg" class="img-responsive img-thumbnail" alt="Responsive image" />
        <a href="/aikiconcepts//about-us/#moreJodo">  <div class="name">Seitei Jodo</div> </a>
    </div>
</div>
    <?php get_footer(); ?>
