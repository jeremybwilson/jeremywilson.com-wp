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
  
  <?php if ( is_single() ): ?>
    <header class="entry-header">
      <div class="entry-meta">
        <?php
        printf(
          '<span><a href="%1$s">%2$s</a></span>',
          esc_url( get_permalink() ),
          get_the_date()
        );
        ?>

        <?php
        printf(
          '<span><a href="%2$s">' . __( 'By %1$s', 'fell' ) . '</a></span>',
          get_the_author(),
          esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
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
  <?php endif; ?>

  <?php if ( !is_single() && get_the_post_thumbnail() !== '' ): ?>
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      <?php the_post_thumbnail( 'fell-featured-image' ); ?>
    </a>
  <?php endif; ?>

  <article class="entry-content">
    <?php 
    $fell_link_content = apply_filters( 'the_content', get_the_content() );
    $fell_link = false;

    // Only get video from the content if a playlist isn't present.
    $fell_link = get_media_embedded_in_content( $fell_link_content, array( 'a' ) );
    
    if ( !empty( $fell_link ) ) {

      foreach ( $fell_link as $fell_link_html ) {
        echo wp_kses( $fell_link_html, array(
          'a' => array(
            'id'    => true,
            'class' => true,
            'title' => true,
            'href'  => true,
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