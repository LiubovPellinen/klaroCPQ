<?php 
get_header();
pageBanner(array(
        'title'=>'Quoting now takes two days instead of two weeks.',
));
?>

<div class="container container--narrow page-section">
    <div class="generic-content">
        <?php the_content();?>
        <h3 class="t-center c-blue"> 
            <?php echo get_field('klaro_features_title');?>
        </h3>
        <?php echo get_field('klaro_features_content');?>
       
        <h3 class="t-center c-blue" >
            <?php echo  get_field('klaro_benefits_title');?>
        </h3>    
        <?php echo get_field('klaro_benefits_content');?>
        
    </div>
</div>   

<?php 
get_template_part('template-parts/content', 'implementation-lightBlue');
get_template_part('template-parts/content', 'contact-us');
get_template_part('template-parts/content', 'testimonials');
get_template_part('template-parts/content', 'slider-posts');
get_footer(); 
?> 
