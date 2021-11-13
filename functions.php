<?php

function load_stylesheets()
{

	wp_register_style( 'Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('Bootstrap');

	wp_register_style( 'Poppins-Regular', get_template_directory_uri() . '/font/Poppins-Regular.ttf', array(), null );
	wp_enqueue_style('Poppins-Regular');

	wp_register_style( 'Poppins-SemiBold', get_template_directory_uri() . '/font/Poppins-SemiBold.ttf', array(), null );
	wp_enqueue_style('Poppins-SemiBold');

	wp_register_style( 'Owl_Carouselcss', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), false, 'all' );
	wp_enqueue_style('Owl_Carouselcss');

	wp_register_style( 'Owl_Theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), false, 'all' );
	wp_enqueue_style('Owl_Theme');

	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1.0, 'all');
	wp_enqueue_style('style');


	wp_register_style('main_style', get_template_directory_uri() . '/testcss/main.css', array(), 1.0, 'all');
	wp_enqueue_style('main_style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{
	wp_deregister_script('jquery');

	wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', null, null, true );
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');


function loadjs()
{
	wp_register_script( 'Bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', null, null, true );
	wp_enqueue_script('Bootstrapjs');

	wp_register_script( 'Owl_Carouseljs', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', null, null, true );
	wp_enqueue_script('Owl_Carouseljs');

	wp_register_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', null, null, true );
	wp_enqueue_script('gsap');

	wp_register_script( 'Font_Awesomejs', 'https://kit.fontawesome.com/a32cf9c921.js', null, null, false );
	wp_enqueue_script('Font_Awesomejs');

	wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js', null, 1.0, true);
	wp_enqueue_script('mainjs');

    

}
add_action('wp_enqueue_scripts', 'loadjs');


add_theme_support('menus');

add_theme_support( 'custom-logo' );

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

add_theme_support( 'automatic-feed-links' );

add_image_size('imgx400', 400, 400, true);
add_image_size('img-post', 450, 250, true);


register_nav_menus(

	array(

		'header-menu' => __('Header Menu', 'theme'),

		'footer-menu' => __('Footer Menu', 'theme'),

		'social-menu' => __('Social Menu', 'theme'),

	)

);

// register bootstrap navbar class in wp

/**

 * Register Custom Navigation Walker

 */

function register_navwalker(){

	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

}

add_action( 'after_setup_theme', 'register_navwalker' );
