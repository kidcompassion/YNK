<?php
/**
 * Template Name: Retail Products Landing Page
 *
 * @package WordPress
 * @subpackage Starter Theme
 * @since 1.0
 */
?>


<?php get_header();?>
    <aside class="products__submenu">
        <?php get_template_part('sidebar-products', 'product');?> 
    </aside>
    <section class="inner-page__header">
    <?php if ( have_posts() ) : //displays the page content ?>
        <?php while ( have_posts() ) : the_post(); ?>    
        <h1><?php the_title();?></h1>
        <p><?php the_content();?></p>
        <?php endwhile; ?>
    <?php endif; ?>
    </section>


    <section class="product__categories">
        <h2>All Product Categories</h2>
        <?php   $types_terms = get_terms( array(
            'taxonomy' => 'product-types',
            'hide_empty' => false,
        ) );?>

        <?php 
        foreach($types_terms as $t):?>
            <a href="<?php echo home_url()?>/retail-products/<?php echo esc_html($t->slug);?>" class="product__details"> 
            <img src="<?php if (function_exists('ttw_thumbnail_url')) echo ttw_thumbnail_url($t->term_id); ?>"/>
            <p><?php echo esc_html($t->name);?></p>
            </a>
        <?php endforeach;?>
    </section>

<?php get_footer();?>