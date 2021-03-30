<?php 
    require_once('functions/admin.php');

    add_theme_support('post-thumbnails');

    // function my_pre_get_posts( $query ) {
	
    //     // do not modify queries in the admin
    //     if( is_admin() ) {
    //         return $query;
    //     }
        
    //     // only modify queries for 'event' post type
    //     if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'solution' ) {
    //         // allow the url to alter the query
    //         if( isset($_GET['tag']) ) {
    //             $query->set('meta_key', 'tag');
    //             $query->set('meta_value', $_GET['tag']);
    //         }
    //     }
        
    //     // return
    //     return $query;
    // }
    
    // add_action('pre_get_posts', 'my_pre_get_posts');
?>