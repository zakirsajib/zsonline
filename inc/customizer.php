<?php
/**
 * zsonline Theme Customizer.
 *
 * @package zsonline
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function zsonline_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	

	// Remove Existing sections
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');
	
	
	// Remove Existing panels
	$wp_customize->remove_panel('widgets');
	//$wp_customize->remove_panel('nav');
	
	
	// Remove Existing controls
	$wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('background_color');
	
	
	$wp_customize->add_setting( 'themename_skin', array(
        'default' => 'red',
        )
    );

    $wp_customize->add_control( 'themename_skin', array(
        'label'    => 'Skin',
        'section'  => 'colors',
        'settings' => 'themename_skin',
        'type'     => 'radio',
        'choices'  => array(
            'red' => 'Red',
            'blue'  => 'Blue',
			'green'  => 'Green',
			'yellow'  => 'Yellow',
            ),
        )
    );

	$wp_customize->add_panel( 'panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Footer', 'zsonline' ),
	    'description' => __( 'Description of what this panel does.', 'zsonline' ),
	) );

	$wp_customize->add_section( 'section_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Social Media URLs', 'zsonline' ),
	    'description' => '',
	    'panel' => 'panel_id',
	) );

	$wp_customize->add_setting( 'url_field_git', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_git', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'section_id',
	    'label' => __( 'GitHub URL Field', 'zsonline' ),
	    'description' => '',
	) );
	$wp_customize->add_setting( 'url_field_fb', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_fb', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'section_id',
	    'label' => __( 'Facebook URL Field', 'zsonline' ),
	    'description' => '',
	) );
	$wp_customize->add_setting( 'url_field_linkedin', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_linkedin', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'section_id',
	    'label' => __( 'LinkedIn URL Field', 'zsonline' ),
	    'description' => '',
	) );
	$wp_customize->add_setting( 'url_field_twt', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_twt', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'section_id',
	    'label' => __( 'Twitter URL Field', 'zsonline' ),
	    'description' => '',
	) );

	$wp_customize->add_section( 'section_copyright', array(
			'priority' => 10,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Copyright', 'zsonline' ),
			'description' => '',
			'panel' => 'panel_id',
	) );
	$wp_customize->add_setting( 'copyright_text', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'copyright_text', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_copyright',
	    'label' => __( 'Copyright Info Field', 'zsonline' ),
	    'description' => '',
	) );
	
	
	// Intro
	$wp_customize->add_panel( 'panel_intro', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Intro', 'zsonline' ),
	    'description' => __( 'Description of what this panel does.', 'zsonline' ),
	) );

	$wp_customize->add_section( 'section_intro', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Intro Section', 'zsonline' ),
	    'description' => '',
	    'panel' => 'panel_intro',
	) );
	// Heading One
	$wp_customize->add_setting( 'heading_one_field', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );

	$wp_customize->add_control( 'heading_one_field', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_intro',
	    'label' => __( 'Heading', 'zsonline' ),
	    'description' => '',
	) );
	// Heading Two
	$wp_customize->add_setting( 'heading_two_field', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );

	$wp_customize->add_control( 'heading_two_field', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_intro',
	    'label' => __( 'Sub Heading', 'zsonline' ),
	    'description' => '',
	) );
	// Short Descriptions
	$wp_customize->add_setting( 'short_line', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );

	$wp_customize->add_control( 'short_line', array(
	    'type' => 'textarea',
	    'priority' => 10,
	    'section' => 'section_intro',
	    'label' => __( 'Short Descriptions', 'zsonline' ),
	    'description' => '',
	) );
	// Button Label
	$wp_customize->add_setting( 'button_label_intro', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );

	$wp_customize->add_control( 'button_label_intro', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_intro',
	    'label' => __( 'Button Label', 'zsonline' ),
	    'description' => '',
	) );
	// Background Image
	$wp_customize->add_setting( 'background_img_intro', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => '',
		)
	);
	
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'background_img_intro',
	        array(
	            'label' => 'Background Image Upload',
	            'section' => 'section_intro',
	            'settings' => 'background_img_intro'
	        )
	    )
	);


}
add_action( 'customize_register', 'zsonline_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function zsonline_customize_preview_js() {
	wp_enqueue_script( 'zsonline_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'zsonline_customize_preview_js' );
