<?php 
  // Get custom field values
  $publisher = get_post_meta(get_the_ID(), '_news_publisher', true);
  $external_link = get_post_meta(get_the_ID(), '_news_external_link', true);
  $publish_date = get_the_date(); 
?>
<div class="container single-template-3">
  <div class="row">
    <div class="col-sm-12">
      <?php if (have_posts()) : while (have_posts()) : the_post(); global $post;?>
      <article <?php post_class();?>>
        <header class="entry-header"><h1 class="entry-title"><?php the_title();?></h1></header>
        <div class="entry-summary"><?php _e( do_shortcode( '[orbit_excerpt]' ) );?></div>
        <div class="post-thumbnail"><?php _e( do_shortcode( '[orbit_thumbnail size="full"]' ) );?></div>
        <div class="entry-content"><?php the_content(); ?></div>
        <?php
          if ($publisher || $external_link) : ?>
             <div class="news-article-meta" style="margin-top: 30px; padding: 20px; background: #f9f9f9; border-left: 4px solid #358fae;">
              <?php if ($publisher) : ?>
                <p class="news-article-meta-text" style="font-size: 16px; margin-bottom: 15px;">
                  Published in <strong><?php echo esc_html($publisher); ?></strong> on <time datetime="<?php echo get_the_date('c'); ?>"><?php echo esc_html($publish_date); ?></time>
                </p>
              <?php endif; ?>
              
              <?php if ($external_link) : ?>
                <a class="single-read-button" href="<?php echo esc_url($external_link); ?>" target="_blank" rel="noopener" >
                <i class="fa fa-external-link" aria-hidden="true"></i> &nbsp; Read Article
                </a>
              <?php endif; ?>
            </div>
          <?php endif; ?>
      </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
