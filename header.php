<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ) ?></title>

    <!-- <link rel="shortcut icon" href="<?php #echo get_template_directory_uri(); ?>/assets/images/favicon.png" /> -->
    <?php wp_head(); ?>
  </head>
  <body>
  <div class="page-wrap">
    <header class="site-header">
       <div class="logo"><a href="/">Philip Gleissner</a></div>
       <nav class="top-nav" id='nav'>
         <?php get_template_part( 'partials/nav' ); ?>
       </nav>
    </header>
    <main class="site-content">
