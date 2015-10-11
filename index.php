<?php get_header(); ?>
<div class="flex-box blog-posts">
  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  <article class="post">
    <a href="<?php the_permalink() ?>">
      <header class="post-header">
        <h1><?php the_title() ?></h1>
        <span class="date"><?php the_date() ?></span>
      </header>
      <!--<?php #$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ) ?>
      <img src="<?php #echo $image[0] ?>" alt="photo of <?php the_title_attribute() ?>"> -->
    </a>
    <p class="teaser"><?php the_excerpt(); ?></p>
  </article><?php endwhile; endif; ?>
</div>
<?php get_template_part( 'partials/pagination' ); ?>
<?php get_footer(); ?>