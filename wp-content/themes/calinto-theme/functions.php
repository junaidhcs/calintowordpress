<?php
function calinto_assets() {
    wp_enqueue_style('calinto-main-style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'calinto_assets');
