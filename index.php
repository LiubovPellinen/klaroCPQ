<?php 
get_header();
pageBanner(array(
'title'=>'Welcome to our Blog',
'subtitle'=>'Keep up with our latest new'
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

    <?php }?>
                                                    
</div>
                                
   


<?php
get_template_part('template-parts/content', 'pagination'); 
get_footer();
?> 
