<?php
/**
 * Created by PhpStorm.
 * User: grover family
 * Date: 12/21/2015
 * Time: 4:45 PM
 */
get_header(); ?>

    <?php
        if( have_posts() ):
            while( have_posts() ): the_post(); ?>

              <h3><?php the_title(); ?></h3>
                <small>Posted On: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(' | '); ?></small>

                <p><?php the_content(); ?></p>
    <?php   endwhile;

        endif;
    ?>

<?php
get_footer();
?>