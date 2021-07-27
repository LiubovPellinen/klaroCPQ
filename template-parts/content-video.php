<div class="full-width-split group">
    
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <?php
            $link=get_field('link_to_video');
            $replace="player.";
            $link=substr_replace($link,$replace,8,0);
            $replace="video/";
            $link=substr_replace($link,$replace,25,0);
            ?>
            <iframe src="<?php echo $link ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <div class="full-width-split__two">
        <div class="full-width-split__inner">
         
            <div class="generic-content">
                <p>
                <?php echo get_field('description_video');?>
                </p>
            </div>
             <?php if (get_post_type()!='video') { ?> <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('video');?>" class="btn btn--yellow">All video</a></p>
            <?php } ?>
        </div>
    </div>
     
</div>