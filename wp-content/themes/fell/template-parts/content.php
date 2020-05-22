<?php
/**
 * Template for displaying content
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.1.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php get_template_part( 'template-parts/entry', 'header' ); ?>

  <?php if ( !is_single() && ( get_the_post_thumbnail() !== '' || get_theme_mod( 'content_layout', 'one-column' ) == 'criss-cross' ) ): ?>
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      <?php if ( get_the_post_thumbnail() === '' && get_theme_mod( 'content_layout', 'one-column' ) == 'criss-cross' ): ?>
        <div class="post-thumbnail-placeholder"><i class="fif fif-image"></i></div>
      <?php else: ?>
        <?php the_post_thumbnail( 'fell-featured-image' ); ?>
      <?php endif; ?>
    </a>
  <?php endif; ?>

  <article class="entry-content">
    <?php
    if ( ( is_home() || is_archive() ) && get_theme_mod( 'content_view', 'excerpt' ) == 'excerpt' ) {

      the_excerpt();

    } else {

      the_content();

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