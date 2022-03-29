<!DOCTYPE html>
<html <?php language_attributes(); ?>>
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

<!-- Header template. Also loads all needed bootstrap and javascript files -->
    <head>
        <!-- The next code helps with browser compatability -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <title>
            <?php bloginfo('name'); ?> |
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        </title>
        <!-- Bootstrap core CSS -->
        <link href="<?php bloginfo(
            'template_url'
            ); ?>/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

        
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- The rest of the code stylizes and creates the header (top) part of the website. This is globally available -->
        <header>
            <div class="container-fluid" id="leftBar">
                <figure>
                    <a href="https://www.aikiconcepts.org"> <img src="https://i.ibb.co/h7fNjkk/aiki-Concepts-Logo.jpg" alt="aiki-Concepts-Logo"  width="250" height="125"></a>
                    <figcaption><b>Est. 1987</b>
                    <br>Yoshinkan Aikido Dojo </figcaption>
                </figure>
                <nav class="blog-nav navbar-fixed-top navbar-expand">
                    <div class="container" id=footerCont>
                        <!-- Wordpress navigation menu implemented -->
                        <?php wp_nav_menu(
                            array(
                              'menu' => 'primary',
                              'depth' => 2,
                              'container_class' => 'extra_menu_class',
                              'link_before' => '<span class="screen-reader-text">',
                              'link_after' => '</span>',
                            )
                            );    
                            ?>
                    </div>
                    </nav>
            </div>
                <div id="rightBar">
                    <!-- <p></p> -->
                    <br>
                    <!-- <img src="https://adamherbst.com/images/noun_Home_3128906.png" alt="AikiConcepts Address"  width="35" height="35"> </a>
                    (Inquire about Jodo)
                    <p></p> -->

                    <img src="https://adamherbst.com/images/noun_Email_3538329.png" alt="AikiConcepts Email"  width="35" height="35"> 
                    Aikido@AikiConcepts.org
                    <!-- <p></p> --><br>
                    <img src="https://adamherbst.com/images/noun_Phone_2510186.png" alt="AikiConcepts Phone Number"  width="35" height="35"> 
                    (317) 762-8390
                    <a href="https://www.facebook.com/AikiConcepts-Inc-160612216123"> <img src="https://adamherbst.com/images/facebook_Icon_Red.png" alt="Facebook Logo"  style="margin-left:50px;" width="60" height="60"></a>
            
            </div>
        </header>
        <div class="container">
        <div class="blog-header">
        </div>