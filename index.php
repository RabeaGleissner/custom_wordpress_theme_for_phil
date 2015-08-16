<?php get_header(); ?>
<h1 class="index">All blog posts</h1>
<div class="flex-box">
  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  <article class="post">
    <a href="<?php the_permalink() ?>">
      <header class="post-header">
        <h1 class="post-title"><?php the_title() ?></h1>
      </header>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ) ?>
      <img src="<?php echo $image[0] ?>" alt="photo of <?php the_title_attribute() ?>">
    </a>
  </article>    <?php endwhile; endif; ?>
</div>
<nav class="pagination">
  <?php
  global $wp_query;
  $big = 999999999;
  echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $wp_query->max_num_pages
  ) );                                              
  ?>     
</nav>
<?php get_footer(); ?>
