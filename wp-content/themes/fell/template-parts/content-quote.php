<?php
/**
 * Template for displaying quote content
 *
 * @package Fell
 * @since 1.1.0
 * @version 1.1.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <header class="entry-header">
    <div class="entry-meta">
      <?php
      printf(
        '<span>' . __( '%1$s @ %2$s', 'fell' ) . '</span>',
        '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a>',
        '<a href="' . esc_url( get_permalink() ) . '">' . get_the_date() . '</a>'
      );
      ?>

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

  <?php if ( !is_single() && get_the_post_thumbnail() !== '' ): ?>
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      <?php the_post_thumbnail( 'fell-featured-image' ); ?>
    </a>
  <?php endif; ?>

  <article class="entry-content">
    <?php
    the_content();
    
    if ( is_single() ) {
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'fell' ),
        'after' => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after' => '</span>',
      ) );
    }
    ?>
  </article><!-- .entry-content -->

  <?php
  if ( is_single() ) {
    get_template_part('template-parts/entry', 'footer');
  } ?>
</section>