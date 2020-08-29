<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta viewport="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <title><?php bloginfo('name'); ?> &vert; <?php bloginfo('description'); ?></title>
        <?php wp_head(); ?>
    </head>
    <!-- end HEAD -->

    <!-- BODY -->
    <body>
        
        <!-- HEADER: Global -->
        <header class="header--global">

            <!-- SECTION: Alerts -->
            <section class="header__alerts--global">
                <div class="layout__container--fixed-width">
                    Global Alerts!
                </div>
            </section>
            <!-- end SECTION: Alerts -->

            <!-- NAV -->
            <nav class="header__nav--global">
                <div class="layout__container--fixed-width">
                    Global Navigation!
                </div>
            </nav>
            <!-- end NAV -->

        </header>
        <!-- end HEADER -->