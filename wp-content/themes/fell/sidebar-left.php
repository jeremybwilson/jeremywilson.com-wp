<?php
/**
 * Template for displaying the left sidebar widget area
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>

<?php if ( is_active_sidebar( 'left-sidebar' ) ): ?>

  <aside id="widget-area-left-sidebar" class="widget-area">

    <?php dynamic_sidebar( 'left-sidebar' ); ?>

  </aside>

<?php endif; ?>