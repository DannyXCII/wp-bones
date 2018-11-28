<div class='bones-single-post'>
  <h2 class='bones-post-title'><?php the_title(); ?></h2>
  <p class='bones-post-information'><?php echo get_the_date(); ?> by <a href='bones-post-author'><?php the_author(); ?></a></p>
  <?php if (has_post_thumbnail()) {
    the_post_thumbnail();
  } ?>
  <div class='bones-post-content'>
    <?php the_content(); ?>
  </div>
</div>
