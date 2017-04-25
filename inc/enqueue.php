<?php

/*
 * Enqueue scripts and styles.
 */
if (! function_exists('alaa_theme_scripts')) {

function alaa_theme_scripts()
{

    wp_register_style('alaa_font_awesome_css', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_register_style('alaa_bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('alaa_slick_css', get_template_directory_uri() . '/css/slick.css');
    wp_register_style('alaa_slick_theme_css', get_template_directory_uri() . '/css/slick-theme.css');
    wp_register_style('alaa_fancybox_css', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
    wp_register_style('alaa_style_css', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_style('alaa_font_awesome_css');
    wp_enqueue_style('alaa_bootstrap_css');
    wp_enqueue_style('alaa_slick_css');
    wp_enqueue_style('alaa_slick_theme_css');
    wp_enqueue_style('alaa_fancybox_css');
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Righteous|Squada+One");
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('alaa_style_css');


    wp_register_script('alaa_bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true);
    wp_register_script('alaa_fancybox_js', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), '', true);
    wp_register_script('alaa_slick_js', get_template_directory_uri() . '/js/slick.js', array('jquery'), '', true);
    wp_register_script('alaa_jquery_waypoint_js', get_template_directory_uri() . '/js/waypoints.js', array('jquery'), '', true);
    wp_register_script('alaa_jquery_appear_js', get_template_directory_uri() . '/js/jquery.appear.js', array('jquery'), '', true);
    wp_register_script('alaa_jssor_slider_js', get_template_directory_uri() . '/js/jssor.slider.min.js', array('jquery'), '', true);
    wp_register_script('alaa_gmap_js',get_template_directory_uri() . '/js/map.js', array('jquery'), '', true);
    wp_register_script('gmap',"https://maps.googleapis.com/maps/api/js?key=
AIzaSyAn5zlMP-M_C210O0Aq4q6Lx61qSg4Qi1c& callback=initMap",'','4.7.3:14',true);
    wp_register_script('alaa_main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);

    wp_enqueue_script('alaa_bootstrap_js');
    wp_enqueue_script('alaa_fancybox_js');
    wp_enqueue_script('alaa_slick_js');
    wp_enqueue_script('alaa_jquery_waypoint_js');
    wp_enqueue_script('alaa_jquery_appear_js');
    wp_enqueue_script('alaa_jssor_slider_js');
    wp_enqueue_script('alaa_gmap_js');
    wp_enqueue_script('gmap');
    wp_enqueue_script('alaa_main_js');



}
}