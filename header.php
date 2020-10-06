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

<!-- This is the header of the site to be referenced by other areas of code -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- inserts the default wordpress header or whatever it is set to -->
	<?php wp_head();?>
	
</head>
<body>

<header>
	
		<div class="container">
		<?php
		// Declares menus if present
		wp_nav_menu(	
			array(
				'theme_location' => 'top-menu',
				
				'menu_class' => 'top-bar'
			)
		);
		?>
		</div>
	
</header>
