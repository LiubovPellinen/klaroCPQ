<?php 
get_header();
pageBanner();
?>

<div class="container container--narrow page-section">
    
    <div class="generic-content">
        <?php the_content();?>
    </div>
</div>   

<?php 
get_template_part('template-parts/content', 'testimonials');
get_template_part('template-parts/content', 'slider-posts');
get_footer(); 
?> 
