<?php 
/**
 * Template for displaying widgets in the footer
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>

<?php
// Quit early if none of the sidebars are active
if ( !is_active_sidebar( 'footer-one' )
  && !is_active_sidebar( 'footer-two' )
  && !is_active_sidebar( 'footer-three' )
) {  
  return;
}
?>

<div id="widget-areas-footer">

  <?php if ( is_active_sidebar( 'footer-one' ) ) : ?>
   
    <div id="widget-area-footer-one" class="widget-area">
   
      <?php dynamic_sidebar( 'footer-one' ); ?>
  
    </div><!-- #widget-area-footer-one -->
 
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-two' ) ) : ?>
  
    <div id="widget-area-footer-two" class="widget-area">
  
      <?php dynamic_sidebar( 'footer-two' ); ?>
  
    </div><!-- #widget-area-footer-two -->
  
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-three' ) ) : ?>
   
    <div id="widget-area-footer-three" class="widget-area">
   
      <?php dynamic_sidebar( 'footer-three' ); ?>
  
    </div><!-- #widget-area-footer-three -->
  
  <?php endif; ?>

</div><!-- #widget-areas-footer -->