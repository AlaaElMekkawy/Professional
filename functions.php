<?php


require  get_template_directory() . '/inc/enqueue.php';
require  get_template_directory() . '/inc/themesetup.php';
require  get_template_directory() . '/inc/custom-header.php';
require  get_template_directory() . '/inc/woo-functions.php';
require  get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
require  get_template_directory() . '/inc/customizer/customizer.php';
require  get_template_directory() . '/inc/customizer/customizer-social.php';
require  get_template_directory() . '/inc/customizer/customizer-skills.php';
require  get_template_directory() . '/inc/theme-style.php';



add_action( 'wp_enqueue_scripts', 'alaa_theme_scripts' );
add_action( 'after_setup_theme', 'alaa_theme_setup' );
add_action( 'widgets_init', 'alaa_widget_init' );
add_action( 'wp_enqueue_scripts', 'alaa_custom_styles' );





