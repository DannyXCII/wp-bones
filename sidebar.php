<!-- bones sidebar -->
<section id='bones-sidebar'>
  <div class='bones-widget bones-about-widget'>
    <h3>About</h3>
    <p><?php the_author_meta('description'); ?></p>
  </div>

  <div class='bones-widget bones-archive-widget'>
    <h3>Archives</h3>
    <p>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </p>
  </div>

  <div class='bones-widget categories-widget'>
    <p>
      <?php wp_list_categories(); ?>
    </p>
  </div>
</section>
