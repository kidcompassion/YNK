<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('title');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>
<body>

<header class="main">
 <div class="main-header__wrap">
    <a class="main-header__logo" href="<?php bloginfo('url');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/nana-logo.jpg"></a>
        <h1>Nana's Kitchen</h1>
        <nav class="main-header__utility">
            <?php wp_nav_menu( array( 'theme_location' => 'utility-menu' ) ); ?>
        </nav>
            <div class="main-header__mobile-nav-trigger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    </div> 
</header>
<section class="main-header__primary-wrap">
    <nav class="main-header__primary">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
</section>
<section class="container">