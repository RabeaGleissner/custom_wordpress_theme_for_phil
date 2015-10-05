<?php get_header() ?>
<?php the_post() ?>
<nav class="top-nav">
  <?php get_template_part( 'partials/nav' ); ?>
</nav>

<article class="single-post">
   <!-- <?php# $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ) ?>
    <img src="<?php #echo $image[0] ?>" alt="photo of <?php the_title_attribute() ?>">-->
    <div class="single-post-categories">
      <?php
        if ( has_category() ) {
          echo '<h4>Category:</h4>';
          echo the_category();
        }
        if ( has_tag() ) {
          echo '<h4>Tags:</h4>';
          echo the_tags( '', ', ' );
        }
      ?>
    </div>
  <div class="single-post-content">
    <header class="post-header">
      <h1 class="post-title"><?php the_title() ?></h1>
    </header>
    <div class="single-post-entry-content">
      <?php the_content() ?>
    </div>
  </div>
</article>

<?php get_footer() ?>
