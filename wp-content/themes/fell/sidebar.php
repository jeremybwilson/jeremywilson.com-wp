<?php
/**
 * Template for displaying the right sidebar widget area
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>

<?php if ( is_active_sidebar( 'right-sidebar' ) ): ?>

  <aside id="widget-area-right-sidebar" class="widget-area">

    <?php dynamic_sidebar( 'right-sidebar' ); ?>

  </aside>

<?php endif; ?>