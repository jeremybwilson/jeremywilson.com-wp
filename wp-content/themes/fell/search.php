<?php
/**
 * Template for displaying search results
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.1.0
 */
?>

<?php get_header(); ?>

<?php get_sidebar( 'left' ); ?>

<main id="site-main" role="main">
  
  <header class="page-header">
    <?php
    if ( have_posts() ) {
      printf(
        '<h1>' . __( 'Search results for: %s', 'fell' ) . '</h1>',
        '<span>' . esc_html( get_search_query() ) . '</span>'
      );
    } else {
      printf(
        '<h1>' . __( 'Nothing found', 'fell' ) . '</h1>'
      );
    }
    ?>
  </header>

  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      get_template_part( 'template-parts/content', 'excerpt');
    }

    the_posts_pagination( array(
      'prev_text' => __( 'Prev', 'fell' ) . '<span class="screen-reader-text">' . __( 'Previous page', 'fell' ) . '</span>',
      'next_text' => __( 'Next', 'fell' ) . '<span class="screen-reader-text">' . __( 'Next page', 'fell' ) . '</span>',
      'before_page_number' => '<span class="screen-reader-text">' . __( 'Page', 'fell' ) . '</span>'
    ) );
  
  } else {
    
    get_template_part( 'template-parts/content', 'none');
  
  }
  ?>
</main><!-- #site-main -->

<?php get_sidebar(); ?>

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>