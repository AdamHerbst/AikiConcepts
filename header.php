<!-- Creates the header for the website and places menu's there  -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>AikiConcepts Aikido Dojo</title>
        <?php wp_head();?>
    </head>
    <body>
        <header>
            <section>
                <!-- Containers and 3 rows to put the content and navbar in -->
                <div class="container-fluid" id="topBar">
                    <div class="row">
                        <div class="col-sm">
                            <!-- Logo to the left -->
                            <img src="https://i.ibb.co/h7fNjkk/aiki-Concepts-Logo.jpg" alt="aiki-Concepts-Logo"  width="250" height="125"></a>
                        </div>
                        <!-- Navigation in the middle -->
                        <div class="col-sm">
                            <nav class="navbar fixed-top navbar-expand-md navbar-light" role="navigation">
                                <div class="container">
                                    <?php
                                        wp_nav_menu( array(
                                            'theme_location'    => 'top-menu',
                                            'depth'             => 2,
                                            'container'         => 'div',
                                            'container_class'   => 'collapse navbar-collapse',
                                            'container_id'      => 'bs-example-navbar-collapse-1',
                                            'menu_class'        => 'nav navbar-nav',
                                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'            => new WP_Bootstrap_Navwalker(),
                                        ) );
                                        ?>
                                </div>
                            </nav>
                        </div>
                        <!-- Right column for contact information (hard coded to theme) -->
                        <div class="col-sm">
                            <div class="float-right">
                                <img src="https://adamherbst.com/images/noun_Home_3128906.png" alt="AikiConcepts Address"  width="26" height="24"> </a>
                                <h4 class="navbar-text">5805 E. 56th Street - Indianapolis, IN</h4>
                                <p></p>
                                <img src="https://adamherbst.com/images/noun_Email_3538329.png" alt="AikiConcepts Email"  width="26" height="24"> </a>
                                <h4 class="navbar-text">Aikido@AikiConcepts.org</h4>
                                <br>
                                <p></p>
                                <img src="https://adamherbst.com/images/noun_Phone_2510186.png" alt="AikiConcepts Phone Number"  width="26" height="24"> </a>
                                <h4 class="navbar-text">(317) 762-8390</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>