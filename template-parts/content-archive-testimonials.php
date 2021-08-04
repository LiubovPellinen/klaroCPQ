<div class="post-summary">
                 
                 <div class="post-summary__content">
                    <h5 class="post-summary__title headline headline--tiny"><a class="c-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                     } else {
                         echo wp_trim_words(get_the_content(), 18);
                       } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
            
                 </div>
  </div>