<?php
/**
 * Template for displaying content
 *
 * @package Fell
 * @since 1.1.0
 * @version 1.1.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php get_template_part('template-parts/entry', 'header'); ?>

  <?php if ( !is_single() && get_the_post_thumbnail() !== '' ): ?>
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      <?php the_post_thumbnail( 'fell-featured-image' ); ?>
    </a>
  <?php endif; ?>

  <article class="entry-content">
    <?php the_excerpt(); ?>
  </article><!-- .entry-content -->

</section>