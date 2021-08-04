<div class="pagination_main">
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
