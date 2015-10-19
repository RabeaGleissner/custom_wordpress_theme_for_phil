<?php get_header() ?>
<?php the_post() ?>
<article class="single-post">
   <!-- <?php# $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ) ?>
    <img src="<?php #echo $image[0] ?>" alt="photo of <?php the_title_attribute() ?>">-->
  <div class="single-post-content">
    <header class="post-header">
      <h1 class="post-title"><?php the_title() ?></h1>
      <p class="date"><?php the_date() ?></p>
    </header>
    <div class="single-post-entry-content">
      <?php the_content() ?>
    </div>
    <div class="next-previous-link">
      <p class="previous"><?php previous_post_link(); ?></p> 
      <p class="next"><?php next_post_link(); ?></p>
    </div>
  </div>
  <aside class="categories-tags">
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
  </aside>
</article>

<?php get_footer() ?>
