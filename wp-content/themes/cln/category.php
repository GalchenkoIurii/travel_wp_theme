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
                <?php if ( has_post_thumbnail() ) {
                    $img_url = get_the_post_thumbnail_url();
                } else {
                    $img_url = 'https://picsum.photos/1280/864';
                } ?>

                <div class="fh5co-portfolio-item <?php if ( $i % 2 == 0 ) {
                    echo 'fh5co-img-right';
                } ?>">
                    <div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php echo $img_url; ?>);"></div>
                    <div class="fh5co-portfolio-description">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content( '' ); ?>
                        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read more', 'cln'); ?></a></p>
                    </div>
                </div>
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