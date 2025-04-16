<?php
function custom_post_type_news_articles() {
    $labels = array(
        'name' => 'News Articles',
        'singular_name' => 'News Article',
        'menu_name' => 'News Articles',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'news-article'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon' => 'dashicons-media-document',
        'taxonomies' => array('news_category'),
        // 'taxonomies' => array('category'),
    );

    register_post_type('news_article', $args);
}
add_action('init', 'custom_post_type_news_articles');

function news_article_columns($columns) {
    $columns['publisher']     = 'Publisher';
    $columns['external_link'] = 'External Link';
    return $columns;
}
add_filter('manage_news_article_posts_columns', 'news_article_columns');


function news_article_column_content($column, $post_id) {
    if ($column == 'publisher') {
        echo esc_html(get_post_meta($post_id, '_news_publisher', true));
    }
    if ($column == 'external_link') {
        $link = get_post_meta($post_id, '_news_external_link', true);
        echo $link ? '<a href="' . esc_url($link) . '" target="_blank">Visit</a>' : '—';
    }
}
add_action('manage_news_article_posts_custom_column', 'news_article_column_content', 10, 2);
