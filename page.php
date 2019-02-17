<?php

    // header
    get_header();

    // Post Loop
    if (have_posts()) :

        while (have_posts()) : the_post();?>

        <article class="post page">
            <!-- addlink and content -->
            <h2><?php the_title(); ?></h2>
            <?php the_content( ); ?>
        </article>    

        <?php endwhile;

    else : 
        echo ' <p>No content found</p>';

    endif;

    // footer
    get_footer();

?>