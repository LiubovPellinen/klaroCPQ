<?php 
get_header();
pageBanner(array(
'title'=>'Video',
));

while (have_posts()){
            the_post(); ?>
            <h2 class="video-title"><?php the_title();?></h2>
            <?php
            get_template_part('template-parts/content','video');
            ?>
            
            
         
 <?php  }

get_template_part('template-parts/content', 'pagination'); 
?>



<?php 
get_template_part('template-parts/content','slider-posts');
get_footer();


?>