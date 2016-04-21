<?php
/**
 * zsonline functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zsonline
 */

if ( ! function_exists( 'zsonline_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zsonline_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on zsonline, use a find and replace
	 * to change 'zsonline' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'zsonline', get_template_directory() . '/languages' );


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'zsonline' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'zsonline_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'zsonline_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zsonline_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zsonline_content_width', 1170 );
}
add_action( 'after_setup_theme', 'zsonline_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zsonline_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'zsonline' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'zsonline_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zsonline_scripts() {
	wp_enqueue_style( 'zsonline-style', get_stylesheet_uri() );

	wp_enqueue_style( 'wpcore', get_template_directory_uri() . '/assets/wpcore/wpcore.css');

	wp_enqueue_style( 'Lato', '//fonts.googleapis.com/css?family=Lato:400,700');

    wp_enqueue_style( 'Raleway', '//fonts.googleapis.com/css?family=Raleway:400,700');

    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.min.css');

    wp_enqueue_style( 'icons-style', get_template_directory_uri() . '/assets/plugins/icons-mind/style.css');

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/plugins/fontawesome/css/font-awesome.min.css');


	wp_enqueue_style( 'jpreloader', get_template_directory_uri() . '/assets/plugins/jpreloader/css/jpreloader.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/plugins/animate-css/animate.min.css');
	wp_enqueue_style( 'magnificPopup', get_template_directory_uri() . '/assets/plugins/magnificPopup/magnific-popup.css');
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/plugins/flexSlider/flexslider.css');
	wp_enqueue_style( 'select2', get_template_directory_uri() . '/assets/plugins/select2/css/select2.css');

	wp_enqueue_style( 'morphext', get_template_directory_uri() . '/assets/plugins/morphext/morphext.css');

	wp_enqueue_style( 'Zakir', get_template_directory_uri() . '/assets/css/zakir.css');
	
	//wp_enqueue_style( 'main', get_template_directory_uri() . '/static/dist/css/main.css');

	//wp_enqueue_style( 'switch', get_template_directory_uri() . '/assets/css/switch-style.css');


	/* Enqueue the appropriate CSS based on which skin is selected via Theme Customizer */
	    $skin = get_theme_mod( 'themename_skin' );

	    if ( $skin == 'red' ) {
	        wp_enqueue_style( 'themename-red-skin', get_template_directory_uri() . '/assets/css/zakir.css' );
	    }
	    if ( $skin  == 'blue' ) {
	        wp_enqueue_style( 'themename-blue-skin', get_template_directory_uri() . '/assets/css/colors/blue.css' );
	    }
		if ( $skin  == 'green' ) {
	        wp_enqueue_style( 'themename-green-skin', get_template_directory_uri() . '/assets/css/colors/green.css' );
	    }
		if ( $skin  == 'yellow' ) {
	        wp_enqueue_style( 'themename-yellow-skin', get_template_directory_uri() . '/assets/css/colors/yellow.css' );
	    }
	    

	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), true );

	wp_enqueue_script( 'jpreloader', get_template_directory_uri() . '/assets/plugins/jpreloader/js/jpreloader.min.js', array('jquery'), true );
	wp_enqueue_script( 'detectmobilebrowser', get_template_directory_uri() . '/assets/plugins/detectmobilebrowser/detectmobilebrowser.js', array('jquery'), true );
	wp_enqueue_script( 'debouncer', get_template_directory_uri() . '/assets/plugins/debouncer/debouncer.js', array('jquery'), true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/plugins/easing/jquery.easing.min.js', array('jquery'), true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/plugins/sticky/jquery.sticky.js', array('jquery'), true );
	wp_enqueue_script( 'inview', get_template_directory_uri() . '/assets/plugins/inview/jquery.inview.min.js', array('jquery'), true );
	wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/assets/plugins/matchHeight/jquery.matchHeight-min.js', array('jquery'), true );
	wp_enqueue_script( 'magnificPopup', get_template_directory_uri() . '/assets/plugins/magnificPopup/jquery.magnific-popup.min.js', array('jquery'), true );
	wp_enqueue_script( 'flexSlider', get_template_directory_uri() . '/assets/plugins/flexSlider/jquery.flexslider-min.js', array('jquery'), true );
	wp_enqueue_script( 'countTo', get_template_directory_uri() . '/assets/plugins/countTo/jquery.countTo.js', array('jquery'), true );
	wp_enqueue_script( 'morphext', get_template_directory_uri() . '/assets/plugins/morphext/morphext.min.js', array('jquery'), true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/plugins/isotope/isotope.pkgd.min.js', array('jquery'), true );
	wp_enqueue_script( 'validation', get_template_directory_uri() . '/assets/plugins/validation/jquery.validate.min.js', array('jquery'), true );
	wp_enqueue_script( 'select2', get_template_directory_uri() . '/assets/plugins/select2/js/select2.full.min.js', array('jquery'), true );


    //wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), true );
    
    wp_enqueue_script( 'main', get_template_directory_uri() . '/static/dist/js/app.min.js', array('jquery'), '20151215', true );

/*
    wp_enqueue_script( 'text-rotator', get_template_directory_uri() . '/assets/js/text-rotator.js', array('jquery'), true );

    wp_enqueue_script( 'portfolio', get_template_directory_uri() . '/assets/js/filterable-portfolio.js"', array('jquery'), true );

	wp_enqueue_script( 'contact', get_template_directory_uri() . '/assets/js/contact.js', array('jquery'), true );

	wp_enqueue_script( 'animation', get_template_directory_uri() . '/assets/js/animation.js', array('jquery'), true );
*/


	wp_enqueue_script( 'zsonline-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'zsonline-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zsonline_scripts' );


/**
 * Add SVG capabilities
 */
function wpcontent_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );

function clean_header() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);

    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
}

add_action('wp_enqueue_scripts', 'clean_header');


function sendEmail(){
	if ( ! isset( $_POST['name_of_nonce_field'] ) || ! wp_verify_nonce( $_POST['name_of_nonce_field'], 'name_of_my_action' ) ) {
		print 'Sorry, your nonce did not verify.';
		exit;

	} else {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$services = $_POST['services'];
		$project_class = $_POST['project_class'];
		$subject_label = $_POST['subject'];

		$EmailTo = "zakirsajib@gmail.com";
		$Subject = "Email from " . $name;

		$headers = array('Content-Type: text/html; charset=UTF-8');


		// prepare email body text
		$Body = "";
		$Body .= "Name: ";
		$Body .= $name;
		$Body .= "<br/>";
		$Body .= "Email: ";
		$Body .= $email;
		$Body .= "<br/>";
		$Body .= "Services: ";
		foreach ($services as $service){
			$Body .= $service;
			$Body .= ", ";
		}
		$Body .= "<br/>";
		$Body .= "Project: ";
		$Body .= $project_class;
		$Body .= "<br/>";
		$Body .= "Subject: ";
		$Body .= $subject_label;
		$Body .= "<br/>";
		$Body .= "Message: ";
		$Body .= $message;
		$Body .= "<br/>";

		if(wp_mail($EmailTo, $Subject, $Body, $headers)){
			return true;
		};

    }

    wp_die();
}

add_action('wp_ajax_sendEmail', 'sendEmail');
add_action('wp_ajax_nopriv_sendEmail', 'sendEmail'); // not really needed

add_filter( 'wp_mail_content_type', 'set_content_type' );
function set_content_type( $content_type ) {
	return 'text/html';
}

add_filter( 'wp_mail_from', 'custom_wp_mail_from' );
function custom_wp_mail_from( $original_email_address ) {
	//Make sure the email is from the same domain
	//as your website to avoid being marked as spam.
	return 'zakirsajib@zakirsajibonline.com';
}
add_filter( 'wp_mail_from_name', 'custom_wp_mail_from_name' );
function custom_wp_mail_from_name( $original_email_from ) {
	return 'Zakir Sajib Online';
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/custom-css.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
