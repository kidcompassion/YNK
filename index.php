<?php get_header();?>
<section class="page__wrap">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>    
        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <p><?php the_time('F j, Y');?>
        <p><?php the_post_thumbnail('medium');?></p>
        <p><?php the_excerpt();?>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer();?>