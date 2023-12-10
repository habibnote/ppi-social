<?php

function ppi_enqueue_assets() {
    wp_enqueue_style( 'main-style', get_template_directory_uri() . "/assets/css/main.css", '', time(), 'all'  );

    wp_enqueue_script( 'main-script', get_template_directory_uri() . "/assets/js/script.css", ['jquery'], time(), true );

    wp_enqueue_style( 'style', get_stylesheet_uri(), '', time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'ppi_enqueue_assets' );