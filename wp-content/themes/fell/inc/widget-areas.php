<?php
/**
 * Widget areas
 *
 * @package Fell
 * @since  1.0.0
 * @version 1.0.0
 */

function fell_widgets_init() {
  
  register_sidebar( array(
    'name'          => __('Above content one', 'fell'),
    'id'            => 'above-content-one',
    'description'   => __('Widget area above the content', 'fell'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Above content two', 'fell'),
    'id'            => 'above-content-two',
    'description'   => __('Widget area above the content', 'fell'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Above content three', 'fell'),
    'id'            => 'above-content-three',
    'description'   => __('Widget area above the content', 'fell'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Left sidebar', 'fell'),
    'id'            => 'left-sidebar',
    'description'   => __('Widget area on the left side of the content', 'fell'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Right sidebar', 'fell'),
    'id'            => 'right-sidebar',
    'description'   => __('Widget area on the right side of the content', 'fell'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Below content one', 'fell'),
    'id'            => 'below-content-one',
    'description'   => __('Widget area below the content', 'fell'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Below content two', 'fell'),
    'id'            => 'below-content-two',
    'description'   => __('Widget area below the content', 'fell'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Below content three', 'fell'),
    'id'            => 'below-content-three',
    'description'   => __('Widget area below the content', 'fell'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Footer one', 'fell'),
    'id'            => 'footer-one',
    'description'   => __('Widget area in the footer', 'fell'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Footer two', 'fell'),
    'id'            => 'footer-two',
    'description'   => __('Widget area in the footer', 'fell'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  
  register_sidebar( array(
    'name'          => __('Footer three', 'fell'),
    'id'            => 'footer-three',
    'description'   => __('Widget area in the footer', 'fell'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'fell_widgets_init' );