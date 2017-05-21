
<?php if (is_page_template('food-service-product-landing-page.php')=== true || is_page_template('food-service-secondary-landing-page.php') ===true|| has_term('food-service', 'product-sectors')):?>
<h2>Food Service</h2>
<?php wp_nav_menu( array( 'theme_location' => 'food-service-sidebar-products' ) ); ?>
<?php elseif (is_page_template('retail-product-landing-page.php')=== true|| is_page_template('retail-secondary-landing-page.php')=== true || has_term('retail', 'product-sectors')):?>
<h2>Grocery Retail</h2>
<?php wp_nav_menu( array( 'theme_location' => 'retail-sidebar-products' ) ); ?>
<?php endif;?>