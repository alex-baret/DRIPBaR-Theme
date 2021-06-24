<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/png" />

  <title>
    <?php wp_title("|" , "true", "right"); ?>
  </title>

  <?php wp_head(); ?>
</head>
<body>
  <header class="top-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
        <?php
        $args = array(
        'theme_location' => 'HeaderMenuTopRight',
        'container' => false
        );
        wp_nav_menu($args);
        ?>
        </div>
      </div>

      <div class="row left-right-row">
        <div class="col-xs-7 col-menu-left">
          <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php the_field('thedripbar_logo', 'option'); ?>" alt="The DRIPBaR Logo">
          </a>
          <?php
          $args = array(
          'theme_location' => 'HeaderMenuLeft',
          'container' => false
          );
          wp_nav_menu($args);
          ?>
        </div>
        <div class="col-xs-5 col-menu-right text-right">
          <?php
          $args = array(
          'theme_location' => 'HeaderMenuRight',
          'container' => false
          );
          wp_nav_menu($args);
          ?>
          <?php get_search_form(); ?>
        </div>

        <div class="col-xs-5 mobile-menu">
          <nav role='navigation'>
            <div id="menuToggle">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Mobile Menu Overlay -->
  <div class="mobile-menu-overlay-wrapper">
    <div id="mobile-menu-overlay">
      <span aria-hidden="true"><i class="fas fa-times close-menu-btn"></i></span>
      <?php get_search_form(); ?>
      <div id="menu-list">
        <?php if (is_active_sidebar('widget-area-header-1')) : ?>
        <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
            <?php dynamic_sidebar('widget-area-header-1'); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>