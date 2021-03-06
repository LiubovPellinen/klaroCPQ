<?php 
get_header();
pageBanner();
?>

<div class="container container--narrow page-section">
<div class="page-links">
            <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent);?></a></h2>
            <ul class="min-list">
               <li><a href="<?php echo get_post_type_archive_link('video');?>">Videos</a></li>
               <li><a href="<?php echo get_category_link(3); ?>">Guides</a></li>
            </ul>
        </div>
    <div class="generic-content">
        <?php the_content();?>
    </div>
</div>   

<?php 
get_template_part('template-parts/content', 'testimonials');
get_template_part('template-parts/content', 'slider-posts');
get_footer(); 
?> 
