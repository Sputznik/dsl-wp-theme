<?php
// add meta box
function news_article_add_meta_box() {
    add_meta_box(
        'news_article_meta_box',
        'News Details',
        'news_article_meta_box_callback',
        'news_article',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'news_article_add_meta_box');

// meta box HTML
function news_article_meta_box_callback($post) {
    wp_nonce_field('news_article_save_meta_box_data', 'news_article_meta_box_nonce');

    $publisher = get_post_meta($post->ID, '_news_publisher', true);
    $external_link = get_post_meta($post->ID, '_news_external_link', true);

    echo '<p><label for="news_publisher">Publisher:</label><br />';
    echo '<input type="text" id="news_publisher" name="news_publisher" value="' . esc_attr($publisher) . '" style="width:100%;" /></p>';

    echo '<p><label for="news_external_link">External Link:</label><br />';
    echo '<input type="url" id="news_external_link" name="news_external_link" value="' . esc_attr($external_link) . '" style="width:100%;" /></p>';
}

// save meta data
function news_article_save_meta_box_data($post_id) {
    if (!isset($_POST['news_article_meta_box_nonce']) ||
        !wp_verify_nonce($_POST['news_article_meta_box_nonce'], 'news_article_save_meta_box_data')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['news_publisher'])) {
        update_post_meta($post_id, '_news_publisher', sanitize_text_field($_POST['news_publisher']));
    }

    if (isset($_POST['news_external_link'])) {
        update_post_meta($post_id, '_news_external_link', esc_url_raw($_POST['news_external_link']));
    }
}
add_action('save_post', 'news_article_save_meta_box_data');
