<?php
/**
 * The template for displaying the footer
 * Displays all of the head element after the content.
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.1.0
 */
?>
    <footer id="site-footer">
    
      <?php
      if ( has_nav_menu( 'social' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'social',
          'menu_class'     => 'social-nav',
          'container'      => false,
          'depth'          => 1,
        ) );
      }
      ?>

      <?php
      if ( has_nav_menu( 'footer' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'menu_id'        => 'footer-nav',
          'container'      => false,
          'depth'          => 1,
        ) );
      }
      ?>

      <div id="site-footer-information">
        <?php
        if ( function_exists( 'the_privacy_policy_link' ) ) {
          the_privacy_policy_link();
        }
        ?>
          
        <span>
          <?php echo esc_html( get_theme_mod( 'footer_text', get_bloginfo( 'name' ) ) ); ?>
          <?php if ( get_theme_mod( 'footer_copyright', true ) ) echo '&copy;'; ?>
          <?php if ( get_theme_mod( 'footer_year', true ) ) echo date_i18n( 'Y' ); ?>
        </span>

        <?php
        if ( get_theme_mod( 'footer_wordpress', true ) ) {
          printf(
            '<span>' . __( 'Proudly powered by %s', 'fell' ) . '</span>',
            '<a href="https://wordpress.org/">WordPress</a>'
          );
        }
        ?>

        <?php
        if ( get_theme_mod( 'footer_theme', true ) ) {
          $fell_theme_data = wp_get_theme();

          printf(
            '<span>' . __( 'Theme: %s', 'fell' ) . '</span>',
            '<a href="' . esc_url( $fell_theme_data->get( 'ThemeURI' ) ) . '">' . esc_html( $fell_theme_data[ 'Name' ] ) . '</a>'
          );
        }
        ?>
      
      </div><!-- #site-footer-information -->

    </footer><!-- #site-footer -->

    <a href="#" id="scroll-to-top">
      <i class="fif fif-chevron"></i>
      <span class="screen-reader-text"><?php _e( 'Scroll to the top', 'fell' ); ?></span>
    </a>

  </div><!-- #wrapper -->

  <?php wp_footer(); ?>
  
</body>
</html>