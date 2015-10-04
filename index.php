<?php get_header(); ?>
<nav class="top-nav">
  <?php get_template_part( 'partials/nav' ); ?>
</nav>

<h1 class="index">Blog</h1>
<div class="flex-box blog-posts">
  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  <article class="post">
    <a href="<?php the_permalink() ?>">
      <header class="post-header">
        <h1 class="post-title"><?php the_title() ?></h1>
      </header>
      <!--<?php #$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ) ?>
      <img src="<?php #echo $image[0] ?>" alt="photo of <?php the_title_attribute() ?>"> -->
    </a>
    <p class="teaser"><?php the_excerpt(); ?></p>
  </article><?php endwhile; endif; ?>
</div>
<?php get_template_part( 'partials/pagination' ); ?>
<?php get_footer(); ?>