<?php 
get_header();
pageBanner(array(
'title'=>'Welcome to our Blog',
'subtitle'=>'Keep up with our latest new'
));
?>

<div class="row group" >
    <?php
        while (have_posts()){
            the_post(); 
            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
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

                    <p><a href="<?php the_permalink(); ?>" class="l-yellow">Read more</a></p>
                </li> 
            </ul>
        </div>

    <?php }?>
                                                    
</div>
                                
   
<div style="text-align:center; margin-top:30px;">
<?php 
$pages=paginate_links( array('type'  => 'array'));
if( is_array( $pages ) ) {
    
    echo '<div class="pagination">';
    foreach ( $pages as $page ) {
      echo $page;
    }
   echo '</div>';
    } ?>
</div>

<?php
get_footer();


?> 
