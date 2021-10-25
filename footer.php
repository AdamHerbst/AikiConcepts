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
                <!-- <ul class="adress"> -->
                   <div class="adress" style="border-bottom: 4px solid #FFF; padding-bottom: 2px; font-weight:bold; font-size: 22px;">Class Times</div>
                
                 <h4 style="font-weight: normal;">   Adult Aikido (On Hold): <br>
                    Tues/Thurs - 6:30-8pm <br>
                    Saturdays - 10-11:30am <br>
                    <br>
                    Jodo (<b>Socially Distanced)</b>: Tues/Thurs
                    
</h4>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!-- <ul class="contact"> -->
               <div class="contact" style="border-bottom: 4px solid #FFF; padding-bottom: 2px; font-weight: bold; font-size: 22px;">Our Blog</div>

               <!-- <h4 style="font-weight: normal; padding-top: 0px;">  -->
                                <!-- <div id="footer-sidebar" class="secondary"> -->
            <!-- <div id="footer-sidebar1"> -->
            <?php
              if (is_active_sidebar('footer-sidebar-1')) {
              dynamic_sidebar('footer-sidebar-1');
              }
              ?>
              <!-- </div> -->
        
            </div>
       
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <!-- <ul class="social"> -->
                    <div class="social" style="border-bottom: 4px solid #FFF; padding-bottom: 2px; font-weight: bold; font-size: 22px;">Contact Information</div>
                    <h4 style="font-weight: normal;">
                           We are inbetween locations currently. 
                    Please Inquire about Jodo.
                    <b><u><a href = "mailto:aikido@aikiconcepts.org">Aikido@AikiConcepts.org</a></u></b>
                   Phone number: <b>(317) 762-8390</b> 
                  <!-- <a href="https://www.adamherbst.com/aikiconcepts/find-us/" style="font-size:20px;text-decoration:underline;" ><b>Directions</b></a>  -->   
            </h4>
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
