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

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    


    <h1><?php the_title();?></h1>
    <p><?php the_content();?></p>
    <?php endwhile; ?>
<?php endif; ?>

    <aside class="products__submenu">
    <?php get_template_part('sidebar-products', 'product');?> 
    </aside>
<section class="product__categories">


         <?php
 $queried_object = get_queried_object();

 $queried_term = $queried_object->post_name;
 echo $queried_term;
 ?>
<?php $args = array(
    'post_type'=> 'products',
    'posts_per_page' => 100, 
);?>

<?php 
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

    <!-- pagination here -->

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php if(has_term('food-service', 'product-sectors', $post->ID) === true):?>
    <?php if(has_term($queried_term, 'product-types', $post->ID) === true):?>
          <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail();?>
            <?php the_excerpt();?>
            <a href="<?php the_permalink();?>">More details</a>
        <?php endif;?>
    <?php endif;?>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



</section>

<?php get_footer();?>