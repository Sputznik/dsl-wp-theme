<?php

/**
 * BOOTSTRAPS THEME SPECIFIC FUNCTIONALITIES
 */
class DSL_THEME {

  public function __construct() {

    add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );  // LOAD ASSETS
    add_action('wp_enqueue_scripts', array($this, 'dsl_enqueue_fontawesome')); //load font-awesome for icons
  }

  function assets() {

    // ENQUEUE STYLES
    wp_enqueue_style('gtc-core-css', DSL_THEME_URI.'/assets/css/main.css', array('sp-core-style'), DSL_WP_THEME_VERSION );

  }

  function dsl_enqueue_fontawesome() {
    wp_enqueue_style(
      'font-awesome-4',
      'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
      array(),
      '4.7.0'
    );
  }
}

new DSL_THEME;
