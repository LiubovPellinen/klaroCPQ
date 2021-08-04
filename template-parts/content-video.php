<div class="full-width-split group">
    
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <?php
            $link=get_field('link_to_video_or_guide');
            $replace="player.";
            $link=substr_replace($link,$replace,8,0);
            $replace="video/";
            $link=substr_replace($link,$replace,25,0).'?byline=0&portrait=0';
            ?>

            
            <div style="padding:56.25% 0 0 0;position:relative;">
                <iframe src="<?php echo $link ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
          
        </div>
    </div>

    <div class="full-width-split__two">
        <div class="full-width-split__inner">
         
            <div class="generic-content">
                <p>
                <?php echo get_field('link_description');?>
                </p>
            </div>
             <?php if (get_post_type()!='video') { ?> <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('video');?>" class="btn btn--orange">All video</a></p>
            <?php } ?>
        </div>
    </div>
     
</div>