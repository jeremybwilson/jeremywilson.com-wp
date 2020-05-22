<?php
/**
 * Template for displaying chat content
 *
 * @package Fell
 * @since 1.1.0
 * @version 1.1.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php get_template_part( 'template-parts/entry', 'header' ); ?>

  <?php if ( get_the_post_thumbnail() !== '' ): ?>
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      <?php the_post_thumbnail( 'fell-featured-image' ); ?>
    </a><!-- .post-thumbnail -->
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

  <?php
  if ( is_single() ) {
    get_template_part('template-parts/entry', 'footer');
  } ?>

</section>