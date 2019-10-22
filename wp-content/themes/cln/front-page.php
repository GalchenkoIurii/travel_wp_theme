<?php
/**
 * Front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cln
 */

get_header();
?>
    <?php if ( get_theme_mod( 'cln_home_category' ) ): ?>
        <div id="fh5co-portfolio">
            <?php $query = new WP_Query( array(
                'category_name'  => get_theme_mod( 'cln_home_category' ),
                'posts_per_page' => 4,
            ) ); ?>

            <?php if ( $query->have_posts() ):
                $i = 1;
                while ( $query->have_posts() ): $query->the_post(); ?>
                    
                    <?php get_template_part( 'template-parts/content', 'preview' ); ?>

                    <?php $i++; endwhile; ?>
            <?php else: ?>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div> <!-- end fh5co-portfolio -->
        <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
    <?php else: ?>

    <?php endif; ?>
<?php
get_footer();