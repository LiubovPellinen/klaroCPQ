<div class="slider-title" >
  <h2 >THE BLOG</h2>
  <h1> LATEST NEWS</h1>
  <div class="line" >_______________ </div>
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
                      <div class="post-summary">
                          <div class="post-summary__content">
                              <h3 class="post-summary__title headline headline--tiny" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                              
                                  <p ><?php if (has_excerpt()) {
                                            echo get_the_excerpt();
                                         } else {
                                               echo wp_trim_words(get_the_content(), 30);
                                        } 
                                      ?>
                                  </p>
                               
                              <p class="t-center no-margin"><a href="<?php the_permalink(); ?>" class="btn btn--orange">Learn more</a></p>
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