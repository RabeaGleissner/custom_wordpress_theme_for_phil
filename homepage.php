<?php
/*
Template Name: Homepage
*/
?>

<?php the_post(); ?>
<?php get_header(); ?>
<?php get_sidebar() ?>

<article class="home-page site-content">
  <h1><?php the_title(); ?></h1>
  <?php
  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  }
  ?>
  <?php the_content(); ?>
</article>
<?php get_footer(); ?>