<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cln
 */

?>

<?php if ( has_post_thumbnail() ): ?>
    <img src="<?php the_post_thumbnail(); ?>" alt="picture">
<?php endif; ?>

<div class="fh5co-portfolio-description">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
</div>