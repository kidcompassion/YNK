<?php
/**
 * @package WordPress
 * @subpackage Starter Theme
 * @since 1.0
 */
?>


<?php get_header();?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>  
    <aside class="post_sidebar">
        <?php the_post_thumbnail('medium');?>
    </aside>
        <section class="post__wrap">    
            
            <h1><?php the_title();?></h1>
            <p><?php the_time('F j, Y');?>
            <p><?php the_content();?></p>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>