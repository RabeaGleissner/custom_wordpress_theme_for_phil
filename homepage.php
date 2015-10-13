<?php
/*
Template Name: Homepage
*/
?>

<?php the_post(); ?>
<?php get_header(); ?>
<article class="homepage">
  <h1><?php the_title(); ?></h1>
  <section class="intro-text">
    <?php the_content(); ?>
  </section>
  <?php
  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  }
  ?>
</article>
<?php get_footer(); ?>