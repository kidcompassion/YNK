<?php
/**
 * Template Name: Front Page Template
 * @package WordPress
 * @subpackage YNK Theme
 * @since 1.0
 */
?>
<?php get_header();?>

<section class="front-page__body-content">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
    <?php the_content();?>
    <?php endwhile; ?>
<?php endif; ?>
</section>
<?php get_sidebar();?>

<?php get_footer();?>