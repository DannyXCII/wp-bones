<!-- single post page -->
<?php get_header(); ?>
<main class='bones-page'>
  <?php
  if (have_posts()) : while (have_posts()) : the_post();
    get_template_part('includes/content-single');

    if (comments_open() || get_comments_number()) : comments_template(); endif;
  endwhile; endif;
  ?>
</main>
<?php get_footer(); ?>
