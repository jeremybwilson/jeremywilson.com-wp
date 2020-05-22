<?php
/**
 * Fell functions and definitions
 *
 * @package Fell
 */

if ( !function_exists( 'fell_setup' ) ) {
  /**
   * Set up theme defaults and registers support for various WordPress features
   *
   * @since  1.0.0
   * @version 1.1.0
   */
  function fell_setup() {
    // Support for translation files
    load_theme_textdomain( 'fell', get_template_directory() . '/languages' );

    // Main content width
    if ( ! isset( $content_width ) ) $content_width = 1024;

    // Register support for various WordPress features
    add_theme_support( 'automatic-feed-links' );
    
    add_theme_support( 'title-tag' );
    
    add_theme_support( 'custom-logo', array(
      'height'      => 200,
      'width'       => 200,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-tagline' ),
    ) );

    add_theme_support( 'post-thumbnails' );

    add_image_size( 'fell-cover-image', 1500, 250, true );
    add_image_size( 'fell-featured-image', 1000, 600, true );

    add_theme_support( 'custom-background', array(
      'default-color'      => 'FFFFFF',
    ) );

    add_theme_support( 'html5', array(
      'search-form', 
      'comment-form',
      'comment-list',
      'gallery', 
      'caption'
    ) );

    add_theme_support( 'post-formats', array(
      'aside',
      'gallery',
      'link',
      'quote',
      'status',
      'video',
      'audio',
      'chat',
    ) );

    add_theme_support( 'custom-header', array(
      'default-image'  => '%s/assets/images/landscape.jpg',
      'random-default' => false,
      'width'          => 1500,
      'height'         => 1000,
      'flex-height'    => false,
      'flex-width'     => false,
      'header-text'    => false,
      'uploads'        => true,
    ) );

    add_theme_support( 'wp-block-styles' );

    add_theme_support( 'align-wide' );

    add_theme_support( 'responsive-embeds' );

    // Editor styles for TinyMCE and Gutenberg
    add_theme_support( 'editor-styles' );
    add_editor_style( 'editor-style.css' );

    register_default_headers( array(
      'header_image_name' => array(
        'url'           => '%s/assets/images/landscape.jpg',
        'thumbnail_url' => '%s/assets/images/landscape-thumbnail.jpg',
        'description'   => _x( 'header_image', 'Header Image', 'fell' )
      )
    ) );

    // Navigation
    register_nav_menus( array(
      'header' => __( 'Header', 'fell' ),
      'social' => __( 'Social links', 'fell' ),
      'footer' => __( 'Footer', 'fell' ),
    ) );

  }
  add_action( 'after_setup_theme', 'fell_setup' );

}

// Scripts and styles
require get_template_directory() . '/inc/scripts.php';

// Widgets areas
require get_template_directory() . '/inc/widget-areas.php';

// Filters
require get_template_directory() . '/inc/filters.php';

// WP Customizer settings
require get_template_directory() . '/inc/customizer.php';