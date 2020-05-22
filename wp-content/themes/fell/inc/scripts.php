<?php
/**
 * Scripts, styles and fonts
 *
 * @since 1.0.0
 * @version 1.1.5
 */
function fell_scripts() {

  // Font Lora from google
  wp_enqueue_style( 'fell-fonts', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i', array(), null);

  // Fell icon font
  wp_enqueue_style( 'fell-icon-font', get_template_directory_uri() . '/assets/fonts/fell-icon-font/fell-icon-font.css', array(), wp_get_theme()->get('Version'));

  // Theme stylesheet
  wp_enqueue_style( 'fell-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );

  // Theme JavaScript
  wp_enqueue_script( 'fell-script', get_template_directory_uri() . '/assets/js/functions.js', false, wp_get_theme()->get('Version'), true );

  // Comment-reply script
  if ( !is_admin() && is_singular() && comments_open() && get_option('thread_comments') ) {
    wp_enqueue_script( 'comment-reply' );
  }

  // Custom styles
  $thumbnailURL = get_the_post_thumbnail_url( get_the_ID(), 'fell-cover-image' );

  $options = [
    '#' . get_background_color(),
    get_theme_mod( 'color_bg_alt',   '#202020' ),
    get_theme_mod( 'color_text',     '#666666' ),
    get_theme_mod( 'color_text_alt', '#FFFFFF' ),
    get_theme_mod( 'color_anchor',   '#1e73be' ),
    is_singular() && $thumbnailURL ? $thumbnailURL : get_custom_header()->url
  ];

  $css = '
    :root {
      --color-bg: %1$s; 
      --color-bg-alt: %2$s;
      --color-text: %3$s;
      --color-text-alt: %4$s;
      --color-anchor: %5$s;
    }

    #site-header {
      background-image: url(%6$s);
    }
  ';
  
  wp_add_inline_style( 'fell-style', vsprintf($css, $options) );

}
add_action( 'wp_enqueue_scripts', 'fell_scripts' );