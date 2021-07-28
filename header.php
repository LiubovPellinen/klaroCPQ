<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<header class="site-header">
    <div class="container">
        <div class="site-branding">
            <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                  the_custom_logo();
            }?> 
      
    
     
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
                <nav class="main-navigation">
                    <ul>
                        <li <?php if (is_page('home') ) echo 'class="current-menu-item"'?>><a href="<?php echo site_url(); ?>"><strong>Home</strong></a></li>
                        <li <?php if (is_page('solutions')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/solutions')?>"><strong>Solutions</strong></a></li>
                        <li <?php if (is_page('knowledge-center')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/knowledge-center');?>"><strong>Knowledge Center</strong></a></li>
                        <li <?php if (is_page('about-us')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/about-us');?>"><strong>About us</strong></a></li>
                        <li <?php if (get_post_type()=='post') echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/blog'); ?>"><strong>Blog</strong></a></li>
                        <li <?php if (is_page('documentation')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/documentation'); ?>"><strong>Documentation</strong></a></li>
                    </ul>
                </nav>
                <div class="site-header__util">
                    <a href="<?php echo site_url('/contact-us')?>" class="btn btn--small btn--orange float-left push-right">Contact us</a>
                </div>
            </div>
        </div>
     </div>
  </header>