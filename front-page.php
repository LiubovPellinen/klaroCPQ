<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/test.jpg')?>);">
    </div>
      <div class="page-banner__content container t-right c-white">
        <h1 class="headline headline--large"></h1>
        <h2 class="headline headline--large-medium"><strong>Create complex quotes 80% faster!</strong></h2>
        <h3 class="headline headline--small">Digitalize your sales processes with Klaro</h3>
        <a href="<?php echo get_post_type_archive_link('program');?>" class="btn btn--large btn--orange">Find our more</a>
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
                <p style="color:#b3b3b3; white-spase:normal; font-style: italic; font-size: 1.5rem;">
                    Klaro digital solutions support the sales process with automation. With Klaro digital sales tools, you take care of the sales process from lead acquisition to trade.
                </p>
           </div>  
        </div>
    </div>

    <div class="full-width-split__two">
        <div class="full-width-split__inner">
         
          <div class="generic-content">
           <?php the_content();?>
          </div>
          <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--orange">Read more</a></p>
        </div>
    </div>
     
</div>
<!-- Part 1 end -->
 
<?php
 get_template_part('template-parts/content', 'implementation-lightBlue'); 
 get_template_part('template-parts/content', 'video'); 
 get_template_part('template-parts/content', 'testimonials');
  get_template_part('template-parts/content', 'slider-posts');
 get_footer();
 ?> 
