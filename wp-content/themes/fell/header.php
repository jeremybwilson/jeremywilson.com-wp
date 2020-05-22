<?php
/**
 * The template for displaying the head
 * Displays all of the head element and everything up until the content.
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  
  <?php if ( is_singular() && pings_open() ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif;?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="site-container">

    <header id="site-header">
      
      <?php if ( has_nav_menu( 'header' ) || has_nav_menu( 'social' ) ): ?>
        
        <input type="checkbox" id="header-nav-toggle" />

        <label for="header-nav-toggle" id="header-nav-toggle-label">
          <span></span>
        </label><!-- #header-nav-toggle-label -->

        <div id="header-navs-container">
          
          <?php 
          if ( has_nav_menu( 'header' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'header',
              'menu_id'        => 'header-nav',
              'container'      => false,
            ) );
          } 
          ?>

          <?php 
          if ( has_nav_menu( 'social' ) ) { ?>
            <?php wp_nav_menu( array(
              'theme_location' => 'social',
              'menu_class'     => 'social-nav',
              'container'      => false,
              'depth'          => 1,
            ) );
          }
          ?>
        
        </div><!-- #header-navs-container -->
      
      <?php endif; ?>

      <div id="site-identity-container">
        
        <div id="site-identity">
          
          <a class="site-title" 
             href="<?php echo esc_url( home_url( '/' ) ); ?>" 
             title="<?php bloginfo( 'name' ) ?>"
          >

            <?php bloginfo( 'name' ); ?>
          
          </a><!-- .site-title -->

          <?php if ( function_exists( 'the_custom_logo' ) ) the_custom_logo(); ?>
          
          <span class="site-tagline">

            <?php bloginfo( 'description' ); ?>
              
          </span><!-- .site-tagline -->
      
        </div><!-- #site-identity -->
      
      </div><!-- #site-identity-container -->

    </header><!-- #site-header -->