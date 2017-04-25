<?php
/**
 * Displays footer widgets if assigned
 *
 *
 */

?>



<?php //Set widget areas classes based on user choice
$widget_areas = get_theme_mod('footer_widget_areas', '3');
if ($widget_areas == '3') {
    $cols = 'col-sm-4';
} elseif ($widget_areas == '4') {
    $cols = 'col-sm-3 ';
} elseif ($widget_areas == '2') {
    $cols = 'col-sm-6';
} else {
    $cols = 'col-sm-12';
}
?>

<aside id="sidebar-footer" class="footer-widgets widget-area" role="complementary">
    <div class="container">
        <?php if ( is_active_sidebar( 'alaa-footer1' ) ) : ?>
            <div class="sidebar-column footer-widget <?php echo $cols; ?>">
                <?php dynamic_sidebar( 'alaa-footer1'); ?>
            </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'alaa-footer2' ) ) : ?>
            <div class="sidebar-column footer-widget <?php echo $cols; ?>">
                <?php dynamic_sidebar( 'alaa-footer2'); ?>
            </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'alaa-footer3' ) ) : ?>
            <div class="sidebar-column footer-widget <?php echo $cols; ?>">
                <?php dynamic_sidebar( 'alaa-footer3'); ?>
            </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'alaa-footer4' ) ) : ?>
            <div class="sidebar-column  footer-widget <?php echo $cols; ?>">
                <?php dynamic_sidebar( 'alaa-footer4'); ?>
            </div>
        <?php endif; ?>
    </div>
</aside>