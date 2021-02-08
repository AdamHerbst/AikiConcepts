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

<!-- Creates the design and content for the footer (bottom) of the site -->
<?php if (!is_front_page()): ?>
  <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if (is_active_sidebar('sidebar')): ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div><!-- Blog-sidebar -->
<?php endif; ?>
  </div><!-- row -->
  </div><!-- container -->
  <footer>
    <div class="container-fluid" id="footerCustom">
        <!-- Creates 3 rows for content to be implemented -->
        <div class="row">
            <div class="col-sm-4" id="leftFooter">
                <!-- Hard Coded Theme Content-->
                <!-- Left content -->
                <h2> <b>Class Times </b></h2>
                <h4>
                    Adult Aikido (On Hold): <br>
                    Tues/Thurs - 6:30-8pm <br>
                    Saturdays - 10-11:30am <br>
                    <p></p>
                    Jodo (Socially Distanced): Tues/Thurs
                </h4>
            </div>
            <!-- Recent Posts still needs implemented here -->
            <div class="col-sm-4" class="middleFooter">
                <h2><b>Recent Posts</b></h2>
            <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
    </div>
            <div class="col-sm-4" class="rightFooter">
                <!-- Right Column location information -->
                <h2><b>Location</b></h2>
                <h4>As of November, 2018, we are offering
                    classes at the All Souls Unitarian Church,
                    5805 E. 56th Street, Indianapolis, between
                    Emerson and Arlington. 
                </h4>
            </div>
        </div>
    </div>
    </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>
