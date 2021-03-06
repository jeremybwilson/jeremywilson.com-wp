<?php
/**
 * Template for displaying no content
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.1.0
 */
?>
<section class="no-results not-found">
  <article class="entry-content">
    <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'fell' ); ?></p>
    
    <?php get_search_form(); ?>
  </article><!-- .entry-content -->
</section><!-- .no-results.not-found -->