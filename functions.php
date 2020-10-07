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
// Load stylesheets
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], false, 'all');
    wp_enqueue_style('bootstrap');
    //make sure this is after bootstrap styles
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');
//Load javascript
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');
//Theme options
add_theme_support('menus');
//Menus
register_nav_menus([
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
]);

