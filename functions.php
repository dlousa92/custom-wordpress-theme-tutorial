<?php

// Functions

function bootstrapstarter_wp_setup() {
  add_theme_support('tutle-tag');
}

function bootstrapstarter_enqueue_styles() {
  wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
  $dependencies = array('bootstrap');
  wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies);
}

function bootstrapstarter_enqueue_scripts() {
  $dependencies = array('jquery');
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstra.min.js', $dependencies, '3.3.6', true );
}

function bootstrapstarter_register_menu() {
  register_nav_menu('header-menu', __( 'Header Menu'));
}

function bootstrapstarter_widgets_init() {
  register_sidebar( array(
    'name' => 'Footer - Copyright Text',
    'id'   => 'footer_copyright_text',
    'before_widget' => 'div class="footer_copyright_text">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}

// Actions

add_action( 'after_setup-theme', 'bootstrapstarter_wp_setup');
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );
add_action( 'init', 'bootstrapstarter_register_menu' );
add_action( 'widgets_init', 'bootstrapstarter_widgets_init');

?>