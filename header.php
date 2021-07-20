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
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url() ?>"><strong>Klaro</strong>CPQ</a>
        </h1>
        
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
          <!-- Dynamic WP navigation menu example
          <?php
           //wp_nav_menu(array(
            // 'theme_location' => 'headerMenuLocation'

          // ));
        
          ?> -->
        
            <ul>
              <li <?php if (is_page('home') ) echo 'class="current-menu-item"'?>><a href="<?php echo site_url(); ?>"><strong>Home</strong></a></li>
              <li <?php if (is_page('solutions')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/solutions')?>"><strong>Solutions</strong></a></li>
              <li <?php if (is_page('knowlege-center')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/knowlege-center');?>"><strong>Knowlege Center</strong></a></li>
              <li <?php if (is_page('about-us')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/about-us');?>"><strong>About us</strong></a></li>
              <li <?php if (get_post_type()=='post') echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/blog'); ?>"><strong>Blog</strong></a></li>
              <li <?php if (is_page('documentation')) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/documentation'); ?>"><strong>Documentation</strong></a></li>
            </ul>
            
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--yellow float-left push-right">Contact us</a>
            
          </div>
        </div>
      </div>
    </header>