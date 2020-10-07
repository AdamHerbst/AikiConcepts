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

<!-- Retrieves Header -->
<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
        <!-- Puts in wordpress user's title-->
        <h1><?php the_title(); ?></h1>
        <!-- Retrieves wordpress user content-->
        <?php get_template_part('includes/section', 'content'); ?>
    </div>
</section>

<!-- retrieves generated footer -->
<?php get_footer(); ?>
