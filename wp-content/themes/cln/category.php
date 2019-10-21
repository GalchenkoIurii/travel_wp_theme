<?php
/**
 * Category page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cln
 */

get_header();
?>
<?php if ( get_theme_mod( 'cln_home_category' ) ): ?>
    <div id="fh5co-portfolio">

        <?php if ( have_posts() ):
            $i = 1;
            while ( have_posts() ): the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'preview' ); ?>

                <?php $i++; endwhile; ?>

            <?php the_posts_pagination( array(
                'end_size' => 1,
                'mid_size' => 1,
                'type'     => 'list',
            ) ); ?>
        <?php else: ?>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div> <!-- end fh5co-portfolio -->
    <div class="clearfix"></div>
<?php endif; ?>

<?php
get_footer();