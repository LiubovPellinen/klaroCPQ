<div class="row group" style="background-color: #2c2c2c; padding-top: 10px; font-family: 'Roboto Slab'; ">
    
    <h2 style="color:#f4cb08; text-align:center;">TESTIMONIALS</h2>
    <h1 style="color:white; text-align:center;"> WHAT OUR CLIENTS SAY ABOUT US</h1>
    <div style="color:#f4cb08; font-weight:bold; text-align:center; font-family: 'Roboto Condensed'; ">_______________ </div>
     
    <div class="full-width-split group">
        <div class="full-width-split__one">
            <?php
                 $homepageTestimonials=new WP_Query(array(
                     'posts_per_page' =>2,
                     'post_type'=>'testimonial'
          
                 ));
                 while ($homepageTestimonials->have_posts()){
                     $homepageTestimonials->the_post();
                     $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            ?>
            <div class="event-summary">
                <div class="event-summary__content" style="display: inline;">
                    <h3 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="event-summary__testimonial">
                       <p ><?php if (has_excerpt()) {
                                      echo get_the_excerpt();
                                  } else {
                                             echo wp_trim_words(get_the_content(), 30);
                             } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a>
                       </p> 
                   </div>
                    <!--<p class="t-left no-margin"><a href="<?php the_permalink(); ?>" class="btn btn--yellow">Learn more</a></p>-->
                </div>
            </div>
            <?php }?>
        </div>
               
    </div>
  </div>  