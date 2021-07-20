<?php 
get_header();
pageBanner(array(
        'title'=>'KlaroCPQ is a success story for long-time development',
));
?>

<div class="container container--narrow page-section">
    <div class="generic-content">
        <?php the_content();?>
    </div>
</div>   

<?php 
get_template_part('template-parts/content', 'testimonials');
get_template_part('template-parts/content', 'carousel-posts');
get_footer(); 
?> 
