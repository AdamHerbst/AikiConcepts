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
                   <li> <u><span>Class Times</span></u> 
                
                    Adult Aikido (<b>On Hold</b>): <br>
                    Tues/Thurs - 6:30-8pm <br>
                    Saturdays - 10-11:30am <br>
                    <p></p>
                    Jodo (<b>Socially Distanced)</b>: Tues/Thurs
                    </li>
                 </ul>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="contact">
               <li><u><span>Recent Posts</span></u>
                                <div id="footer-sidebar" class="secondary">
            <div id="footer-sidebar1">
            <?php
              if (is_active_sidebar('footer-sidebar-1')) {
              dynamic_sidebar('footer-sidebar-1');
              }
              ?>
              </div>
              
            </li>
                </ul>
            </div>
       
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <ul class="social">
                    <li><span>Contact Information</span>
                           We are inbetween locations currently. 
                    Please Inquire about Jodo.
                    <b><u><a href = "mailto:aikido@aikiconcepts.org">Aikido@AikiConcepts.org</a></u></b>
                   <b> Phone number: (317) 762-8390 </b>
                  <!-- <a href="https://www.adamherbst.com/aikiconcepts/find-us/" style="font-size:20px;text-decoration:underline;" ><b>Directions</b></a>  -->   
                  </li>      
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
