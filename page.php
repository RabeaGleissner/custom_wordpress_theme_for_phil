<?php the_post(); ?>
<?php get_header(); ?>

<article class="site-page post-content">
  <h1><?php the_title(); ?></h1>
  <?php
  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  }
  ?>
  <?php the_content(); ?>
</article>
<?php get_footer(); ?>