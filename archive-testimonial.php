<?php 
get_header();
pageBanner(array(
'title'=>'All Testimonials',
'subtitle'=>'See what our clients say about us'

));

?>

<div class="container container--narrow page-section">
     
    <?php
        while (have_posts()){
            the_post(); 
            get_template_part('template-parts/content','event');
            ?>
            <hr class="section-breack">
         
 <?php  }

    echo paginate_links();
?>

</div>
<?php get_footer();


?>