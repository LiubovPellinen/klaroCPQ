<?php 
get_header();
pageBanner(array(
        'title'=>'Contact Us',
));


get_template_part('template-parts/content', 'contact-us');
get_template_part('template-parts/content', 'testimonials');
get_template_part('template-parts/content', 'slider-posts');
get_footer(); 
?> 
