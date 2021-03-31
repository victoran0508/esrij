<?php 
    require_once('functions/admin.php');

    add_theme_support('post-thumbnails');

    // function wpa_solution_permalinks( $post_link, $post ){
    //     if ( is_object( $post ) && $post->post_type == 'solution' ){
    //         $terms = wp_get_object_terms( $post->ID, 'solution-tag' );
    //         if( $terms ){
    //             return str_replace( '%tag%' , $terms[0]->slug , $post_link );
    //         }
    //     }
    //     return $post_link;
    // }
    // add_filter( 'post_type_link', 'wpa_solution_permalinks', 1, 2 );

    // add_rewrite_rule( 'solution/([^/]+)/([^/]+)', 'index.php?solution=$matches[2]', 'top' );



    /**
     * Tell WordPress how to interpret our tag URL structure
     *
     * @param array $rules Existing rewrite rules
     * @return array
     */
    // function so23698827_add_rewrite_rules( $rules ) {
    //     $new = array();
    //     $new['solution/([^/]+)/(.+)/?$'] = 'index.php?solution=$matches[2]';
    //     $new['solution/(.+)/?$'] = 'index.php?tag=$matches[1]';
    
    //     return array_merge( $new, $rules ); // Ensure our rules come first
    // }
    // add_filter( 'rewrite_rules_array', 'so23698827_add_rewrite_rules' );
    
    /**
     * Handle the '%tag%' URL placeholder
     *
     * @param str $link The link to the post
     * @param WP_Post object $post The post object
     * @return str
     */
    // function so23698827_filter_post_type_link( $link, $post ) {
    //     if ( $post->post_type == 'solution' ) {
    //         if ( $cats = get_the_terms( $post->ID, 'solution-tag' ) ) {
    //             $link = str_replace( '%tag%', current( $cats )->slug, $link );
    //         }
    //     }
    //     return $link;
    // }
    // add_filter( 'post_type_link', 'so23698827_filter_post_type_link', 10, 2 );

    // Flush rewrite rules for custom post types
    add_action( 'after_switch_theme', 'esri_flush_rewrite_rules' );

    // Flush your rewrite rules
    function esri_flush_rewrite_rules() {
        flush_rewrite_rules();
    }
?>