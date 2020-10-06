
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

<!-- Declares footer with footer content coming from wordpress-->
<footer>
	
		<div class="container">
		<?php
		//Creates the menu in the footer area
		wp_nav_menu(	
			array(
				'theme_location' => 'footer-menu',
				
				'menu_class' => 'footer-bar'
			)
		);
		?>
		</div>
	
</footer>

<?php wp_footer();?>
</body>
</html>
