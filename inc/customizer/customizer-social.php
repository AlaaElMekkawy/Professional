<?php

/**
 * alaa Social Media Customizer.
 *
 * @package alaa
 */
if (! function_exists('alaa_social_settings')) {
    function alaa_social_settings( $wp_customize ) {

            $alaa_theme_options = alaa_options();

            /* Social options */

            $wp_customize->add_section(
                'social_section',array(
                    'title' => esc_html__('Social Options', 'alaa'),
                    'panel' => 'alaa_header_panel',
                    'capability' => 'edit_theme_options',
                    'priority' => 2,
            ));

            $wp_customize->add_setting('alaa[social_checkbox_header]',
                array(
                    'type'    => 'option',
                    'default' => esc_attr($alaa_theme_options['social_checkbox_header']),
                    'sanitize_callback' => 'alaa_sanitize_checkbox',
                    )
                );

            $wp_customize->add_control('alaa[social_checkbox_header]',
                array(
                    'type'    => 'checkbox',
                    'label'   => esc_html__('Show Social Media Icons In Header ? ','alaa'),
                    'section' => 'social_section',
                    )
                );

            $wp_customize->add_setting('alaa[social_checkbox_footer]',
                array(
                    'type'    => 'option',
                    'default' => esc_attr($alaa_theme_options['social_checkbox_footer']),
                    'sanitize_callback' => 'alaa_sanitize_checkbox',
                    )
                );

            $wp_customize->add_control('alaa[social_checkbox_footer]',
                array(
                    'type'    => 'checkbox',
                    'label'   => esc_html__('Show Social  Icons In Footer ? ','alaa'),
                    'section' => 'social_section',
                    )
                );



            $wp_customize->add_setting(
            'alaa[fb_link]',
                array(
                'default' => esc_attr($alaa_theme_options['fb_link']),
                'type' => 'option',
                'sanitize_callback' => 'esc_url_raw',
                'capability' => 'edit_theme_options',
                )
            );

            $wp_customize->add_control( 'fb_link', array(
                'label'        => esc_html__( 'Facebook',  'alaa' ),
                'section'    => 'social_section',
                'settings'   => 'alaa[fb_link]',
            ) );

        $wp_customize->add_setting(
            'alaa[twitter_link]',
            array(
                'default' => esc_attr($alaa_theme_options['twitter_link']),
                'type' => 'option',
                'sanitize_callback' => 'esc_url_raw',
                'capability' => 'edit_theme_options',
            )
        );

        $wp_customize->add_control( 'twitter_link', array(
            'label'        => esc_html__('Twitter',  'alaa' ),
            'section'    => 'social_section',
            'settings'   => 'alaa[twitter_link]',
        ) );


            $wp_customize->add_setting(
            'alaa[linkedin_link]',
                array(
                'default' => esc_attr($alaa_theme_options['linkedin_link']),
                'type' => 'option',
                'sanitize_callback' => 'esc_url_raw',
                'capability' => 'edit_theme_options',
                )
            );

            $wp_customize->add_control( 'linkedin_link', array(
                'label'        => esc_html__( 'LinkedIn',  'alaa' ),
                'section'    => 'social_section',
                'settings'   => 'alaa[linkedin_link]',
            ) );

            $wp_customize->add_setting(
            'alaa[gplus]',
                array(
                'default' => esc_attr($alaa_theme_options['gplus']),
                'type' => 'option',
                'sanitize_callback' => 'esc_url_raw',
                'capability' => 'edit_theme_options',
                )
            );
                $wp_customize->add_control( 'gplus', array(
                'label'        => esc_html__( 'Google+',  'alaa' ),
                'section'    => 'social_section',
                'settings'   => 'alaa[gplus]',
            ) );

            $wp_customize->add_setting(
            'alaa[tumblr]',
                array(
                'default' => esc_attr($alaa_theme_options['tumblr']),
                'type' => 'option',
                'sanitize_callback' => 'esc_url_raw',
                'capability' => 'edit_theme_options',
                )
            );
                $wp_customize->add_control( 'tumblr', array(
                'label'        => esc_html__( 'Tumblr',  'alaa' ),
                'section'    => 'social_section',
                'settings'   => 'alaa[tumblr]',
            ) );

            $wp_customize->add_setting(
            'alaa[instagram]',
                array(
                'default' => esc_attr($alaa_theme_options['instagram']),
                'type' => 'option',
                'sanitize_callback' => 'esc_url_raw',
                'capability' => 'edit_theme_options',
                )
            );
                $wp_customize->add_control( 'instagram', array(
                'label'        => esc_html__( 'Instagram',  'alaa' ),
                'section'    => 'social_section',
                'settings'   => 'alaa[instagram]',
            ) );

            $wp_customize->add_setting(
            'alaa[pinterest]',
                array(
                'default' => esc_attr($alaa_theme_options['pinterest']),
                'type' => 'option',
                'sanitize_callback' => 'esc_url_raw',
                'capability' => 'edit_theme_options',
                )
            );
                $wp_customize->add_control( 'pinterest', array(
                'label'        => esc_html__( 'Pinterest',  'alaa' ),
                'section'    => 'social_section',
                'settings'   => 'alaa[pinterest]',
            ) );






        $wp_customize->add_setting('alaa[contact_checkbox_header]',
            array(
                'type'    => 'option',
                'default' => esc_attr($alaa_theme_options['contact_checkbox_header']),
                'sanitize_callback' => 'alaa_sanitize_checkbox',
            )
        );

        $wp_customize->add_control('alaa[contact_checkbox_header]',
            array(
                'type'    => 'checkbox',
                'label'   => esc_html__('Show contact Icons In Header ? ','alaa'),
                'section' => 'social_section',
            )
        );

   $wp_customize->add_setting('alaa[contact_checkbox_footer]',
            array(
                'type'    => 'option',
                'default' => esc_attr($alaa_theme_options['contact_checkbox_footer']),
                'sanitize_callback' => 'alaa_sanitize_checkbox',
            )
        );

        $wp_customize->add_control('alaa[contact_checkbox_footer]',
            array(
                'type'    => 'checkbox',
                'label'   => esc_html__('Show contact Icons In footer ? ','alaa'),
                'section' => 'social_section',
            )
        );



        $wp_customize->add_setting(
            'alaa[email_id]',
            array(
                'default' => esc_attr($alaa_theme_options['email_id']),
                'type' => 'option',
                'sanitize_callback' => 'esc_attr',
                'capability' => 'edit_theme_options',
            )
        );


        $wp_customize->add_control( 'email_id', array(
            'label'        => esc_html__('Email ID',  'alaa' ),
            'section'    => 'social_section',
            'settings'   => 'alaa[email_id]',
        ) );

        $wp_customize->add_setting(
            'alaa[phone_number]',
            array(
                'default' => esc_attr($alaa_theme_options['phone_number']),
                'type' => 'option',
                'sanitize_callback' => 'esc_attr',
                'capability' => 'edit_theme_options',
            )
        );

        $wp_customize->add_control( 'phone_number', array(
            'label'        => esc_html__( 'Phone Number',  'alaa' ),
            'section'    => 'social_section',
            'settings'   => 'alaa[phone_number]',
        ) );



    }
    add_action( 'customize_register', 'alaa_social_settings');
}