<?php

function load_styles() {
  wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('owl_carousel_css', get_template_directory_uri() . '/assets/js/owl_carousel/dist/assets/owl.carousel.min.css', array(), false, 'all');
  wp_enqueue_style('owl_carousel_theme_css', get_template_directory_uri() . '/assets/js/owl_carousel/dist/assets/owl.theme.default.css', array(), false, 'all');
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.12.0/css/all.css', array(), false, 'all');
  wp_enqueue_style('thedripbar_styles', get_template_directory_uri() . '/assets/css/thedripbar_styles.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true);
  wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/assets/js/owl_carousel/dist/owl.carousel.min.js', array(), false, true);
  wp_enqueue_script('thedripbar_scripts', get_template_directory_uri() . '/assets/js/thedripbar_scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

function thedripbar_menus() {
  register_nav_menu('HeaderMenuTopRight', 'Header Menu Top Right');
  register_nav_menu('HeaderMenuLeft', 'Header Menu Left');
  register_nav_menu('HeaderMenuRight', 'Header Menu Right');
  register_nav_menu('FooterMenuLeft', 'Footer Menu Left');
}
add_action('after_setup_theme', 'thedripbar_menus');

function thedripbar_sidebars() {
  register_sidebar(array(
    'id'            => 'primary',
    'name'          => __('Primary Sidebar'),
    'description'   => __('This is the general sidebar.'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'thedripbar_sidebars');

function thedripbar_widgets_header() {
  register_sidebar(array(
    'name'          => 'Widget Area Header 1',
    'id'            => 'widget-area-header-1',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="title_header_widget">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'thedripbar_widgets_header');

function thedripbar_widgets_footer() {
  register_sidebar(array(
    'name'          => 'Widget Area Footer 1',
    'id'            => 'widget-area-footer-1',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="title_footer_widget">',
    'after_title'   => '</h2>',
  ));

 register_sidebar(array(
    'name'          => 'Widget Area Footer 2',
    'id'            => 'widget-area-footer-2',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="title_footer_widget">',
    'after_title'   => '</h2>',
  ));

 register_sidebar(array(
    'name'          => 'Widget Area Footer 3',
    'id'            => 'widget-area-footer-3',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="title_footer_widget">',
    'after_title'   => '</h2>',
  ));

  register_sidebar(array(
    'name'          => 'Widget Area Footer 4',
    'id'            => 'widget-area-footer-4',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="title_footer_widget">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'thedripbar_widgets_footer');

if(function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings'
	));
}

add_filter('big_image_size_threshold', '__return_false');

add_post_type_support( 'page', 'excerpt' );