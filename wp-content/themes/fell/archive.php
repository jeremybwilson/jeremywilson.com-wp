<?php
/**
 * Template for displaying archives
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
    <?php the_archive_title( '<h1>', '</h1>' ); ?>
    <?php the_archive_description(); ?>
  </header>

  <?php
  if ( have_posts() ) {
    
    while ( have_posts() ) {

      the_post();
      get_template_part( 'template-parts/content', get_post_format() );

    }

    the_posts_pagination( array(
      'prev_text' => __( 'Prev', 'fell' ) . '<span class="screen-reader-text">' . __( 'Previous page', 'fell' ) . '</span>',
      'next_text' => __( 'Next', 'fell' ) . '<span class="screen-reader-text">' . __( 'Next page', 'fell' ) . '</span>',
      'before_page_number' => '<span class="screen-reader-text">' . __( 'Page', 'fell' ) . '</span>'
    ) );
  
  } else {
  
    get_template_part( 'template-parts/content', 'none' );

  }
  ?>

</main><!-- #site-main -->

<?php get_sidebar(); ?>

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>