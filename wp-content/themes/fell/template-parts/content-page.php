<?php
/**
 * Template for displaying content on pages
 *
 * @package Fell
 * @since 1.1.0
 * @version 1.1.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="page-header">
    <?php the_title( '<h1>', '</h1>' ); ?>

    <div class="entry-meta">
      <?php
      edit_post_link(
        sprintf(
          '%1$s<span class="screen-reader-text">%1$s "%2$s"</span>',
          __( 'Edit', 'fell' ),
          get_the_title()
        )
      );
      ?>
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->

  <?php if ( get_the_post_thumbnail() ): ?>
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      <?php the_post_thumbnail( 'fell-featured-image' ); ?>
    </a>
  <?php endif; ?>
  
  <article class="entry-content">
    <?php 
    the_content();

    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'fell' ),
      'after' => '</div>',
      'link_before' => '<span class="page-number">',
      'link_after' => '</span>',
    ) );
    ?>
  </article><!-- .entry-content -->
</section>