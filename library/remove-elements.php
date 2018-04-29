<?php 

function remove_editor(){

    remove_post_type_support( 'reviews-post', 'editor' );
    // remove_post_type_support( 'reviews-post', 'title' );
    add_post_type_support('reviews-post', 'title' );

}

add_action('init', 'remove_editor');