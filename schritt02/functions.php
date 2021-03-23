<?php
add_action( 'wp_enqueue_scripts', 'twentytwenty_child_enqueue_styles' );
function twentytwenty_child_enqueue_styles() {
    $parent_style = 'twentytwenty-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twentytwenty-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        filemtime(get_stylesheet_directory() . '/style.css')
    );
}
?>
