<?php
/**
 * Template for displaying entry headers
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.1.0
 */
?>
<header class="entry-header">

  <?php if ( is_sticky() && is_home() ) : ?>
    <i class="fif fif-pin"></i>
  <?php endif; ?>

  <?php
  if ( is_single() ) {
    printf(
      '<h1>%s</h1>',
      get_the_title() === '' ? __( 'Untitled post', 'fell' ) : get_the_title()
    );
  } else {
    printf(
      '<h2><a href="%2$s">%1$s</a></h2>',
      get_the_title() === '' ? __( 'Untitled post', 'fell' ) : get_the_title(), 
      esc_url( get_permalink() )
    );
  }
  ?>

  <div class="entry-meta">
    <?php
    printf(
      '<span><a href="%1$s">%2$s</a></span>',
      esc_url( get_permalink() ),
      get_the_date()
    );
    ?>

    <?php
    $fell_comment_count = get_comments_number();
    if ( $fell_comment_count && comments_open() ) {
      printf(
        '<span><a href="%2$s#comments">' . ( $fell_comment_count > 1 ? __( '%1$s comments', 'fell' ) : __( '%1$s comment', 'fell' ) ) . '</a></span>',
        esc_html( $fell_comment_count ),
        esc_url( get_permalink() )
      );
    }
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