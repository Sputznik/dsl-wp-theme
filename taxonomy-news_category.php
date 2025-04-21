<?php
/**
 * The template for displaying News Category (custom taxonomy) archives
 */
get_header();
$term = get_queried_object();
?>
<div class="">
  <div class="container">
    <h1 class="news-archive-title">news archive: <?php echo esc_html($term->name); ?></h1>
  </div>
</div>
<div class="container">
  <div class="articles-post-list-wrap">
  <?php echo do_shortcode("[orbit_query posts_per_page='3' post_type='news_article' style='grid3' cat='".$category->term_id."' pagination='1']"); ?>
  </div>
</div>
<?php get_footer(); ?>
