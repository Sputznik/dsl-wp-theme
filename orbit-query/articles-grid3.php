<?php

$id  = isset( $atts['id'] ) ? $atts['id'] : 'default-id';
$url = isset( $atts['url'] ) ? $atts['url'] : '#';

?>

<div class="news-archive-title">News Archive</div>
<ul id="<?php echo esc_attr( $id ); ?>" 
    data-target="li.orbit-article-db" 
    data-url="<?php echo esc_url( $url ); ?>" 
    class="articles-three-grid orbit-three-grid orbit-list-db">

    <?php if ( $this->query->have_posts() ) : ?>
        <?php while ( $this->query->have_posts() ) : $this->query->the_post(); ?>
            <li class="orbit-article-db">
                <?php get_template_part( 'partials/orbit/post-common' ); ?>
            </li>
        <?php endwhile; ?>
    <?php else : ?>
        <li>No posts found.</li>
    <?php endif; ?>
    
</ul>

<?php wp_reset_postdata(); ?>


    

