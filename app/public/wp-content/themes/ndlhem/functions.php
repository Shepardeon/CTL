<?php

function ndl_import_files(){
    // Import des styles
    wp_enqueue_style('ndl_bootstrap', get_theme_file_uri('/css/bootstrap.css'));
    wp_enqueue_style('ndl_main_style', get_stylesheet_uri());

    // Import des scripts
    wp_enqueue_script('ndl_bootstrapJS', get_theme_file_uri('/js/bootstrap.bundle.js'), ['jquery'], '4.0', true);
}
add_action('wp_enqueue_scripts', 'ndl_import_files');