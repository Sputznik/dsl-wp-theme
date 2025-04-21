<?php

/*  CONSTANTS */
if( !defined( 'DSL_WP_THEME_VERSION' ) ) {
    define( 'DSL_WP_THEME_VERSION', time() );
}
  
if( !defined( 'DSL_THEME_URI' ) ) {
    define( 'DSL_THEME_URI', get_stylesheet_directory_uri() );
}
  
if( !defined( 'DSL_THEME_PATH' ) ) {
    define( 'DSL_THEME_PATH', get_stylesheet_directory() );
}

$inc_files = array(
    'inc/post-types/news-article.php',
    'inc/taxonomies/news-category.php',
    'inc/meta-boxes/news-meta-box.php',
    'inc/class-dsl-theme.php',
);

foreach ($inc_files as $inc_file) {
    require_once $inc_file;
}


