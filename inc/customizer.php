<?php
/**
 * Sinensis Theme Customizer
 *
 * @package Sinensis
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sinensis_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'sinensis_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sinensis_customize_preview_js() {
	wp_enqueue_script( 'sinensis_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sinensis_customize_preview_js' );

function sinensis_add_section( $wp_customize ){
	$wp_customize->add_setting( 'sinensis_header_capitalization' , array(
    'default' => 'false',
		'type' => 'theme_mod',
    'transport' => 'refresh',
	) );

	$wp_customize->add_setting( 'sinensis_header_show_description' , array(
		'default' => 'true',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	) );

	$wp_customize->add_section( 'sinensis_sinensis_options' , array(
    'title'      => __( 'Sinensis Options', 'sinensis' ),
    'priority'   => 10,
	) );

	$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'sinensis_header_capitalization',
        array(
            'label'          => __( 'Make the first character of the site\'s title bigger', 'sinensis' ),
            'section'        => 'sinensis_sinensis_options',
            'settings'       => 'sinensis_header_capitalization',
            'type'           => 'checkbox',
        )
    )
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
				$wp_customize,
				'sinensis_header_show_description',
				array(
						'label'          => __( 'Display website\'s description in the header', 'sinensis' ),
						'section'        => 'sinensis_sinensis_options',
						'settings'       => 'sinensis_header_show_description',
						'type'           => 'checkbox'
				)
		)
	);
}
add_action('customize_register', 'sinensis_add_section');
