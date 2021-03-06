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
<?php
if (!is_front_page()):
?>
<?php
add_filter( 'the_title', 'max_title_length');
?>
  <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php
    if (is_active_sidebar('sidebar')):
?>
      <?php
        dynamic_sidebar('sidebar');
?>
    <?php
    endif;
?>
  </div><!-- Blog-sidebar -->
<?php
endif;
?>
  </div><!-- row -->
  </div><!-- container -->
  <footer>
 <div class="container">
   <div class="row">
   
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                <ul class="adress">
                   <h3>  <b><span>Class Times</span> </b>  </h3> 
                    <h4>
                    Adult Aikido (<b>On Hold</b>): <br>
                    Tues/Thurs - 6:30-8pm <br>
                    Saturdays - 10-11:30am <br>
                    <p></p>
                    Jodo (<b>Socially Distanced)</b>: Tues/Thurs
                </h4>
                 </ul>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="contact">
                                <div id="footer-sidebar" class="secondary">
            <div id="footer-sidebar1">
            <?php
              if (is_active_sidebar('footer-sidebar-1')) {
              dynamic_sidebar('footer-sidebar-1');
              }
              ?>
              </div>
                </ul>
            </div>
       
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <ul class="social">
                         <h3> <b> <span>Location</span> </b>  </h3>
                           <h4>As of November, 2018, we are offering
                    classes at the All Souls Unitarian Church,
                    5805 E. 56th Street, Indianapolis, between
                    Emerson and Arlington. <a href="https://www.adamherbst.com/aikiconcepts/find-us/" style="font-size:20px;text-decoration:underline;" ><b>Directions</b></a> 
                </h4>
                          
                 </ul>
            </div>
       
       
       </div> 
    </div>
</footer>
<?php
wp_footer();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php
bloginfo('template_url');
?>/js/bootstrap.js"></script>
</body>
</html>
