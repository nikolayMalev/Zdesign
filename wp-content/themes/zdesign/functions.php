<?php 

function theme_enqueue_styles() {
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/dist/css/styles.min.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
