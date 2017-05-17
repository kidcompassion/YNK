<?php
/**
 *
 * @package WordPress
 * @subpackage Starter Theme
 * @since 1.0
 */
?>


<?php get_header();?>
    <aside class="products__submenu">
        <?php get_template_part('sidebar-products');?>
    </aside>

    <section class="product-type__archive">

         <?php
 $queried_object = get_queried_object();
 print_r($queried_object);
 $queried_term = $queried_object->slug;
 ?>
<h1> <?php echo $queried_object->name;?></h1>
<?php echo term_description( $queried_object->term_id, 'product-types' ) ?>

 <?php $args = array(
        'post_type' => 'products',
        'tax_query' => array(
        array (
            'taxonomy' => 'product-types',
            'field' => 'slug',
            'terms' => $queried_term,
        )
    ),

    );?>
<?php 
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

    <!-- pagination here -->

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_post_thumbnail();?>
        <?php the_excerpt();?>
        <a href="<?php the_permalink();?>">More details</a>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


    </section>
<?php get_footer();?>