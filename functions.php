<?php
function theme_enqueue_scripts(){
  if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
    wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
    wp_enqueue_script('livereload');
  }
}
// Add support for featured images
add_theme_support( 'post-thumbnails' );

// Add a widget sidebar
function sidebar_widgets_init() {

  register_sidebar( array(
    'name' => 'Home Sidebar',
    'id' => 'home_sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ) );
}

function styles_scripts() {
  wp_enqueue_style( 'normalise', get_template_directory_uri() . '/assets/css/normalize.css' );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/styles.css' );
}
add_action( 'wp_enqueue_scripts', 'styles_scripts' );

add_action( 'sidebar_widgets_init', 'theme_enqueue_scripts' );

// Create the main navigation menu
register_nav_menu( 'main', 'Main Menu' );
?>