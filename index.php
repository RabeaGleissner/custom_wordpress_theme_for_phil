<?php get_header(); ?>
<div class='blog-overview-container'>
  <div class="flex-box blog-posts">
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <article class="post">
      <a href="<?php the_permalink() ?>">
        <header class="post-header">
          <h1><?php the_title() ?></h1>
          <span class="date"><?php the_date() ?></span>
        </header>
        <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail();
          }
        ?>
      </a>
      <p class="teaser"><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink() ?>">Read more...</a>
    </article><?php endwhile; endif; ?>
  </div>
  <aside class='categories-tags index-page'>
    <h3>All categories</h3>
    <?php $categories = get_categories();
    if ($categories) {
      echo '<ul>';
      foreach ($categories as $category) {
        echo '<li><a href="' . get_tag_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';
        }
      echo '</ul>';
    }
    ?>
    <!-- <h4>All tags</h4> -->
    <?php /*$tags = get_tags();
      if ($tags) {
        foreach ($tags as $tag) {
          echo '<a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a> ';
          }
      }*/
    ?> 
  </aside>
</div>
<?php get_template_part( 'partials/pagination' ); ?>
<?php get_footer(); ?>