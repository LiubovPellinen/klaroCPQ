<?php
function pageBanner($args = NULL) {
  
  if (!$args['title']) {
    $args['title'] = get_the_title();
  }

  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!$args['photo']) {
   
     $test=get_field('page_banner_background_image');
    
    if (get_field('page_banner_background_image')) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/crystal-kwok-xD5SWy7hMbw-unsplash-1-1536x1024.jpg');
    }
  }

  ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h2 class="headline headline--large-medium"><?php echo $args['title'] ?></h1>
      <div class="page-banner__intro">
        <p><?php echo $args['subtitle']; ?></p>
      </div>
    </div>  
  </div>
<?php }
function klaro_files() {
  wp_enqueue_script('main-klaro-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto:500|Titillium+Web:400,400i,600,700' 
                                      
                   );
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('klaro_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('klaro_extra_styles', get_theme_file_uri('/build/index.css'));
  

  wp_localize_script('main-klaro-js', 'klaroData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));

}

add_action('wp_enqueue_scripts','klaro_files');

function klaro_features(){
 //For Dynamic WP navigation menu  in Footer and Header 
    /* register_nav_menu('headerMenuLocation','Header Menu Location');
    register_nav_menu('footerLocationOne','Footer Location One');
    register_nav_menu('footerLocationTwo','Footer Location Two'); */
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('blogSingle', 600, 250, true);
    add_image_size('blogOnePost', 300, 200, true);
    add_image_size('carouselPostImage', 1200, 800, true);
    add_image_size('pageBanner', 1500, 350,true);
   }  
add_action('after_setup_theme','klaro_features');



function klaro_custom_logo_setup() {
  $defaults = array(
      'height'               => 60,
      'width'                => 60,
      'flex-height'          => true,
      'flex-width'           => true,
      'header-text'          => array( 'site-title', 'site-description' ),
      'unlink-homepage-logo' => true, 
  );

  add_theme_support( 'custom-logo', $defaults );
}
add_theme_support( 'custom-logo' );

   

function wpse_category_single_template( $single_template ) {
  global $post;
  $all_cats = get_the_category();

  if ( in_category('guide') ) {
      if ( file_exists(get_template_directory() . "/single-category-guide.php") ) {
        return get_template_directory() . "/single-category-guide.php";
      } else {
        return get_template_directory() . "/single.php";
      }
  }
  return $single_template;
}
add_filter( 'single_template', 'wpse_category_single_template' );
add_filter( 'wpseo_metabox_prio', function() { return 'low'; } );
?>

