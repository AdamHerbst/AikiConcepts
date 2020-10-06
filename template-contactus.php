

<!-- /**************************************************************************
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
**************************************************************************/-->


<?php
// This is a template for a contact us page. Will create another specialized template like this later
/*
 * Template Name:Contact Us
 * */
?>

<?php get_header();?>

<section class="page-wrap">
<div class="container">
	
	
	<div class="row">
	
		<div class="col-lg-6">
			
			<!--This is where the contact form goes -->
		
		</div>
		
		<div class="col-lg-6">
			
			<?php get_template_part('includes/section','content');?>
		
		</div>
	
	</div>

	
	<!-- Retrieves title from wordpress -->
	<h1><?php the_title();?></h1>
	


</div>
</section>


<!-- Retrieves footer from wordpress -->
<?php get_footer();?>

