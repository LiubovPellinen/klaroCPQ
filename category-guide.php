<?php
get_header();
$photo=get_field('page_banner_background_image', 24)['sizes']['pageBanner'];
$subtitle=get_field('page_banner_subtitle',24);
pageBanner(array(
'title'=>'Our Guides',
'subtitle'=> $subtitle,
'photo'=> $photo
));
?>

<div class="blog-block-center">
    <?php
        while (have_posts()){
            the_post(); 
            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'blogOnePost', 'full' );
    ?>
        <div  class="one-fourth-blog"> 
            <ul>
                <li>
                    <img  src="<?php echo $backgroundImg[0]; ?>"></img>  
                </li>

                <li > 
                    <h2><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p>
                        <?php if (has_excerpt()) { echo get_the_excerpt();}
                              else { echo wp_trim_words(get_the_content(), 30);} 
                        ?> 
                    </p>

                    <p><a href="<?php the_permalink(); ?>" class="c-orange">Read more</a></p>
                </li> 
            </ul>
        </div>

    <?php }
    
    ?>
                                                    
</div>
                                
   


<?php
get_template_part('template-parts/content', 'pagination'); 
get_footer();
?> 
