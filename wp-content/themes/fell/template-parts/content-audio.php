<?php
/**
 * Template for displaying audio content
 *
 * @package Fell
 * @since 1.1.0
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
    $fell_audio_content = apply_filters( 'the_content', get_the_content() );
    $fell_audio = false;

    // Only get video from the content if a playlist isn't present.
    if ( false === strpos( $fell_audio_content, 'wp-playlist-script' ) ) {
      $fell_audio = get_media_embedded_in_content( $fell_audio_content, array( 'audio' ) );
    }

    if ( !is_single() && !empty( $fell_audio ) ) {
      
      foreach ( $fell_audio as $fell_audio_html ) {
        echo wp_kses( $fell_audio_html, array(
          'audio' => array(
            'id'       => true,
            'class'    => true,
            'autoplay' => true,
            'controls' => true,
            'loop'     => true,
            'muted'    => true,
            'preload'  => true,
            'src'      => true,
          )
        ) );
      }

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