<?php
function custom_taxonomy_news_category() {
    $labels = array(
        'name' => 'News Categories',
        'singular_name' => 'News Category',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'news-category'),
    );

    register_taxonomy('news_category', array('news_article'), $args);
}
add_action('init', 'custom_taxonomy_news_category');
