<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/iStock-1173740460-2048x1152.jpg')?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large"></h1>
        <h2 class="headline headline--medium">Create complex quotes 80% faster!</h2>
        <h3 class="headline headline--small">Digitalize your sales processes with Klaro</h3>
        <a href="<?php echo get_post_type_archive_link('program');?>" class="btn btn--large btn--blue">Find our more</a>
      </div>
    </div>

    <div class="full-width-split group">
    <!-- The left side --> 
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus ">Digitalize your sales processes and create more winning quotes!</h2>
          <div style="color: #F4CB08">
          <b>_______________________________</b>
          </div>       
        </div>
      </div>

    <!-- The right side--> 
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          
           
        <div class="generic-content">
           <?php the_content();?>
          </div>

          <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">Read more</a></p>
        </div>
      </div>
     
    </div>
    <!-- test --> 
    <div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus ">Digitalize your sales processes and create more winning quotes!</h2>
          <div style="color: #F4CB08">
          <b>_______________________________</b>
          </div>       
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus ">Digitalize your sales processes and create more winning quotes!</h2>
          <div style="color: #F4CB08">
          <b>_______________________________</b>
          </div>       
        </div>
        <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus ">Digitalize your sales processes and create more winning quotes!</h2>
          <div style="color: #F4CB08">
          <b>_______________________________</b>
          </div>       
        </div>
      </div>
      </div>
      
    </div>
     <!-- test -->

    
    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
        <?php
        $homepagePosts=new WP_Query(array(
          'posts_per_page' =>3
          
         ));
        while ($homepagePosts->have_posts()){
          $homepagePosts->the_post();
        ?>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg')?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
              <div class="event-summary">
                      <div class="event-summary__content">
                         <h5 class="event-summary__title headline headline--tiny"><a style=" white-space: normal;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                         <p style=" white-space: normal;"><?php if (has_excerpt()) {
                                      echo get_the_excerpt();
                                  } else {
                                             echo wp_trim_words(get_the_content(), 18);
                             } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
                     </div>
                 </div>
              </div>
            </div>
          </div>
         
          <?php } ?>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>
<?php get_footer();
?> 
