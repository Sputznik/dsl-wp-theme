<?php

define('DSL_WP_THEME_VERSION', '1.0.0' );

function mytheme_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'mytheme_child_enqueue_styles');

$inc_files = array(
    'inc/post-types/news-article.php',
    'inc/taxonomies/news-category.php',
    'inc/meta-boxes/news-meta-box.php',
);

foreach ($inc_files as $inc_file) {
    require_once $inc_file;
}

