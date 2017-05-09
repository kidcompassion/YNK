<?php
/**
 * Template Name: Front Page Template
 * @package WordPress
 * @subpackage YNK Theme
 * @since 1.0
 */
?>
<?php get_header();?>

<section class="page-body__content">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
    <?php the_title();?>
    <?php the_content();?>
    <?php endwhile; ?>
<?php endif; ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/home-img19e71.jpg">
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/home-img39e71.jpg">
    </div>
      <div class="item">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/home-img49e71.jpg">
    </div>
      <div class="item">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/home-img59e711.jpg">
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/home-img29e71.jpg">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<?php get_footer();?>