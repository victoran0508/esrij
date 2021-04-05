<?php 
    require_once('functions/admin.php');

    add_theme_support('post-thumbnails');

    // Flush rewrite rules for custom post types
    add_action( 'after_switch_theme', 'esri_flush_rewrite_rules' );

    add_filter( 'manage_faq_posts_columns', 'smashing_faq_columns' );
    function smashing_faq_columns( $columns ) {
        $columns = array(
        'cb' => $columns['cb'],
        'question' => __( '設問' ),
        'faq-category' => __( 'カテゴリー' ),
        'answer' => __( '解答' ),
        );
        return $columns;
    }

    add_action( 'manage_faq_posts_custom_column', 'smashing_faq_column', 10, 2);
    function smashing_faq_column( $column, $post_id ) {
        if ( 'question' === $column ) {
            echo get_post_meta( $post_id, 'question', true);
        }
        if ( 'faq-category' === $column ) {
            echo get_the_terms( $post_id, 'faq-category')[0]->name;
        }
        if ( 'answer' === $column ) {
            echo get_post_meta( $post_id, 'answer', true);
        }
    }
?>