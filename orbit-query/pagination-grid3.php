<?php if( $atts['pagination'] != '0' ): ?>
  <div class="orbit-btn-load-parent gtc-load-more">
    <button data-behaviour='oq-ajax-loading' data-list="<?php _e('#'.$atts['id']);?>" class="load-more btn-gtc" type="button">LOAD MORE</button>
  </div>
<?php endif;?>
<style>
.gtc-load-more .btn-gtc::before {
  content: "";
  background-image: url(<?php _e(DSL_THEME_URI.'/assets/images/asterisk.png');?>);
}
</style>
