<!--/**************************************************************************
* Copyright 2020 Adam Herbst*
* *
* Licensed under the Apache License, Version 2.0 (the "License"); *
* you may not use this file except in compliance with the License. *
* You may obtain a copy of the License at *
* *
* http://www.apache.org/licenses/LICENSE-2.0 *
* *
* Unless required by applicable law or agreed to in writing, software *
* distributed under the License is distributed on an "AS IS" BASIS, *
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.*
* See the License for the specific language governing permissions and *
* limitations under the License. *
**************************************************************************/ -->

<!-- Generates blog content  -->
<div class="blog-post">
  <h2 class="blog-post-title">
    <?php if (is_single()): ?>
      <?php the_title(); ?>
    <?php else: ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    <?php endif; ?>
  </h2>
  <p class="blog-post-meta">
    <?php the_time('F j, Y g:i a'); ?>
     by <a href="<?php echo get_author_posts_url(
         get_the_author_meta('ID')
     ); ?>">
       <?php the_author(); ?>
     </a>
  </p>
  <?php if (has_post_thumbnail()): ?>
    <div class="post-thumb">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>

  <?php if (is_single()): ?>
    <?php the_content(); ?>
  <?php else: ?>
    <?php the_excerpt(); ?>
  <?php endif; ?>

  <?php if (is_single()): ?>
    <?php comments_template(); ?>
  <?php endif; ?>
</div><!-- blog-post -->
