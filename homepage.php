<?php
/*
Template Name: Homepage
*/
?>

<?php the_post(); ?>
<?php get_header(); ?>
<nav class="sidebar-nav">
  <?php get_template_part( 'partials/nav' ); ?>
</nav>

<article class="home-page site-content">
  <h1><?php the_title(); ?></h1>
<!--   <?php
  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  }
  ?> -->
  <!-- <img src="http://www.fillmurray.com/300/200" alt="placeholder"> -->
  <?php the_content(); ?>
</article>
<?php get_footer(); ?>