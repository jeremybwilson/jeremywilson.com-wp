<?php 
/**
 * Template for displaying widgets above the content
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>

<?php
// Quit early if none of the sidebars are active
if ( !is_active_sidebar( 'above-content-one' )
  && !is_active_sidebar( 'above-content-two' )
  && !is_active_sidebar( 'above-content-three' )
) {  
  return;
}
?>

<div id="widget-areas-above-content">

  <?php if ( is_active_sidebar( 'above-content-one' ) ) : ?>
    
    <div id="widget-area-above-content-one" class="widget-area">
      
      <?php dynamic_sidebar( 'above-content-one' ); ?>
    
    </div><!-- #widget-area-above-content-one -->
  
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'above-content-two' ) ) : ?>
    
    <div id="widget-area-above-content-two" class="widget-area">
      
      <?php dynamic_sidebar( 'above-content-two' ); ?>
    
    </div><!-- #widget-area-above-content-two -->
  
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'above-content-three' ) ) : ?>
    
    <div id="widget-area-above-content-three" class="widget-area">
      
      <?php dynamic_sidebar( 'above-content-three' ); ?>
    
    </div><!-- #widget-area-above-content-three -->
  
  <?php endif; ?>

</div><!-- #widget-areas-above-content -->