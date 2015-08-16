<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ) ?></title>
     
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- <link rel="shortcut icon" href="<?php #echo get_template_directory_uri(); ?>/assets/images/favicon.png" /> -->
    <?php wp_head(); ?>
  </head>
  <div class="page-wrapper">
    <header class="site-header">
       <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'site-nav', 'menu_class' => 'menu' ) ); ?>
    </header>
    <main class="site-content">
