<?php
/**
 * Template for displaying songle post content
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.1.0
 */
?>

<?php get_header(); ?>

<?php get_sidebar( 'left' ); ?>

<main id="site-main" role="main">

  <?php while ( have_posts() ): the_post(); ?>

    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

    <?php if ( comments_open() || get_comments_number() ) comments_template(); ?>

  <?php endwhile; ?>

</main><!-- #site-main -->

<?php get_sidebar(); ?>

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>