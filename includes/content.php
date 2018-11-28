
  <div class='bones-post-preview'>
    <h2 class='bones-post-title'><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
    <p class='bones-post-information'><?php echo get_the_date(); ?> by <a href='#' class='bones-post-author'><b><?php the_author(); ?></b></a> | <?php the_category(', '); ?></p>
    <?php if (has_post_thumbnail()) {
      the_post_thumbnail();
    } ?>
    <div class='bones-post-preview-content'>
      <?php the_excerpt(); ?>
        <a href='<?php the_permalink(); ?>'>Read More</a>
    </div>
  </div>
