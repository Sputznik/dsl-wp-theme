<?php
  /**
   * The template for displaying News Category (custom taxonomy) archives
   */
  get_header();
  $term = get_queried_object();
?>
  <div class="container" role="main">
			<div class="row">
				<div class="col-sm-12">
          <h1 class="news-archive-title">news archive: <?php echo esc_html($term->name); ?></h1>
				</div>
			</div>

      <div class="row">
				<div class="col-sm-12">
          <?php echo do_shortcode("[orbit_query posts_per_page='12' post_type='news_article' style='grid3' tax_query='news_category:" . $term->slug . "'  pagination='1']"); ?>
				</div>
			</div>
	</div>
<?php get_footer(); ?>
