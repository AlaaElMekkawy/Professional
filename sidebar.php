<?php
/**
 * The sidebar containing the main widget area
 *
 */

if ( ! is_active_sidebar( 'alaa-right-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'alaa-right-sidebar' ); ?>
</aside><!-- #secondary -->
