<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/iStock-938130698-1.jpg')?>);"></div>
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
    <!-- Signs test  -->
  
    <div class="row group" style="background-color:#f4cb08; padding-top: 50px; padding-bottom:50px;">
       <div style="background-color:#f4cb08;">
             <div  class="one-fourth"> 
               <img style="margin-right:auto; margin-left:auto; display:block;" src=" <?php echo get_theme_file_uri('/images/icon-maarittely.png') ?>"></img>
               <div style="margin-right:auto; margin-left:auto; display:block;">
               <h5 >Specification</h5>
               </div>
               <p>We get to know your quoting process and define the configuration rules used within the tool.</p>
             </div>
             <div class="one-fourth">
               <img style="margin-right:auto; margin-left:auto; display:block;" src=" <?php echo get_theme_file_uri('/images/icon-mallinnus.png') ?>"></img>
             </div>
             <div class="one-fourth">
               <img style="margin-right:auto; margin-left:auto; display:block;" src=" <?php echo get_theme_file_uri('/images/icon-testaus.png') ?>"></img>
             </div>
             <div class="one-fourth">
               <img style="margin-right:auto; margin-left:auto; display:block;"  src=" <?php echo get_theme_file_uri('/images/icon-kaytto.png') ?>"></img>
             </div>
       </div>
    </div>  
    <!-- Signs test end --> 

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
          $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        ?>
          <div class="hero-slider__slide" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; ">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
              <div class="event-summary">
                      <div class="event-summary__content">
                         <h3 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                         <p ><?php if (has_excerpt()) {
                                      echo get_the_excerpt();
                                  } else {
                                             echo wp_trim_words(get_the_content(), 30);
                             } ?>
                         </p>
                         <p class="t-center no-margin"><a href="<?php the_permalink(); ?>" class="btn btn--blue">Learn more</a></p>
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
