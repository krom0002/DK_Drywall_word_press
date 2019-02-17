
            <footer class="site-footer">

                <!-- dynamiclly add nav items -->
                <nav class="site-nav">
                    <!-- setsup menu items and name -->
                    <?php
                        $args = array(
                            'theme_location' => 'footer'
                        );
                    ?>

                    <?php wp_nav_menu( $args ); ?>
                </nav>

                <!-- dynamically adds date and name -->
                <p>
                    <?php bloginfo('name'); ?>
                        - &copy;
                    <?php echo date('Y'); ?>
                </p>

                <h5><strong><a href="https://krosswired.com">KrossWired Development</a></strong></h5>
            </footer>

        </div><!-- container  -->

        <?php wp_footer(); ?>

    </body>
</html>