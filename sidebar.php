<aside <?php if(is_front_page()): echo 'class="col-md-8"'; elseif(is_page('Your Nana')): echo 'class="col-md-3"'; else: echo 'class="col-md-6"';endif?>>
<?php if (is_page('Your Nana')):?>
  <?php get_template_part('nana-carousel');?>
<?php else:?>
  <?php get_template_part('food-carousel');?>
<?php endif;?>
</aside>