<?php
/*
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/*
 * Set up the WordPress core custom header feature.
 *
 * @uses alaa_header_style()
 */


if ( ! function_exists( 'alaa_header_style' ) ) :
    /**
     * Styles the header image and text displayed on the blog
     *
     * @see alaa_custom_header_setup().
     */
    function alaa_header_style() {
        $header_text_color = get_header_textcolor();

        // If no custom options for text are set, let's bail
        // get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value.
        if ( HEADER_TEXTCOLOR === $header_text_color ) {
            return;
        }

        // If we get this far, we have custom styles. Let's do this.
        ?>
        <style type="text/css">
            <?php
                // Has the text been hidden?
                if ( ! display_header_text() ) :
            ?>
            .sq-site-title a,
            .sq-site-description {
                position: absolute;
                clip: rect(1px, 1px, 1px, 1px);
            }
            <?php
                // If the user has set a custom color for the text use that.
                else :
            ?>
            .sq-site-title a,
            .sq-site-description {
                color: #<?php echo esc_attr( $header_text_color ); ?>;
            }
            <?php endif; ?>
        </style>
        <?php
    }
endif; // alaa_header_style





if ( ! function_exists('alaa_options') ) {
    function alaa_options() {
        // Options API
        return wp_parse_args(
            get_option( 'alaa', array() ),
            alaa_default_settings()
        );

    }
}



if ( ! function_exists('alaa_default_settings') ) {
    function alaa_default_settings() {
        $alaa_options = array(
            'footer_title'             => esc_html__('Code Themes', 'alaa'),
            'footer_link'              => '',
            'sidebar_layout'           => 'right',
            'theme_layout'             => 'boxed',
            'featured_post'            => '',
            'email_id'                 => '',
            'phone_number'             => '',
            'twitter_link'             => '',
            'fb_link'                  => '',
            'linkedin_link'            => '',
            'tumblr'                   => '',
            'instagram'                => '',
            'gplus'                    => '',
            'pinterest'                => '',
            'social_checkbox_header'   => '1',
            'social_checkbox_footer'   => '1',
            'select_blog'              => 'latest-post',
            'select_blog_category'     => '',
            'select_author'            => '',
            'author_checkbox'          => '1',
            'pre_footer_checkbox'      => '1',
            'change_css'               => '',
            'theme_color'              => '',
            'css_change'               => '',
            'featured_page_title'      => '',
            'display_tagline'          => '1',
            'enable_skills'            => '',
            'skills_title'             => '',
            'skills_subtitle'             => '',
            'skills_progress'             => '',
            'skill_name'             => '',

        );
        return apply_filters( 'alaa_options', $alaa_options );
    }
}

if ( ! function_exists('alaa_social_icons') ) {
    function alaa_social_icons() {

        $alaa_theme_options = alaa_options();

        $fb_link = $alaa_theme_options['fb_link'];
        $twitter_link = $alaa_theme_options['twitter_link'];
        $linkedin_link = $alaa_theme_options['linkedin_link'];
        $tumblr = $alaa_theme_options['tumblr'];
        $instagram = $alaa_theme_options['instagram'];
        $gplus = $alaa_theme_options['gplus'];
        $pinterest = $alaa_theme_options['pinterest'];

        if ( $fb_link || $twitter_link || $linkedin_link || $tumblr || $instagram || $gplus || $pinterest ) {

            ?>

                    <ul class="social-nav">
                            <?php if (!empty($fb_link)) { ?>
                                <li><a href="<?php echo esc_url($fb_link);?>" title="<?php echo esc_attr__('Follow us on Facebook', 'alaa');?>" class="fb-link"><span class="fa fa-facebook"></span></a></li>
                            <?php } ?>
                            <?php if (!empty($twitter_link)) { ?>
                                <li><a href="<?php echo esc_url($twitter_link);?>" title="<?php echo esc_attr__('Follow us on Twitter', 'alaa');?>" class="tw-link"><span class="fa fa-twitter"></span></a></li>
                            <?php } ?>

                            <?php if (!empty($gplus)) { ?>
                                <li><a href="<?php echo esc_url($gplus);?>" title="<?php echo esc_attr__('Follow us on Google Plus', 'alaa');?>" class="gp-link"><span class="fa fa-google-plus"></span></a></li>
                            <?php } ?>

                            <?php if (!empty($linkedin_link)) { ?>
                                <li><a href="<?php echo esc_url($linkedin_link);?>" title="<?php echo esc_attr__('Follow us on Linkedin', 'alaa');?>" class="ln-link"><span class="fa fa-linkedin"></span></a></li>
                            <?php } ?>

                            <?php if (!empty($instagram)) { ?>
                                <li><a href="<?php echo esc_url($instagram);?>" title="<?php echo esc_attr__('Follow us on Instagram', 'alaa');?>" class="in-link"><span class="fa fa-instagram"></span></a></li>
                            <?php } ?>

                            <?php if (!empty($tumblr)) { ?>
                                <li><a href="<?php echo esc_url($tumblr);?>" title="<?php echo esc_attr__('Follow us on Tumblr', 'alaa');?>" class="tu-link"><span class="fa fa-tumblr"></span></a></li>
                            <?php } ?>

                            <?php if (!empty($pinterest)) { ?>
                                <li><a href="<?php echo esc_url($pinterest);?>" title="<?php echo esc_attr__('Follow us on Pinterest', 'alaa');?>" class="pt-link"><span class="fa fa-pinterest"></span></a></li>
                            <?php } ?>

                        </ul>

                   <?php }
    }
}



if ( ! function_exists('alaa_contact_icons') ) {
    function alaa_contact_icons() {

        $alaa_theme_options = alaa_options();

        $email_id = $alaa_theme_options['email_id'];
        $phone_number = $alaa_theme_options['phone_number'];

        if ( $email_id || $phone_number ) {

            ?>
                        <ul class="contact-nav">
                            <?php if ($email_id) { ?>

                                <li>
                                    <a href="mailto:<?php echo esc_attr(antispambot($email_id)); ?>"><span class="fa fa-envelope"> <?php  echo $email_id;?></span></a>
                                </li>
                            <?php } ?>
                            <?php if ($phone_number) { ?>
                                <li>
                                    <a href="tel:<?php echo esc_attr($phone_number); ?>"><span class="fa fa-phone-square"> <?php  echo $phone_number;?></span></a>
                                </li>
                            <?php } ?>
                        </ul>



                     <?php }
    }
}



/**
 * Search Function
 * Adds the search bar in header
 *
 */

if ( ! function_exists('alaa_headsearch') ) {

    add_filter('wp_nav_menu_items','alaa_headsearch', 10, 2);

    /** Add searchbar in header. */
    function alaa_headsearch( $items, $args ) {
        if ( $args->theme_location == 'primary' ) {
            $items .= "<li class='menu-header-search'><a href='#' id='header-search-toggle'><i class='fa fa-search'></i></a></li>"; }
        return $items;
    }
}