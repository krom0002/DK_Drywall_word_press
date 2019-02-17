<!DOCTYPE html <?php language_attributes( )?>>
<html>

    <head>
        <meta charset= "<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo( 'name' ); ?></title>

        <?php wp_head(  ); ?>
    </head>

    <body <?php body_class( ); ?>>

        <div class="container">

            <!-- site header -->
            <header class="site-header">
                <h1><a href="<?php echo home_url(); ?>">
                    <?php bloginfo( 'name' ); ?></a></h1>
                <h3><?php bloginfo( 'description' ); ?>

                    <?php if (is_page(7)) { ?>
                    - Thank you for being a friend
                    <?php }?>                
                
                </h3>

                

                <!-- dynamiclly add nav items -->
                <nav class="site-nav">

                <!-- setsup menu items and name -->
                <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                ?>
                    <?php wp_nav_menu( $args ); ?>
                </nav>

            </header><!-- </site-header>  -->