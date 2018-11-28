<!doctype html>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=0'>
  <meta name='description' content=''>

  <?php wp_head(); ?>
</head>
<body>
  <!-- page header -->
  <header>
    <div id='bones-logo'>
      <?php if (function_exists('the_custom_logo') && has_custom_logo()) {
        the_custom_logo();
      } else {?>
      <a href='<?= get_bloginfo('wpurl'); ?>'><h1><?php echo get_bloginfo('name'); ?></h1></a><?php } ?>
    </div>
    <nav>
      <?php wp_nav_menu(array('menu' => 'main', 'item_spacing' => 'discard')); ?>

      <ul id='bones-social-menu'>
        <?php if (get_option('facebook')) { ?>
          <li><a href='<?php echo get_option('facebook'); ?>'><i class='fab fa-facebook-f fa-lg'></i></a></li><!--
        --><?php } if (get_option('instagram')) { ?><li><a href='<?php echo get_option('instagram'); ?>'><i class='fab fa-instagram fa-lg'></i></a></li><!--
        --><?php } if (get_option('twitter')) { ?><li><a href='<?php echo get_option('twitter'); ?>'><i class='fab fa-twitter fa-lg'></i></a></li><?php } ?>
      </ul>
    </nav>
  </header>

  <section id='bones-headline'>
    <div>
      <p><?= get_bloginfo('description'); ?></p>
    </div>
  </section>

  <div class='bones-container'>
