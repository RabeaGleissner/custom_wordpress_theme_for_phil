<?php
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
add_action( 'widgets_init', 'sidebar_widgets_init' );

// Create the main navigation menu
register_nav_menu( 'main', 'Main Menu' );

// Add custom CSS
wp_enqueue_style( 'normalise', get_template_directory_uri() . '/assets/css/normalize.css' );
wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/styles.css' );
?>