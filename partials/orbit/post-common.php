<?php
    $publisher     = get_post_meta(get_the_ID(), '_news_publisher', true);
    $external_link = get_post_meta(get_the_ID(), '_news_external_link', true);
    $date          = get_the_date();
    $permalink      = get_the_permalink();

    echo '<div class="orbit-article">';
        if (has_post_thumbnail()) {
            echo '<div class="orbit-thumb">' . get_the_post_thumbnail(get_the_ID(), 'medium') . '</div>';
        } else {
            echo '<div class="orbit-thumb placeholder-thumb">No Featured Image Available</div>';
        }
    
        echo '<h3 class="article-title"><a href="' . esc_url( get_permalink() ) . '" target="_blank" rel="noopener noreferrer">' . esc_html( get_the_title() ) . '</a></h3>';

        echo '<p class="meta">' . esc_html($date) . ' / ' . esc_html($publisher) . '</p>';

        echo '<a href="' . esc_url($external_link) . '" class="read-button" target="_blank" rel="noopener">
        <i class="fa fa-external-link" aria-hidden="true"></i> &nbsp;
        Read Article</a>';
    echo '</div>';
