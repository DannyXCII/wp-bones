<?php
// add theme support
add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('nav-menus');

// call stylesheets and scripts
function bones_scripts() {
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('bones', get_template_directory_uri() . '/assets/css/bones.css');
  wp_enqueue_style('bones-widgets', get_template_directory_uri() . '/assets/css/bones-widgets.css');
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}

// add google fonts
function bones_fonts() {
  wp_register_style('BonesSans', 'https://fonts.googleapis.com/css?family=Anton|Montserrat:200,400');
  wp_enqueue_style( 'BonesSans');
}

// custom settings menu
function bones_settings_add_menu() {
  // add_menu_page($page_title, $menu_title, $requiredCapability (for user to see the option), $menu_slug, opt $callback, opt $icon_url, opt $menu_position);
  add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'bones-theme-settings', 'bones_settings_page', 'dashicons-admin-settings', 61);
  // add_submenu_page($parent_slug, $page_title, $menu_title, $requiredCapability, $menu_slug, $callback);
  add_submenu_page('bones-theme-settings', 'Social Settings', 'Social Settings', 'manage_options', 'bones-social-settings', 'bones_social_settings_page');
}

function bones_settings_page() { ?>
  <div class='wrap'>
    <h1>Bones | Theme Settings</h1>
    <p style='font-weight: 200;'>The bare-bones WordPress theme. Here you can manage your theme options.</p>
    <form method='post' action='options.php'>
      <?php
        settings_fields('options-section');
        do_settings_sections('theme-options');
        submit_button();
      ?>
    </form>
  </div>
<?php }

function bones_social_settings_page() { ?>
  <div class='wrap'>
    <h1>Bones | Social Settings</h1>
    <p style='font-weight: 200;'>Provide your social URL's here in order for the social icons to display in the header.</p>
    <form method='post' action='options.php'>
      <?php
        settings_fields('section');
        do_settings_sections('social-options');
        submit_button();
      ?>
    </form>
  </div>
<?php }

function setting_twitter() { ?>
  <input type='text' style='width: 250px;' name='twitter' id='twitter' value='<?php echo get_option('twitter'); ?>'>
<?php }

function setting_facebook() { ?>
  <input type='text' style='width: 250px;' name='facebook' id='facebook' value='<?php echo get_option('facebook'); ?>'>
<?php }

function setting_instagram() { ?>
  <input type='text' style='width: 250px;' name='instagram' id='instagram' value='<?php echo get_option('instagram'); ?>'>
<?php }

function setting_footer_one() { ?>
  <textarea style='width: 500px; height: 200px;' name='bones-footer-one' id='bones-footer-one' value='<?php get_option('bones-footer-one'); ?>'><?php echo get_option('bones-footer-one'); ?></textarea>
<?php }

function setting_footer_one_title() { ?>
  <input type='text' style='width: 250px;' name='bones-footer-one-header' id='bones-footer-one-header' value='<?php echo get_option('bones-footer-one-header'); ?>'>
<?php }

function setting_footer_two() { ?>
  <textarea style='width: 500px; height: 200px;' name='bones-footer-two' id='bones-footer-two' value='<?php get_option('bones-footer-two'); ?>'><?php echo get_option('bones-footer-two'); ?></textarea>
<?php }

function setting_footer_two_title() { ?>
  <input type='text' style='width: 250px;' name='bones-footer-two-header' id='bones-footer-two-header' value='<?php echo get_option('bones-footer-two-header'); ?>'>
<?php }

function setting_footer_three() { ?>
  <textarea style='width: 500px; height: 200px;' name='bones-footer-three' id='bones-footer-three' value='<?php get_option('bones-footer-three'); ?>'><?php echo get_option('bones-footer-three'); ?></textarea>
<?php }

function setting_footer_three_title() { ?>
  <input type='text' style='width: 250px;' name='bones-footer-three-header' id='bones-footer-three-header' value='<?php echo get_option('bones-footer-three-header'); ?>'>
<?php }

function bones_social_settings_page_setup() {
  add_settings_section('section', 'Social Settings', null, 'social-options');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'social-options', 'section');
  add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'social-options', 'section');
  add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'social-options', 'section');

  register_setting('section', 'twitter');
  register_setting('section', 'facebook');
  register_setting('section', 'instagram');
}

function bones_settings_page_setup() {
  add_settings_section('options-section', 'All Settings', null, 'theme-options');
  add_settings_field('bones-footer-one-header', 'Footer Widget One - Title', 'setting_footer_one_title', 'theme-options', 'options-section');
  add_settings_field('bones-footer-one', 'Footer Widget One - Content', 'setting_footer_one', 'theme-options', 'options-section');
  add_settings_field('bones-footer-two-header', 'Footer Widget Two - Title', 'setting_footer_two_title', 'theme-options', 'options-section');
  add_settings_field('bones-footer-two', 'Footer Widget Two - Content', 'setting_footer_two', 'theme-options', 'options-section');
  add_settings_field('bones-footer-three-header', 'Footer Widget Three - Title', 'setting_footer_three_title', 'theme-options', 'options-section');
  add_settings_field('bones-footer-three', 'Footer Widget Three - Content', 'setting_footer_three', 'theme-options', 'options-section');

  register_setting('options-section', 'bones-footer-one-header');
  register_setting('options-section', 'bones-footer-one');
  register_setting('options-section', 'bones-footer-two-header');
  register_setting('options-section', 'bones-footer-two');
  register_setting('options-section', 'bones-footer-three-header');
  register_setting('options-section', 'bones-footer-three');
}

add_action('wp_enqueue_scripts', 'bones_scripts');
add_action('wp_print_styles', 'bones_fonts');
add_action('admin_menu', 'bones_settings_add_menu');
add_action('admin_init', 'bones_social_settings_page_setup');
add_action('admin_init', 'bones_settings_page_setup');
?>
