<?php get_header() ?>
<nav class="top-nav">
  <?php get_template_part( 'partials/nav' ); ?>
</nav>

  <h1 class="site-archive-title">
    <?php if ( is_tag() ) {
      echo 'All posts tagged with '; single_tag_title();
    } else if ( is_category() ) {
      echo 'All posts in the category '; single_cat_title();
    } else if ( is_search() ) {
      echo 'Search results for ' . $_GET['s'];
    } else {
      the_title();
    } ?>
  </h1>
  <?php if ( is_search() ): ?>
    <aside class="site-sidebar">
      <h2>Search again</h2>
      <?php get_search_form() ?>
    </aside>
  <?php endif ?>
  <div class="site-archive">

    <?php if ( have_posts() ): while ( have_posts() ): the_post() ?>

      <article class="post">
        <a href="<?php the_permalink() ?>">
          <header class="post-header">
            <h1 class="post-title"><?php the_title() ?></h1>
          </header>
         <!-- <?php# $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ) ?>
          <img src="<?php #echo $image[0] ?>" alt="photo of <?php the_title_attribute() ?>"> -->
        </a>
        <p class="teaser"><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile ?>

    <?php get_template_part( 'parts/pagination' ) ?>

    <? else: ?>

      <h2>No posts found :( </h2>

    <?php endif ?>

  </div>

<?php get_footer() ?>