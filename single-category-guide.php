<?php
 get_header(); 
 while(have_posts()) {
    the_post();
    pageBanner();
    ?>


<div class="container container--narrow page-section">
    
    <div class="metabox metabox--position-up metabox--with-home-link">
                
                <p>
                <a class="metabox__blog-home-link" href="<?php echo get_category_link(3); ?>">
                <i class="fa fa-book" aria-hidden="true"></i> All Guides</a> 
                <span class="metabox__main">Posted on <?php the_time('n.j.y'); ?> </span></p>
    </div>
    <div > 
            <?php the_post_thumbnail('blogSingle'); ?>
        </div>

    <div class="generic-content">
                    <?php the_content();?>
    </div>
 </div>    

<?php }
get_footer(); 
?> 
