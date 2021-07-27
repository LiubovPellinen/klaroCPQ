<?php
 get_header(); 
 while(have_posts()) {
    the_post();
    pageBanner();
    ?>

   
<div class="container container--narrow page-section">
    
    <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('video');?>">
                <i class="fa fa-home" aria-hidden="true"></i> All Video</a> 
                <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
    
    <?php get_template_part('template-parts/content', 'video'); ?>
    
          
           
 </div>    

<?php }
get_footer(); 
?> 
