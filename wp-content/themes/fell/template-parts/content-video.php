<?php
/**
 * Template for displaying video content
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
    $fell_video_content = apply_filters( 'the_content', get_the_content() );
    $fell_video = false;

    // Only get video from the content if a playlist isn't present.
    if ( false === strpos( $fell_video_content, 'wp-playlist-script' ) ) {
      $fell_video = get_media_embedded_in_content( $fell_video_content, array( 'video', 'object', 'embed', 'iframe' ) );
    }
    
    if ( !is_single() && !empty( $fell_video ) ) {
      
      foreach ( $fell_video as $fell_video_html ) {
        echo wp_kses( $fell_video_html, array(
          'video' => array(
            'id'       => true,
            'class'    => true,
            'width'    => true,
            'height'   => true,
            'autoplay' => true,
            'controls' => true,
            'loop'     => true,
            'muted'    => true,
            'poster'   => true,
            'preload'  => true,
            'src'      => true,
          ),
          'object' => array(
            'id'     => true,
            'class'  => true,
            'type'   => true,
            'usemap' => true,
            'width'  => true,
            'height' => true,
            'form'   => true,
          ),
          'embed' => array(
            'id'     => true,
            'class'  => true,
            'width'  => true,
            'height' => true,
            'type'   => true,
            'src'    => true,
          ),
          'iframe' => array( 
            'id'          => true,
            'class'       => true,
            'width'       => true,
            'height'      => true,
            'src'         => true,
            'srcdoc'      => true,
            'frameborder' => true,
            'scrolling'   => true,
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
  }
  ?>
</section>