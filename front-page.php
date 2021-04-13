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

<!-- Front page template for a different front page to be implemented -->

<?php get_header(); ?>
      <?php
            add_filter('the_title', 'max_title_length');
      ?>
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
                   <?php
                        else: ?>
             <p><?php __('No Page Found'); ?></p>
                  <?php
                        endif; ?>
      </div><!-- blog-main -->
<?php get_footer(); ?>
