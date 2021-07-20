<div style="margin-bottom: 30px;" >
  <h2 style="color:#f4cb08; text-align:center;">THE BLOG</h2>
  <h1 style="text-align:center;"> LATEST NEWS</h1>
  <div style="color:#f4cb08; font-weight:bold; text-align:center;" >_______________ </div>
  </div>

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
                              <h3 class="event-summary__title headline headline--tiny" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                              
                                  <p ><?php if (has_excerpt()) {
                                            echo get_the_excerpt();
                                         } else {
                                               echo wp_trim_words(get_the_content(), 30);
                                        } 
                                      ?>
                                  </p>
                               
                              <p class="t-center no-margin"><a href="<?php the_permalink(); ?>" class="btn btn--yellow">Learn more</a></p>
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