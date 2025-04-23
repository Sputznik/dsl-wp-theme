# 📘 Orbit Query Shortcode Guide

This guide helps you use the `[orbit_query]` shortcode to display custom posts with specific styles and taxonomies in WordPress.

---

## 🔧 Example Shortcode

```php
<?php echo do_shortcode("[orbit_query posts_per_page='12' post_type='news_article' style='grid3' tax_query='news_category:" . $term->slug . "' pagination='1']"); ?>
