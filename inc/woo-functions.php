<?php

if ( !class_exists('WooCommerce') )
    return;


/**
 * Add/remove actions
 */



remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

add_action('woocommerce_before_main_content', 'alaa_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'alaa_theme_wrapper_end', 10);

function alaa_theme_wrapper_start() {

	echo '<div class="container">';
	echo '<div id="primary">';
}

function alaa_theme_wrapper_end() {
	echo '</div>';
	get_sidebar( 'shop' );
	echo '</div>';
}

add_filter( 'woocommerce_show_page_title', '__return_false' );

// Change number or products per row to 3
add_filter('loop_shop_columns', 'alaa_loop_columns');
if (!function_exists('alaa_loop_columns')) {
	function alaa_loop_columns() {
		return 3;
	}
}

// Display 9 products per page.
add_filter( 'loop_shop_per_page', 'alaa_product_per_page', 20 );
if (!function_exists('alaa_product_per_page')) {
	function alaa_product_per_page() {
		return 9;
	}
}

function alaa_update_woo_thumbnail(){
	$catalog = array(
		'width' 	=> '325',	// px
		'height'	=> '380',	// px
		'crop'		=> 1 		// true
	);

	$single = array(
		'width' 	=> '600',	// px
		'height'	=> '600',	// px
		'crop'		=> 1 		// true
	);

	$thumbnail = array(
		'width' 	=> '120',	// px
		'height'	=> '120',	// px
		'crop'		=> 1 		// false
	);;
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}

add_action( 'init', 'alaa_update_woo_thumbnail');

//Change number of related products on product page
add_filter( 'woocommerce_output_related_products_args', 'alaa_related_products_args' );
function alaa_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 3 related products
	$args['columns'] = 3; // arranged in 3 columns
	return $args;
}


function alaa_change_prev_text( $args ){
	$args['prev_text'] = '&lang;';
	$args['next_text'] = '&rang;';
	return $args;
}

add_filter( 'body_class' , 'woocommerce_column_class');

function woocommerce_column_class($classes){
	$classes[] = 'columns-3';
	return $classes;
}




add_action( 'woocommerce_before_shop_loop_item_title', 'alaa_title_wrap', 20 );
function alaa_title_wrap(){
	echo '<div class="alaa-product-title-wrap">';
}

add_action( 'woocommerce_after_shop_loop_item', 'alaa_title_wrap_close', 4 );
function alaa_title_wrap_close(){
	echo '</div>';
}


