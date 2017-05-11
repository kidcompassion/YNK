<?php
/**
 * Template Name: Find Us Template
 * @package WordPress
 * @subpackage Starter Theme
 * @since 1.0
 */
?>


<?php get_header();?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
    <section class="page__wrap">
    <h1><?php the_title();?></h1>
    <p><?php the_content();?></p>
    <?php get_template_part('tabs');?>
</section>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar();?>
<?php get_footer();?>