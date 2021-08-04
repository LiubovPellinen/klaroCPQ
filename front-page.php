<?php get_header();

$backgroundImg =get_field('page_banner_background_image',5, true)
?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $backgroundImg['url'];?>);">
    </div>
      <div class="page-banner__content container t-right c-white">
        <h1 class="headline headline--large"></h1>
        <h2 class="headline headline--large-medium"><strong><?php echo get_field('page_banner_title');?></strong></h2>
        <h3 class="headline headline--small"><?php echo get_field('page_banner_subtitle');?></h3>
        <a href="<?php echo site_url('/solutions'); ?>" class="btn btn--large btn--orange">Find our more</a>
      </div>
</div>
<!-- Part 1 start -->
<div class="full-width-split group">
    
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 >THE BEST SOLUTION</h2>
            <h1 > KlaroCPQ</h1>
            <div class="line" >_______________ </div> 
            <div>
                <p class="short-text">
                  <?php echo get_field('additional_text_block'); ?>
                  
                </p>
           </div>  
        </div>
    </div>

    <div class="full-width-split__two">
        <div class="full-width-split__inner">
         
          <div class="generic-content">
           <?php 
               the_content();           
           ?>
          </div>
          <p class="t-center no-margin"><a href="<?php echo site_url('/solutions'); ?>" class="btn btn--orange">Read more</a></p>
        </div>
    </div>
     
</div>
<!-- Part 1 end -->
 
<?php
 get_template_part('template-parts/content', 'implementation-lightBlue'); 
 get_template_part('template-parts/content', 'video'); 
 get_template_part('template-parts/content', 'testimonials');
 get_template_part('template-parts/content', 'contact-us');
 get_template_part('template-parts/content', 'slider-posts');
 get_footer();
 ?> 
