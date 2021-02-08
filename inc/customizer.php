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

<!-- This code works with the CSS to create certain additional custom features -->
<?php
  function wpb_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'wpbootstrap'),
      'description' => sprintf(__('Options for showcase','wpbootstrap')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'wpbootstrap'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));


    $wp_customize->add_setting('showcase_heading', array(
      'default'   => _x('Custom Bootstrap Wordpress Theme', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'wpbootstrap'),
      'section' => 'showcase',
      'priority'  => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'wpbootstrap'),
      'section' => 'showcase',
      'priority'  => 3
    ));

    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('http://test.com', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'wpbootstrap'),
      'section' => 'showcase',
      'priority'  => 4
    ));

    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Read More', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'wpbootstrap'),
      'section' => 'showcase',
      'priority'  => 5
    ));
  }

  add_action('customize_register', 'wpb_customize_register');
