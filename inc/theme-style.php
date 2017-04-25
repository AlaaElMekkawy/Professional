<?php
/**
 * @package alaa
 */

//Converts hex colors to rgba for the menu background color
function alaa_hex2rgba($color, $opacity = false) {

        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        $rgb =  array_map('hexdec', $hex);
        $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        return $output;
}

//Dynamic styles
function alaa_custom_styles($custom) {

	$custom = '';
	

	//Top info bar  color
	$info_text = get_theme_mod( 'top_infobar_color', '#333' );
	$custom .= ".top-header li a { color:" . esc_attr($info_text) . "}"."\n";


	//Top info bar  background
	$info_bg = get_theme_mod( 'top_infobar_bg_color', '#000000' );
	$custom .= ".top-header { background:" . esc_attr($info_bg) . "}"."\n";

	//menu background
	$menu_bg = get_theme_mod( 'menu_bg_color', '#f1f1f1' );
	$custom .= ".site-header .nav-wrapper .navbar-default, .nav-wrapper .navbar .nav li.dropdown ul.dropdown-menu li { background:" . esc_attr($menu_bg) . "}"."\n";

	//Site title
	$site_title = get_theme_mod( 'site_title_color', '#00cccc' );
	$custom .= ".site-header .nav-wrapper .navbar-default .navbar-brand h1 a { color:" . esc_attr($site_title) . "}"."\n";


	//Site description
	$site_desc = get_theme_mod( 'site_desc_color', '#555555' );
	$custom .= ".site-header .nav-wrapper .navbar-default .navbar-brand p { color:" . esc_attr($site_desc) . "}"."\n";




	//Top level menu items color
	$top_items_color = get_theme_mod( 'top_items_color', '#333333' );
	$custom .= ".site-header .nav-wrapper .navbar .navbar-nav li a { color:" . esc_attr($top_items_color) . "}"."\n";



    //Slider header
    $slider_header = get_theme_mod( 'slider_header', '#eee' );
    $custom .= ".carousel-caption h1, .header-detail h1 { color:" . esc_attr( $slider_header) . "}"."\n";



    //slider text
    $slider_text = get_theme_mod( 'slider_text', '#eee' );
    $custom .= ".carousel-caption p, .header-detail h2, .header-detail p { color:" . esc_attr($slider_text) . "}"."\n";

    //Header Image overlay
    $opc =  get_theme_mod('overlay', '.6');
    $overlay = alaa_hex2rgba(  get_theme_mod( 'header_overlay', '#000000' ),$opc);
    $custom .= ".front-header .overlay { background:" . esc_attr($overlay) . "}"."\n";


    $primary_color = get_theme_mod( 'primary_color', '#00cccc' );
    if ( $primary_color != '#00cccc' ) {

        /*color*/
        $custom .=".entry-title, a:hover, a:focus,
button, .btn, .button, a.button, .entry-readmore a,
input#submit, button.button, input.button,
input[type=\"button\"],
input[type=\"reset\"],
input[type=\"submit\"], .site-header .nav-wrapper .navbar .navbar-nav li a:hover, .site-header .nav-wrapper .navbar .navbar-nav li a:active, .navbar-default .navbar-nav > li > a:hover, .dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover, .dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus, .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus, .post-previous a:after, .post-next a:after, .alaa-standard-format h2 a, .alaa-aside-format .seemore a, .alaa-single-post-format h2, .alaa-single-post-format h2 a,
.woocommerce ul.products li.product .price, .woocommerce #respond input#submit,
.woocommerce a.button,
.woocommerce button.button,
.woocommerce input.button, .woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt,
.woocommerce a.button.alt,
.woocommerce button.button.alt,
.woocommerce input.button.alt, .woocommerce nav.woocommerce-pagination ul li a,
.woocommerce nav.woocommerce-pagination ul li span, .woocommerce div.product p.price,
.woocommerce div.product span.price, .woocommerce .product_meta a:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li a, .woocommerce-error:before,
.woocommerce-info:before,
.woocommerce-message:before, .woocommerce-MyAccount-navigation-link a, .site-footer aside ul li a:hover, .footer-social .social-nav li a:hover, .footer-social .contact-nav li a:hover, .copyright a, .top-header .social-nav li:hover a, .top-header .contact-nav li:hover a, .site-header .nav-wrapper .navbar-default .navbar-brand:hover h1, .site-header .nav-wrapper .navbar-default .navbar-brand:hover p {color:" . esc_attr($primary_color) . "}"."\n";

        /*background*/
        $custom .= " button:hover, button:focus, .btn:hover, .btn:focus, .button:hover, .button:focus, a.button:hover, a.button:focus, .entry-readmore a:hover, .entry-readmore a:focus,
input#submit:hover,
input#submit:focus, button.button:hover, button.button:focus, input.button:hover, input.button:focus,
input[type=\"button\"]:hover,
input[type=\"button\"]:focus,
input[type=\"reset\"]:hover,
input[type=\"reset\"]:focus,
input[type=\"submit\"]:hover,
input[type=\"submit\"]:focus, .navbar-default .navbar-toggle .icon-bar, .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:active, .navbar-default .navbar-toggle:focus,.sec-title:before, .sec-title:after, .alaa-standard-format h2.entry-title:before, .alaa-standard-format h2.entry-title:after, .alaa-single-post-format h2.entry-title:before, .alaa-single-post-format h2.entry-title:after, .woocommerce #respond input#submit:hover,
.woocommerce a.button:hover,
.woocommerce button.button:hover,
.woocommerce input.button:hover, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover,
.woocommerce a.button.alt:hover,
.woocommerce button.button.alt:hover,
.woocommerce input.button.alt:hover, .woocommerce nav.woocommerce-pagination ul li a:focus,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce span.onsale, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce-MyAccount-navigation-link.is-active a,
.woocommerce-MyAccount-navigation-link a:hover, .woo-widget aside .widget-title:after, h3#reply-title:after, h3.comments-title:after, .side-bar aside .widget-title:after,.section-title:after, .al-featured-post h3:after, .front-header .header-detail h1:before, .progress .progress-bar { background-color:" . esc_attr($primary_color) . "}"."\n";


        /*border*/
        $custom .= " button, .btn, .button, a.button, .entry-readmore a,  .navbar-default .navbar-toggle,
input#submit, button.button, input.button,
input[type=\"button\"],
input[type=\"reset\"],
input[type=\"submit\"],#header-search-wrap .search-form label .search-field, .woocommerce #respond input#submit,
.woocommerce a.button,
.woocommerce button.button,
.woocommerce input.button, .woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt,
.woocommerce a.button.alt,
.woocommerce button.button.alt,
.woocommerce input.button.alt, .woocommerce nav.woocommerce-pagination ul li a,
.woocommerce nav.woocommerce-pagination ul li span, .woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce-MyAccount-navigation-link a, 
.woocommerce div.product .woocommerce-tabs ul.tabs, woocommerce-error,
.woocommerce-info,
.woocommerce-message, .carousel-caption, blockquote { border-color:" . esc_attr($primary_color) . "}"."\n";


        $custom .= " .woocommerce ul.products li.product .onsale:after, .woocommerce span.onsale:after { border-bottom-color:" . esc_attr($primary_color) . "}"."\n";
        $custom .= "  .woocommerce ul.products li.product .onsale:after { border-left-color:" . esc_attr($primary_color) . "}"."\n";
        $custom .= " .woocommerce span.onsale:after { border-right-color:" . esc_attr($primary_color) . "}"."\n";

            }

            wp_add_inline_style( 'alaa_style_css', $custom );
}


/*        $custom .= "     { color:" . esc_attr() . "}"."\n";  */
