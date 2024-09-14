<?php 

function theme_enqueue_styles() {
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/dist/css/styles.min.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_scripts() {
    wp_enqueue_script(
        'main-js',
        get_stylesheet_directory_uri() . '/dist/js/bundle.js', // Path to your bundled JS file
        array(),
        null,
        true // Load in footer
    );

    add_filter('script_loader_tag', function($tag, $handle, $src) {
        if ('main-js' === $handle) {
            $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
        }
        return $tag;
    }, 10, 3);
    
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
