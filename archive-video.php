<?php 
get_header();
pageBanner(array(
'title'=>'Video',
'subtitle'=>'',


));

?>


       
    <?php
        while (have_posts()){
            the_post(); ?>
            <h2 style="text-align:center;"><?php the_title();?></h2>
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