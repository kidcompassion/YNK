<?php if (is_page('Your Nana')):?>
  <?php get_template_part('nana-carousel');?>
<?php else:?>
  <?php get_template_part('food-carousel');?>
<?php endif;?>
