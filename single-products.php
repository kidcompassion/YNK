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
        <section class="products__wrap">
            <aside class="products__submenu">
            <?php get_template_part('sidebar-products', 'product');?> 
            </aside>
            <section class="products__content">
                
                <?php the_post_thumbnail('medium');?>

                <section class="product__description">
                    <h1><?php the_title();?></h1>
                <p><?php the_content();?></p>
                </section>
        
                <?php get_template_part('collapse', 'product');?>
            </section>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>