<?php get_header(); ?>
  <main class='bones-post'>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part('includes/content', get_post_format()); ?>
    <?php endwhile; ?>
    	<ul class='bones-pager'>
    		<li><?php next_posts_link( 'Previous Posts' ); ?></li>
    		<li><?php previous_posts_link( 'Newer Posts' ); ?></li>
    	</ul>
    <?php endif; ?>
  </main>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
