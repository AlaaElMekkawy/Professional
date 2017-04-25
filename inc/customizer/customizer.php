<?php
/**
 * Alaa Theme Customizer.
 *
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 *
 */



function alaa_customize_register( $wp_customize ) {

    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_section( 'header_image' )->panel = 'alaa_header_panel';
    $wp_customize->get_section( 'header_image' )->priority = '13';
    $wp_customize->get_section( 'colors' )->title = __('General', 'alaa');
    $wp_customize->get_section( 'colors' )->panel = 'alaa_colors_panel';
    $wp_customize->get_section( 'colors' )->priority = '10';
    $wp_customize->remove_control('header_textcolor');

    $alaa_page = '';
    $alaa_page_array = get_pages();
    if(is_array($alaa_page_array)){
        $alaa_page = $alaa_page_array[0]->ID;
    }




    /*============HOME SETTINGS PANEL============*/
    $wp_customize->add_panel(
        'alaa_header_panel',
        array(
            'title' 			=> __( 'Header Sections', 'alaa' ),
            'priority'          => 30
        )
    );

    /*============HOME SETTINGS PANEL============*/
    $wp_customize->add_panel(
        'alaa_frontpage_panel',
        array(
            'title' 			=> __( 'Front Page Sections', 'alaa' ),
            'priority'          => 31
        )
    );


    /*============SLIDER IMAGES SECTION============*/

    //___Header type___//
    $wp_customize->add_section(
        'alaa_header_type',
        array(
            'title'         => __('Header type', 'alaa'),
            'priority'      => 10,
            'panel'         => 'alaa_header_panel',
            'description'   => __('You can select your header type from here. After that, continue below to the next two tabs (Header Slider and Header Image) and configure them.', 'alaa'),
        )
    );


    //Front page header
    $wp_customize->add_setting(
        'front_header_type',
        array(
            'default'           => 'image',
            'sanitize_callback' => 'alaa_sanitize_layout',
        )
    );
    $wp_customize->add_control(
        'front_header_type',
        array(
            'type'        => 'radio',
            'label'       => __('Front page header type', 'alaa'),
            'section'     => 'alaa_header_type',
            'description' => __('Select the header type for your front page', 'alaa'),
            'choices' => array(
                'slider'    => __('Full screen slider', 'alaa'),
                'image'     => __('Image', 'alaa'),
                'nothing'   => __('No header (only menu)', 'alaa')
            ),
        )
    );



    //Site header
    $wp_customize->add_setting(
        'site_header_type',
        array(
            'default'           => 'image',
            'sanitize_callback' => 'alaa_sanitize_layout',
        )
    );
    $wp_customize->add_control(
        'site_header_type',
        array(
            'type'        => 'radio',
            'label'       => __('Site header type', 'alaa'),
            'section'     => 'alaa_header_type',
            'description' => __('Select the header type for all pages except the front page', 'alaa'),
            'choices' => array(
                'image'     => __('Image', 'alaa'),
                'nothing'   => __('No header (only menu)', 'alaa')
            ),
        )
    );




// slider
    $wp_customize->add_section(
        'alaa_slider_sec',
        array(
            'title'			=> __( 'Slider Section', 'alaa' ),
            'panel'         => 'alaa_header_panel',
            'priority'		 => 10

        )
    );

    for ($i=1; $i < 4; $i++) {
        $wp_customize->add_setting(
            'alaa_slider_heading'.$i,
            array(
                'default'			=> '',
                'sanitize_callback' => 'alaa_sanitize_text'
            )
        );

        $wp_customize->add_control(
            new alaa_Customize_Heading($wp_customize, 'alaa_slider_heading'.$i,
                array(
                    'settings'		=> 'alaa_slider_heading'.$i,
                    'section'		=> 'alaa_slider_sec',
                    'label'			=> __( 'Slider ', 'alaa' ).$i,
                )
            )
        );

        $wp_customize->add_setting('alaa_slider_title'.$i, array(
                'default'			=> __('WordPress Themes','alaa'),
                'transport'         => 'postMessage',
                'sanitize_callback' => 'alaa_sanitize_text',
            )
        );

        $wp_customize->add_control('alaa_slider_title'.$i, array(
                'settings'		=> 'alaa_slider_title'.$i,
                'section'		=> 'alaa_slider_sec',
                'type'			=> 'text',
                'label'			=> __( 'Caption Title', 'alaa' )
            )
        );

        $wp_customize->add_setting('alaa_slider_subtitle'.$i, array(
                'default'			=> __('Create a nice website ','alaa'),
                'transport'         => 'postMessage',
                'sanitize_callback' => 'alaa_sanitize_text'
            )
        );

        $wp_customize->add_control('alaa_slider_subtitle'.$i, array(
                'settings'		=> 'alaa_slider_subtitle'.$i,
                'section'		=> 'alaa_slider_sec',
                'type'			=> 'textarea',
                'label'			=> __( 'Caption SubTitle', 'alaa' )
            )
        );

        $wp_customize->add_setting('alaa_slider_image'.$i, array(
                'default'			=> get_template_directory_uri().'/images/bg.jpg',
                'sanitize_callback' => 'esc_url_raw'
            )
        );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'alaa_slider_image'.$i,
                array(
                    'label'    => __( 'Slider Image', 'alaa' ),
                    'settings' => 'alaa_slider_image'.$i,
                    'section'  => 'alaa_slider_sec',
                    'description'   => __( 'Recommended Image Size: 1800X600px', 'alaa' )
                )
            )
        );

    }



/*
        //Header image size
        $wp_customize->add_setting(
            'header_bg_size',
            array(
                'default'           => 'cover',
                'sanitize_callback' => 'alaa_sanitize_bg_size',
            )
        );
        $wp_customize->add_control(
            'header_bg_size',
            array(
                'type' => 'radio',
                'priority'    => 10,
                'label' => __('Header background size', 'alaa'),
                'section' => 'header_image',
                'choices' => array(
                    'cover'     => __('Cover', 'alaa'),
                    'contain'   => __('Contain', 'alaa'),
                ),
            )
        );
*/



        //Header height
        $wp_customize->add_setting(
            'header_height',
            array(
                'sanitize_callback' => 'absint',
                'default'           => '400',
            )
        );
        $wp_customize->add_control( 'header_height', array(
            'type'        => 'number',
            'priority'    => 11,
            'section'     => 'header_image',
            'label'       => __('Header height [default: 400px]', 'alaa'),
            'input_attrs' => array(
                'min'   => 250,
                'max'   => 700,
                'step'  => 10,
            ),
        ) );


        // overlay
        $wp_customize->add_setting(
            'overlay',
            array(
                'default'			=> '.5',
                'sanitize_callback' => 'alaa_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'overlay',
            array(
                'settings'		=> 'overlay',
                'type'      => 'number',
                'section'   => 'colors_header',
                'priority'  => 24,
                'label'       => __('The overlay wight [default: .6]', 'alaa'),
                'description'       => __('Put number between 0 and 1 example .5 ', 'alaa'),
                'input_attrs' => array(
                    'min'   => 0,
                    'max'   => 1,
                    'step'  => .05,
                ),
            )
        );


/*Header Image Title*/
        $wp_customize->add_setting('alaa_image_title', array(
                'default'			=> __('WordPress Themes','alaa'),
                'sanitize_callback' => 'alaa_sanitize_text',
            )
        );

        $wp_customize->add_control('alaa_image_title', array(
                'settings'		=> 'alaa_image_title',
                'section'		=> 'header_image',
                'type'			=> 'text',
                'label'			=> __( 'Header Image Title', 'alaa' ),
                'priority'  => 20,

            )
        );


/*header Image Subtitle*/
        $wp_customize->add_setting('alaa_image_subtitle', array(
                'default'			=> __('Lorem ipsum dolor.','alaa'),
                'sanitize_callback' => 'alaa_sanitize_text',
            )
        );

        $wp_customize->add_control('alaa_image_subtitle', array(
                'settings'		=> 'alaa_image_subtitle',
                'section'		=> 'header_image',
                'type'			=> 'text',
                'label'			=> __( 'Header Image Subtitle', 'alaa' ),
                'priority'  => 20,

            )
        );


/* Header Image Paragraph*/
        $wp_customize->add_setting('alaa_image_info', array(
                'default'			=> __('Lorem ipsum dolor sit amet, mattis diam hac nunc et, sodales nulla amet hymenaeos diam, ac nulla eleifend posuere, tempor bibendum ante dolor gravida.','alaa'),
                'sanitize_callback' => 'alaa_sanitize_text',
            )
        );

        $wp_customize->add_control('alaa_image_info', array(
                'settings'		=> 'alaa_image_info',
                'section'		=> 'header_image',
                'type'			=> 'textarea',
                'label'			=> __( 'Header Image Paragraph', 'alaa' ),
                'priority'  => 20,

            )
        );




   $wp_customize->add_setting('alaa_image_btn', array(
                'default'			=> __('More','alaa'),
                'sanitize_callback' => 'alaa_sanitize_text',
            )
        );

        $wp_customize->add_control('alaa_image_btn', array(
                'settings'		=> 'alaa_image_btn',
                'section'		=> 'header_image',
                'type'			=> 'text',
                'label'			=> __( 'Header Image Bottom title', 'alaa' ),
                'priority'  => 22,

            )
        );






        //___Footer___//
        $wp_customize->add_section(
            'alaa_footer',
            array(
                'title'         => __('Footer', 'alaa'),
                'priority'      => 105,
            )
        );
        //Front page
        $wp_customize->add_setting(
            'footer_widget_areas',
            array(
                'default'           => '',
                'sanitize_callback' => 'alaa_sanitize_fw',
            )
        );
        $wp_customize->add_control(
            'footer_widget_areas',
            array(
                'type'        => 'radio',
                'label'       => __('Footer widget area', 'alaa'),
                'section'     => 'alaa_footer',
                'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'alaa'),
                'choices' => array(
                    '1'     => __('One', 'alaa'),
                    '2'     => __('Two', 'alaa'),
                    '3'     => __('Three', 'alaa'),
                    '4'     => __('Four', 'alaa')
                ),
            )
        );








        //___Colors___//
        $wp_customize->add_panel( 'alaa_colors_panel', array(
            'priority'       => 25,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __('Colors', 'alaa'),
        ) );



        $wp_customize->add_section(
            'colors_header',
            array(
                'title'         => __('Header', 'alaa'),
                'priority'      => 11,
                'panel'         => 'alaa_colors_panel',
            )
        );
        $wp_customize->add_section(
            'colors_sidebar',
            array(
                'title'         => __('Sidebar', 'alaa'),
                'priority'      => 12,
                'panel'         => 'alaa_colors_panel',
            )
        );
        $wp_customize->add_section(
            'colors_footer',
            array(
                'title'         => __('Footer', 'alaa'),
                'priority'      => 13,
                'panel'         => 'alaa_colors_panel',
            )
        );



        /*Primary color*/
        $wp_customize->add_setting(
            'primary_color',
            array(
                'default'           => '#0cc',
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'primary_color',
                array(
                    'label'         => __('Primary color', 'alaa'),
                    'section'       => 'colors',
                    'settings'      => 'primary_color',
                    'priority'      => 11
                )
            )
        );




        //Top infobar background
        $wp_customize->add_setting(
            'top_infobar_bg_color',
            array(
                'default'           => '#000000',
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'top_infobar_bg_color',
                array(
                    'label' => __('Top Info bar background', 'alaa'),
                    'section' => 'colors_header',
                    'priority' => 12
                )
            )
        );


        //Top infobar color
        $wp_customize->add_setting(
            'top_infobar_color',
            array(
                'default'           => '#333',
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'top_infobar_color',
                array(
                    'label' => __('Top Info bar color', 'alaa'),
                    'section' => 'colors_header',
                    'priority' => 12
                )
            )
        );



        //Top Menu background
        $wp_customize->add_setting(
            'menu_bg_color',
            array(
                'default'           => '#f1f1f1',
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'menu_bg_color',
                array(
                    'label' => __('Menu background', 'alaa'),
                    'section' => 'colors_header',
                    'priority' => 12
                )
            )
        );





        //Site title
        $wp_customize->add_setting(
            'site_title_color',
            array(
                'default'           => get_theme_mod( 'primary_color', '#00cccc' ),
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'alaa_sanitize_text',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'site_title_color',
                array(
                    'label' => __('Site title', 'alaa'),
                    'section' => 'colors_header',
                    'settings' => 'site_title_color',
                    'priority' => 13
                )
            )
        );



        //Site desc
        $wp_customize->add_setting(
            'site_desc_color',
            array(
                'default'           => '#555555',
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'site_desc_color',
                array(
                    'label' => __('Site description', 'alaa'),
                    'section' => 'colors_header',
                    'priority' => 14
                )
            )
        );




        //Top level menu items
        $wp_customize->add_setting(
            'top_items_color',
            array(
                'default'           => '#333333',
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'top_items_color',
                array(
                    'label' => __('Top level menu items', 'alaa'),
                    'section' => 'colors_header',
                    'priority' => 15
                )
            )
        );




	    //Logo Upload
	    $wp_customize->add_setting(
		    'site_logo',
		    array(
			    'default-image' => '',
			    'sanitize_callback' => 'esc_url_raw',
		    )
	    );
	    $wp_customize->add_control(
		    new WP_Customize_Image_Control(
			    $wp_customize,
			    'site_logo',
			    array(
				    'label'          => __( 'Upload your logo', 'alaa' ),
				    'type'           => 'image',
				    'section'        => 'title_tagline',
				    'priority'       => 1,
			    )
		    )
	    );



        //Slider text
        $wp_customize->add_setting(
            'slider_header',
            array(
                'default'           => '#f5f5f5',
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'slider_header',
                array(
                    'label' => __('Header(Slider/Image)title', 'alaa'),
                    'section' => 'colors_header',
                    'priority' => 18
                )
            )
        );


  $wp_customize->add_setting(
            'slider_text',
            array(
                'default'           => '#f5f5f5',
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'slider_text',
                array(
                    'label' => __('Header(Slider/Image)sub-title', 'alaa'),
                    'section' => 'colors_header',
                    'priority' => 20
                )
            )
        );

  $wp_customize->add_setting(
            'header_overlay',
            array(
                'default'           => '#000000',
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'header_overlay',
                array(
                    'label' => __('Header overlay color', 'alaa'),
                    'section' => 'colors_header',
                    'priority' => 22
                )
            )
        );



/*=======================================
 featured
=======================================*/
        $wp_customize->add_section(
            'alaa_featured_sec',
            array(
                'title'			=> __( 'Featured Section', 'alaa' ),
                'panel'         => 'alaa_frontpage_panel',
                'priority'		 => 10

            )
        );

    $wp_customize->add_setting(
        'alaa_enable_featured_link',
        array(
            'default'			=> 1,
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'alaa_enable_featured_link',
        array(
            'settings'		=> 'alaa_enable_featured_link',
            'section'		=> 'alaa_featured_sec',
            'label'			=> __( 'Enable Read More link ', 'alaa' ),
            'type'       	=> 'checkbox',
        )
    );




    $wp_customize->add_setting('alaa_featured_page_title', array(
            'default'			=> __('','alaa'),
            'sanitize_callback' => 'alaa_sanitize_text',
        )
    );

    $wp_customize->add_control('alaa_featured_page_title', array(
            'settings'		=> 'alaa_featured_page_title',
            'section'		=> 'alaa_featured_sec',
            'type'			=> 'text',
            'label'			=> __( 'Section Title', 'alaa' )
        )
    );

    $wp_customize->add_setting('alaa_featured_page_subtitle', array(
            'default'			=> __('Create a nice website ','alaa'),
            'sanitize_callback' => 'alaa_sanitize_text'
        )
    );

    $wp_customize->add_control('alaa_featured_page_subtitle', array(
            'settings'		=> 'alaa_featured_page_subtitle',
            'section'		=> 'alaa_featured_sec',
            'type'			=> 'textarea',
            'label'			=> __( 'Section SubTitle', 'alaa' )
        )
    );


    for( $i = 1; $i < 4; $i++ ){

        $wp_customize->add_setting(
            'alaa_featured_header'.$i,
            array(
                'default'			=> '',
                'sanitize_callback' => 'alaa_sanitize_text'
            )
        );

        $wp_customize->add_control(
            new alaa_Customize_Heading(
                $wp_customize,
                'alaa_featured_header'.$i,
                array(
                    'settings'		=> 'alaa_featured_header'.$i,
                    'section'		=> 'alaa_featured_sec',
                    'label'			=> __( 'Featured Page ', 'alaa' ).$i
                )
            )
        );






        $wp_customize->add_setting(
            'alaa_featured_page_icon'.$i,
            array(
                'default'			=> 'fa fa-bell',
                'sanitize_callback' => 'alaa_sanitize_text'
            )
        );

        $wp_customize->add_control(
            new alaa_Fontawesome_Icon_Chooser(
                $wp_customize,
                'alaa_featured_page_icon'.$i,
                array(
                    'settings'		=> 'alaa_featured_page_icon'.$i,
                    'section'		=> 'alaa_featured_sec',
                    'label'			=> __( 'FontAwesome Icon', 'alaa' ),
                    'type'			=> 'icon'
                )
            )
        );



        $wp_customize->add_setting('alaa_featured_title'.$i, array(
                'default'			=> __('','alaa'),
                'sanitize_callback' => 'alaa_sanitize_text',
            )
        );

        $wp_customize->add_control('alaa_featured_title'.$i, array(
                'settings'		=> 'alaa_featured_title'.$i,
                'section'		=> 'alaa_featured_sec',
                'type'			=> 'text',
                'label'			=> __( 'Title', 'alaa' )
            )
        );

        $wp_customize->add_setting('alaa_featured_subtitle'.$i, array(
                'default'			=> __('Create a nice website ','alaa'),
                'sanitize_callback' => 'alaa_sanitize_text'
            )
        );

        $wp_customize->add_control('alaa_featured_subtitle'.$i, array(
                'settings'		=> 'alaa_featured_subtitle'.$i,
                'section'		=> 'alaa_featured_sec',
                'type'			=> 'textarea',
                'label'			=> __( 'Write SubTitle', 'alaa' )
            )
        );



        $wp_customize->add_setting(
            'alaa_featured_page'.$i,
            array(
                'default'			=> '$alaa_page',
                'sanitize_callback' => 'absint'

            )
        );

        $wp_customize->add_control(
            'alaa_featured_page'.$i,
            array(
                'settings'		=> 'alaa_featured_page'.$i,
                'section'		=> 'alaa_featured_sec',
                'type'			=> 'dropdown-pages',
                'label'			=> __( 'Select a Page to link', 'alaa' )
            )
        );



    }



    /* ======================================================================
    add testimonails section
    =======================================================================*/
    $wp_customize->add_section(
        'alaa_testimonails_section',array(
        'title' => esc_html__('testimonails Options', 'alaa'),
        'panel' => 'alaa_frontpage_panel',
        'capability' => 'edit_theme_options',
        'priority' => 2,
    ));



    /* testimonails options */
    $wp_customize->add_setting(
        'alaa_enable_testimonails',
        array(
            'default' => '',
            'sanitize_callback' => 'alaa_sanitize_checkbox',

        )
    );

    $wp_customize->add_control(
        'alaa_enable_testimonails',
        array(
            'settings'		=> 'alaa_enable_testimonails',
            'section'		=> 'alaa_testimonails_section',
            'label'			=> __( 'Enable testimonails Section ', 'alaa' ),
            'type'       	=> 'checkbox',
        )
    );

    /* testimonails title*/
    $wp_customize->add_setting('alaa_testimonails_title', array(
            'default' =>  '',
            'sanitize_callback' => 'alaa_sanitize_text',
            'capability' => 'edit_theme_options',


        )
    );

    $wp_customize->add_control('testimonails_title', array(
            'settings'		=> 'alaa_testimonails_title',
            'section'		=> 'alaa_testimonails_section',
            'type'			=> 'text',
            'label'			=> __( 'Section Title', 'alaa' )
        )
    );

    /* testimonails subtitle*/
    $wp_customize->add_setting('alaa_testimonails_subtitle', array(
            'default' => '',
            'sanitize_callback' => 'alaa_sanitize_text',
            'capability' => 'edit_theme_options',



        )
    );

    $wp_customize->add_control('alaa_testimonails_subtitle', array(
            'settings'		=> 'alaa_testimonails_subtitle',
            'section'		=> 'alaa_testimonails_section',
            'type'			=> 'textarea',
            'label'			=> __( 'Section Sub Title', 'alaa' )
        )
    );


    for( $i = 1; $i < 8; $i++ ) {

        $wp_customize->add_setting(
            'alaa_testimonails_header'.$i,
            array(
                'default' => '',
                'sanitize_callback' => 'alaa_sanitize_text'
            )
        );

        $wp_customize->add_control(
            new alaa_Customize_Heading(
                $wp_customize,
                'alaa_testimonails_header'.$i,
                array(
                    'settings' => 'alaa_testimonails_header'.$i,
                    'section' => 'alaa_testimonails_section',
                    'label' => __('Testimonail ', 'alaa').$i
                )
            )
        );

        /* testimonail Picture */
        $wp_customize->add_setting('alaa_testimonail_image'.$i, array(
                'default'			=> '',
                'sanitize_callback' => 'esc_url_raw'


            )
        );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'alaa_testimonail_image'.$i,
                array(
                    'label'    => __( 'Image', 'alaa' ),
                    'settings' => 'alaa_testimonail_image'.$i,
                    'section'  => 'alaa_testimonails_section',
                    'description'   => __( 'Recommended Image Size: 150X150px', 'alaa' )
                )
            )
        );


        /* testimonail name*/
        $wp_customize->add_setting('alaa_testimonail_name'.$i, array(
                'default' =>  '',
                'sanitize_callback' => 'alaa_sanitize_text',


            )
        );

        $wp_customize->add_control('alaa_testimonail_name'.$i, array(
                'settings'		=> 'alaa_testimonail_name'.$i,
                'section'		=> 'alaa_testimonails_section',
                'type'			=> 'text',
                'label'			=> __( 'Name', 'alaa' )
            )
        );



        /* testimonail Designation*/
        $wp_customize->add_setting('alaa_testimonail_designation'.$i, array(
                'default' =>  '',
                'sanitize_callback' => 'alaa_sanitize_text',


            )
        );

        $wp_customize->add_control('alaa_testimonail_designation'.$i, array(
                'settings'		=> 'alaa_testimonail_designation'.$i,
                'section'		=> 'alaa_testimonails_section',
                'type'			=> 'text',
                'label'			=> __( 'Designation', 'alaa' )
            )
        );

        /* testimonail quote*/
        $wp_customize->add_setting('alaa_testimonail_quote'.$i, array(
                'default' =>  '',
                'sanitize_callback' => 'alaa_sanitize_text',
                'capability' => 'edit_theme_options',


            )
        );

        $wp_customize->add_control('alaa_testimonail_quote'.$i, array(
                'settings'		=> 'alaa_testimonail_quote'.$i,
                'section'		=> 'alaa_testimonails_section',
                'type'			=> 'textarea',
                'label'			=> __( 'Quote', 'alaa' )
            )
        );



    }



    /*====================================================================
     add projects section
    ======================================================================*/
    $wp_customize->add_section(
        'alaa_projects_section',array(
        'title' => esc_html__('projects Options', 'alaa'),
        'panel' => 'alaa_frontpage_panel',
        'priority' => 2,
    ));



    /* projects options */
    $wp_customize->add_setting(
        'alaa_enable_projects',
        array(
            'default' => '',
            'sanitize_callback' => 'alaa_sanitize_checkbox',

        )
    );

    $wp_customize->add_control(
        'alaa_enable_projects',
        array(
            'settings'		=> 'alaa_enable_projects',
            'section'		=> 'alaa_projects_section',
            'label'			=> __( 'Enable projects Section ', 'alaa' ),
            'type'       	=> 'checkbox',
        )
    );

    /* projects title*/
    $wp_customize->add_setting('alaa_projects_title', array(
            'default' =>  '',
            'sanitize_callback' => 'alaa_sanitize_text',
            'capability' => 'edit_theme_options',


        )
    );

    $wp_customize->add_control('projects_title', array(
            'settings'		=> 'alaa_projects_title',
            'section'		=> 'alaa_projects_section',
            'type'			=> 'text',
            'label'			=> __( 'Section Title', 'alaa' )
        )
    );

    /* projects subtitle*/
    $wp_customize->add_setting('alaa_projects_subtitle', array(
            'default' => '',
            'sanitize_callback' => 'alaa_sanitize_text',
            'capability' => 'edit_theme_options',



        )
    );

    $wp_customize->add_control('alaa_projects_subtitle', array(
            'settings'		=> 'alaa_projects_subtitle',
            'section'		=> 'alaa_projects_section',
            'type'			=> 'textarea',
            'label'			=> __( 'Section Sub Title', 'alaa' )
        )
    );


    for( $i = 1; $i < 8; $i++ ) {

        $wp_customize->add_setting(
            'alaa_projects_header' . $i,
            array(
                'default' => '',
                'sanitize_callback' => 'alaa_sanitize_text'
            )
        );

        $wp_customize->add_control(
            new alaa_Customize_Heading(
                $wp_customize,
                'alaa_projects_header' . $i,
                array(
                    'settings' => 'alaa_projects_header' . $i,
                    'section' => 'alaa_projects_section',
                    'label' => __('project ', 'alaa') . $i
                )
            )
        );


        /* project name*/
        $wp_customize->add_setting('alaa_project_name'.$i, array(
                'default' =>  '',
                'sanitize_callback' => 'alaa_sanitize_text',


            )
        );

        $wp_customize->add_control('alaa_project_name'.$i, array(
                'settings'		=> 'alaa_project_name'.$i,
                'section'		=> 'alaa_projects_section',
                'type'			=> 'text',
                'label'			=> __( 'Name', 'alaa' )
            )
        );



        /* project Picture */
        $wp_customize->add_setting('alaa_project_image'.$i, array(
                'default'			=> '',
                'sanitize_callback' => 'esc_url_raw'


            )
        );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'alaa_project_image'.$i,
                array(
                    'label'    => __( 'Image', 'alaa' ),
                    'settings' => 'alaa_project_image'.$i,
                    'section'  => 'alaa_projects_section',
                    'description'   => __( 'Recommended Image Size: 150X150px', 'alaa' )
                )
            )
        );

    }






}
add_action( 'customize_register', 'alaa_customize_register' );

if( class_exists( 'WP_Customize_Control' ) ):


class alaa_Customize_Heading extends WP_Customize_Control {

    public function render_content() {
        ?>

        <?php if ( !empty( $this->label ) ) : ?>
            <h3 class="alaa-section-title"><?php echo esc_html( $this->label ); ?></h3>
        <?php endif; ?>
    <?php }
}



/*Fontawesome_Icon*/
class alaa_Fontawesome_Icon_Chooser extends WP_Customize_Control{
    public $type = 'icon';

    public function render_content(){
        ?>
        <label>
                <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
                </span>

            <?php if($this->description){ ?>
                <span class="description customize-control-description">
	            	<?php echo wp_kses_post($this->description); ?>
	            </span>
            <?php } ?>

            <div class="alaa-selected-icon">
                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
                <span><i class="fa fa-angle-down"></i></span>
            </div>

            <ul class="alaa-icon-list clearfix">
                <?php
                $alaa_font_awesome_icon_array = alaa_font_awesome_icon_array();
                foreach ($alaa_font_awesome_icon_array as $alaa_font_awesome_icon) {
                    $icon_class = $this->value() == $alaa_font_awesome_icon ? 'icon-active' : '';
                    echo '<li class='.$icon_class.'><i class="'.$alaa_font_awesome_icon.'"></i></li>';
                }
                ?>
            </ul>
            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
        </label>
        <?php
    }
}

endif;


//Header type
function alaa_sanitize_layout( $input ) {
    $valid = array(
        'slider'    => __('Full screen slider', 'alaa'),
        'image'     => __('Image', 'alaa'),
        'nothing'   => __('Nothing (only menu)', 'alaa')
    );

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}




//Background size
function alaa_sanitize_bg_size( $input ) {
    $valid = array(
        'cover'     => __('Cover', 'alaa'),
        'contain'   => __('Contain', 'alaa'),
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}
//Footer widget areas
function alaa_sanitize_fw( $input ) {
    $valid = array(
        '1'     => __('One', 'alaa'),
        '2'     => __('Two', 'alaa'),
        '3'     => __('Three', 'alaa'),
        '4'     => __('Four', 'alaa')
    );
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}



//Checkboxes
function alaa_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}


/**
 * Render the site title for the selective refresh partial.
 */
if (! function_exists('alaa_customize_partial_blogname')){
    function alaa_customize_partial_blogname() {
        bloginfo( 'name' );
    }
}

/**
 * Render the site tagline for the selective refresh partial.
 */
if (! function_exists('alaa_customize_partial_blogdescription')){
    function alaa_customize_partial_blogdescription() {
        bloginfo( 'description' );
    }
}



//SANITIZATION FUNCTIONS
function alaa_sanitize_text( $input ) {
    return wp_kses_post( $input );
}


if( !function_exists( 'alaa_sanitize_checkbox' ) ) :
    function alaa_sanitize_checkbox( $input ) {
        return $input;
    }
endif;



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function alaa_customize_preview_js() {
    wp_enqueue_script( 'alaa_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'alaa_customize_preview_js' );



function alaa_customizer_script() {
    wp_enqueue_script( 'alaa-customizer-script', get_template_directory_uri() .'/inc/customizer/customizer-scripts.js', array('jquery'),'09092016', true  );
    wp_enqueue_script( 'alaa-customizer-chosen-script', get_template_directory_uri() .'/inc/js/chosen.jquery.js', array('jquery'),'1.4.1', true  );
    wp_enqueue_style( 'alaa-customizer-chosen-style', get_template_directory_uri() .'/inc/css/chosen.css');
    wp_enqueue_style( 'alaa-customizer-font-awesome', get_template_directory_uri() .'/css/font-awesome.min.css');
    wp_enqueue_style( 'alaa-customizer-style', get_template_directory_uri() .'/inc/customizer/customizer-style.css');
}
add_action( 'customize_controls_enqueue_scripts', 'alaa_customizer_script' );



