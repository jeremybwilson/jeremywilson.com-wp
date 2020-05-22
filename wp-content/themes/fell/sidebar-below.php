<?php 
/**
 * Template for displaying widgets below the content
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>

<?php
// Quit early if none of the sidebars are active
if ( !is_active_sidebar( 'below-content-one' )
  && !is_active_sidebar( 'below-content-two' )
  && !is_active_sidebar( 'below-content-three' )
) {  
  return;
}
?>

<div id="widget-areas-below-content">
  
  <?php if ( is_active_sidebar( 'below-content-one' ) ) : ?>
    
    <div id="widget-area-below-content-one" class="widget-area">
      
      <?php dynamic_sidebar( 'below-content-one' ); ?>
    
    </div><!-- #widget-area-below-content-one -->
  
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'below-content-two' ) ) : ?>
   
    <div id="widget-area-below-content-two" class="widget-area">
    
      <?php dynamic_sidebar( 'below-content-two' ); ?>
   
    </div><!-- #widget-area-below-content-two -->
 
  <?php endif; ?>

  
  <?php if ( is_active_sidebar( 'below-content-three' ) ) : ?>
   
    <div id="widget-area-below-content-three" class="widget-area">
     
      <?php dynamic_sidebar( 'below-content-three' ); ?>
   
    </div><!-- #widget-area-below-content-three -->
 
  <?php endif; ?>

</div> <!-- #widget-areas-below-content -->