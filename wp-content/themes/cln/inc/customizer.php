<?php
/**
 * cln Theme Customizer
 *
 * @package cln
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cln_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'cln_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'cln_customize_partial_blogdescription',
		) );
	}

	/**
	 * cln-theme Customizer settings
	 */
	$wp_customize->add_section( 'cln_theme_options', array(
	    'title'    => __( 'Theme Options', 'cln' ),
        'priority' => 10,
    ) );
	$wp_customize->add_setting( 'cln_home_category', array(
	    'default' => '',
    ) );
	$wp_customize->add_control( 'cln_home_category', array(
	    'label'   => __( 'Category on the Home Page', 'cln' ),
        'section' => 'cln_theme_options',
        'type'    => 'text',
    ) );
}
add_action( 'customize_register', 'cln_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cln_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cln_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cln_customize_preview_js() {
	wp_enqueue_script( 'cln-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'cln_customize_preview_js' );
