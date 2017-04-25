<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 3/27/2017
 * Time: 7:27 AM
 */

/**
 * alaa skills Customizer.
 *
 * @package alaa
 */
if (! function_exists('alaa_skills_settings')) {
    function alaa_skills_settings( $wp_customize ) {

        $alaa_theme_options = alaa_options();

        /* skills options */

        $wp_customize->add_section(
            'alaa_skills_section',array(
            'title' => esc_html__('Skills Options', 'alaa'),
            'panel' => 'alaa_frontpage_panel',
            'capability' => 'edit_theme_options',
            'priority' => 2,
        ));




        $wp_customize->add_setting(
            'alaa[enable_skills]',
            array(
                'default' => esc_attr($alaa_theme_options['enable_skills']),
                'sanitize_callback' => 'alaa_sanitize_checkbox',
                'type'    => 'option',

            )
        );

        $wp_customize->add_control(
            'alaa[enable_skills]',
            array(
                'settings'		=> 'alaa[enable_skills]',
                'section'		=> 'alaa_skills_section',
                'label'			=> __( 'Enable Skills Sec ', 'alaa' ),
                'type'       	=> 'checkbox',
            )
        );

/* skills title*/
        $wp_customize->add_setting('alaa[skills_title]', array(
                'default' =>  esc_attr($alaa_theme_options['skills_title']),
                'sanitize_callback' => 'alaa_sanitize_text',
                'capability' => 'edit_theme_options',
                'type'    => 'option',


            )
        );

        $wp_customize->add_control('skills_title', array(
                'settings'		=> 'alaa[skills_title]',
                'section'		=> 'alaa_skills_section',
                'type'			=> 'text',
                'label'			=> __( 'Section Title', 'alaa' )
            )
        );

/* skills subtitle*/
        $wp_customize->add_setting('alaa[skills_subtitle]', array(
                'default' =>  esc_attr($alaa_theme_options['skills_subtitle']),
                'sanitize_callback' => 'alaa_sanitize_text',
                'capability' => 'edit_theme_options',
                'type'    => 'option',



            )
        );

        $wp_customize->add_control('alaa[skills_subtitle]', array(
                'settings'		=> 'alaa[skills_subtitle]',
                'section'		=> 'alaa_skills_section',
                'type'			=> 'textarea',
                'label'			=> __( 'Section Sub Title', 'alaa' )
            )
        );


        for( $i = 1; $i < 8; $i++ ) {

            $wp_customize->add_setting(
                'alaa_skills_header' . $i,
                array(
                    'default' => '',
                    'sanitize_callback' => 'alaa_sanitize_text'
                )
            );

            $wp_customize->add_control(
                new alaa_Customize_Heading(
                    $wp_customize,
                    'alaa_skills_header' . $i,
                    array(
                        'settings' => 'alaa_skills_header' . $i,
                        'section' => 'alaa_skills_section',
                        'label' => __('Skill ', 'alaa') . $i
                    )
                )
            );

        /* skill name*/
        $wp_customize->add_setting('alaa_skill_name'.$i, array(
                'default' =>  '',
                'sanitize_callback' => 'alaa_sanitize_text',
                'capability' => 'edit_theme_options',


            )
        );

        $wp_customize->add_control('alaa_skill_name'.$i, array(
                'settings'		=> 'alaa_skill_name'.$i,
                'section'		=> 'alaa_skills_section',
                'type'			=> 'text',
                'label'			=> __( 'Skill Name', 'alaa' )
            )
        );


/* skills Progress*/
        $wp_customize->add_setting('alaa_skill_progress'.$i, array(
                'default' =>  '',
                'sanitize_callback' => 'alaa_sanitize_text',
                'capability' => 'edit_theme_options',

            )
        );

        $wp_customize->add_control('alaa_skill_progress'.$i, array(
                'settings'		=> 'alaa_skill_progress'.$i,
                'section'		=> 'alaa_skills_section',
                'type'			=> 'number',
                'label'			=> __( 'Progress', 'alaa' ),
                                'description' => __('Enter number between 0 and 100'),
                'input_attrs' => array(
                    'min'   => 0,
                    'max'   => 100,
                    'step'  => 5,
                ),

            )
        );


        }


    }
    add_action( 'customize_register', 'alaa_skills_settings');
}
