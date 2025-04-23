<?php if( $atts['pagination'] != '0' ): ?>
  <div class="orbit-btn-load-parent dsl-load-more">
    <button data-behaviour='oq-ajax-loading' data-list="<?php _e('#'.$atts['id']);?>" class="dsl-btn-load-more" type="button">
    <i class="fa fa-spinner" aria-hidden="true" style="margin-right: 8px;"></i>
      LOAD MORE</button>
  </div>
<?php endif;?>
