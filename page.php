<?php get_header(); ?>
<main class='bones-page'>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('page-content'); ?>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
