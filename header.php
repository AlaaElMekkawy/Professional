<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @package alaa
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="site"><!-- closed in footer page-->

<?php $alaa_theme_options = alaa_options(); ?>

<!-- Start of Header section -->
<header class="site-header" role="banner">
    <div class="row top-header">
         <div class="col-sm-7 contact text-left">
        <?php if ( $alaa_theme_options['contact_checkbox_header'] != '' ) { alaa_contact_icons(); } ?>
          </div>

        <div class="col-sm-5 social text-right">
            <?php if ( $alaa_theme_options['social_checkbox_header'] != '' ) { alaa_social_icons(); } ?>
         </div>
    </div> <!-- .row top-header-->
    <!-- End Top Header -->
    <!-- Start of Naviation -->

<div class="nav-wrapper">

    <nav id="primary-nav" class="navbar navbar-default">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only"><?php echo esc_html__('Toggle navigation', 'alaa');?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <?php if ( get_theme_mod('site_logo') ) : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
                <?php else : ?>
                    <div class="navbar-brand">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                    <p class="site-description"><?php bloginfo( 'description' ); ?></p></a>
                    </div>
                <?php endif; ?>
                </div>
                <?php
                if ( has_nav_menu('primary') ) :
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id' => '',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbar-collapse',
                        'menu_class' => 'nav navbar-nav ',
                        'depth' => 6,
                        'walker'    => new wp_bootstrap_navwalker(),
                    ));
                else : ?>
                    <ul id="menu-main-menu-1" class="nav navbar-nav navbar-right">
                        <?php
                        if (is_user_logged_in() && current_user_can('edit_theme_options') ) {
                            echo  '<li class="menu-item"><a href="'.esc_url(admin_url('nav-menus.php')).'" target="_blank"><i class="fa fa-plus-circle"></i> '.esc_html__('Assign a menu', 'alaa').'</a></li>';
                        }
                        ?>
                    </ul>
                <?php endif; ?>
        </div><!-- .container -->
        </nav>
</div><!-- .nav-wrapper-->

<!--  header Search Form-->
<div id="header-search-wrap" style="display:none">
    <?php get_template_part( 'template-parts/header', 'form' ); ?>
</div>

</header>
<!-- End of Navigation -->


<?php get_template_part( 'template-parts/header', 'front'); ?>

    <div class="site-content-contain"><!-- closed in footer page-->
        <div id="content" class="site-content"><!-- closed in footer page-->
