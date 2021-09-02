<?php
include_once 'inc/bootstrap-navwalker.php';
include_once 'inc/svg-support.php';
include_once 'inc/postview-count.php';
include_once 'inc/custom-comments.php';
include_once 'inc/sidebar-register.php';
include_once 'inc/tgm-config.php';

define( 'VERSION', wp_get_theme()->get( 'Version' ) );
if ( ! function_exists( 'jblog_theme_setup' ) ) :
	function jblog_theme_setup() {
		//load textdomain
		load_theme_textdomain( 'jblog', get_template_directory() . '/languages' );
		//feed
		add_theme_support( 'automatic-feed-links' );
		//title
		add_theme_support( 'title-tag' );
		//post thumbnails
		add_theme_support( 'post-thumbnails' );
		//register nav menus
		register_nav_menus( array(
			'primary_menu' => __( 'Primary Menu', 'jblog' ),
			'footer_menu'  => __( 'Footer Menu', 'jblog' ),
		) );

		//Image Size
		//Single Post Thumbnails
		add_image_size('post-image', 1024, 477, false );

		//html5 support
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
		//post formate
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'gallery',
			'video',
			'audio',
			'link',
			'quote',
			'status'
		) );
		//custom background
		add_theme_support(
			'custom-background',
			apply_filters(
				'theme_name_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		//widgets refresh
		add_theme_support( 'customize-selective-refresh-widgets' );
		//logo
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'jblog_theme_setup' );


/* Enqueue scripts and styles.*/
function jblog_assets() {
	//css
	wp_enqueue_style( 'Inter-google-font', '//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap' );
	wp_enqueue_style( 'Spartan-google-font', '//fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&amp;display=swap' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), VERSION );
	wp_enqueue_style( 'LineIcons-css', get_template_directory_uri() . '/assets/css/LineIcons.2.0.css', array(), VERSION );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), VERSION );
	wp_enqueue_style( 'tiny-slider-css', get_template_directory_uri() . '/assets/css/tiny-slider.css', array(), VERSION );
	wp_enqueue_style( 'glightbox-css', get_template_directory_uri() . '/assets/css/glightbox.min.css', array(), VERSION );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', array(), VERSION );
	wp_enqueue_style( 'style-css', get_stylesheet_uri(), array(), VERSION );
	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	//js
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), VERSION, true );
	wp_enqueue_script( 'wow-min-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), VERSION, true );
	wp_enqueue_script( 'tiny-slider-js', get_template_directory_uri() . '/assets/js/tiny-slider.js', array(), VERSION, true );
	wp_enqueue_script( 'glightbox-js', get_template_directory_uri() . '/assets/js/glightbox.min.js', array(), VERSION, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'jblog_assets' );

//Comment Form Field Bottom
function jblog_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

add_filter( 'comment_form_fields', 'jblog_move_comment_field_to_bottom');

//Title Seprator
function custom_document_title_separator( $sep ) {
	return '||';
}
add_filter( 'document_title_separator', 'custom_document_title_separator', 10, 1 );