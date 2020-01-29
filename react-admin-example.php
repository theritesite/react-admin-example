<?php
/*
 * Plugin Name: React Admin Example
 */

function react_example_register() {
    wp_register_script(
        'react-example-script',
        plugins_url( 'build/index.js', __FILE__ ),
        array( 'wp-plugins', 'wp-edit-post', 'wp-element' )
    );
}

add_action( 'init', 'react_example_register' );

function react_example_enqueue() {
    wp_enqueue_script( 'react-example-script' );
}
add_action( 'enqueue_block_editor_assets', 'react_example_enqueue' );
