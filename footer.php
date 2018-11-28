  </div>

  <footer>
    <div class='bones-widget bones-footer-widget'>
      <h3><?php if (get_option('bones-footer-one-header')) {
        echo get_option('bones-footer-one-header');
      } else {
        echo 'About Us';
      } ?></h3>
      <?php if (get_option('bones-footer-one')) {
        echo get_option('bones-footer-one');
      } ?>
    </div>

    <div class='bones-widget bones-footer-widget'>
      <h3><?php if (get_option('bones-footer-two-header')) {
        echo get_option('bones-footer-two-header');
      } else {
        echo 'Quicklinks';
      } ?></h3>
      <?php if (get_option('bones-footer-two')) {
        echo get_option('bones-footer-two');
      }  elseif (wp_nav_menu('footer')) {
        ?> <div class='bones-footer-menu'><?php wp_nav_menu('footer'); ?></div><?php
      } ?>
    </div>

    <div class='bones-widget bones-footer-widget'>
      <h3><?php if (get_option('bones-footer-three-header')) {
        echo get_option('bones-footer-three-header');
      } else {
        echo 'Contact Us';
      } ?></h3>
      <?php if (get_option('bones-footer-three')) {
        echo get_option('bones-footer-three');
      } ?>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
