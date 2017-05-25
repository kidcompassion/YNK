<?php
/**
 * Template Name: Food Service Secondary Landing Page
 *
 * @package WordPress
 * @subpackage Starter Theme
 * @since 1.0
 */
?>


<?php get_header();?>
 <section class="product-landing__wrap">
    <aside class="products__submenu">
        <?php get_template_part('sidebar-products', 'product');?> 
    </aside>
    <section class="inner-page__header">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>    
            <h1><?php the_title();?></h1>
            <p><?php the_content();?></p>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
jkdshjkldashjkdsaHJKL
<section class="product__list">
    <?php //Retrieves the value of the current page (is it retail or food services?) and ensures we display correct products
    $queried_object = get_queried_object();
    print_r($queried_object);
     $queried_term = $queried_object->post_name;
echo $queried_term;?>
     ?>
    <?php $args = array(
        'post_type'=> 'products',
        'posts_per_page' => 100, 
    );?>

    <?php 
    $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php if(has_term('food-service', 'product-sectors', $post->ID) === true):?>

                <?php if(has_term($queried_term, 'product-types', $post->ID) === true):?>
                    <?php the_post_thumbnail('thumbnail');?> 
                    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt();?>
                    <a class="more-details" href="<?php the_permalink();?>">More details</a>
            <?php endif;?>
        <?php endif;?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</section>
</section>

<?php get_footer();?>