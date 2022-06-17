<?php
/**
 * The Footer widget areas.
 *
 */
?>
<div class="footer_widget">
  <div class="grid_8 alpha">
    <div class="widget_inner">
      <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
      <?php dynamic_sidebar('first-footer-widget-area'); ?>
      <?php else : ?>
      <h3><?php _e( 'Setup Footer Widget', 'cloriato-lite'); ?></h3>
      <p><?php _e( 'Setup the Footer Columns from the Widgets Tab under Appearance. Drag and Drop your required widget in the Footer Blocks.', 'cloriato-lite'); ?></p>      
      <?php endif; ?>
    </div>
  </div>
  <div class="grid_8">
    <div class="widget_inner lebo">
      <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
      <?php dynamic_sidebar('second-footer-widget-area'); ?>
      <?php else: ?>
        <h3><?php _e( 'Organization Details', 'cloriato-lite'); ?></h3>
      <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum, neq ue ut imperdiet pellentesque.', 'cloriato-lite'); ?></p>
      <?php endif; ?>
    </div>
  </div>
  <div class="grid_8 omega">
    <div class="widget_inner lebo last">
      <?php if (is_active_sidebar('third-footer-widget-area')) : ?>
      <?php dynamic_sidebar('third-footer-widget-area'); ?>
      <?php else: ?>
      <h3><?php _e( 'Contact Information', 'cloriato-lite'); ?></h3>
      <fieldset>
      <?php _e( 'Contact: +91-9912536879', 'cloriato-lite'); ?> <br/>
      <?php _e( 'Email: example@domain.com', 'cloriato-lite'); ?><br/>
      <a href="#">www.example.com</a>
      </fieldset>      
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="clear"></div>
