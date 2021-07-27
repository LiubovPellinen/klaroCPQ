<div class="testimonials-part" >
    
    <h2 >TESTIMONIALS</h2>
    <h1 > WHAT OUR CLIENTS SAY ABOUT US</h1>
    <div class="line">_______________ 
    </div>
     
    <div class="testimonials-content">
      
            <?php
                 $homepageTestimonials=new WP_Query(array(
                     'posts_per_page' =>2,
                     'post_type'=>'testimonial'
          
                 ));
                 while ($homepageTestimonials->have_posts()){
                     $homepageTestimonials->the_post();
                     $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            ?>
            <div  class="one-third-testimonials"> 
                <ul>
                    <li>
                        <img  src="<?php echo $backgroundImg[0]; ?>"></img>  
                    </li>

                    <li > 
                        <h2><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p>
                            <?php 
                                if (has_excerpt()) { echo get_the_excerpt();}
                                else { echo wp_trim_words(get_the_content(), 30);} 
                            ?> 
                        </p>

                        <p><a href="<?php the_permalink(); ?>" class="c-orange">Read more</a></p>
                    </li> 
                </ul>
            </div>
            <?php }?>
                       
    </div>
  </div>  