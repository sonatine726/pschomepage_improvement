<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}

add_action('wp_enqueue_scripts', 'enqueue_cherryblossom_js_in_only_toppage');
function enqueue_cherryblossom_js_in_only_toppage() {
    if (is_page('Home')) {
        wp_register_script('cherryblossom_js', get_stylesheet_directory_uri()."/cherryblossom.js");
        wp_enqueue_script('cherryblossom_js');
    }
}
?>