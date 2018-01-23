<?php


function all_function(){

// css and js add
	add_action('wp_enqueue_scripts','all_css_js');

	if (!function_exists('all_css_js')) {
		function all_css_js(){

		wp_enqueue_style('bootstrapmin',get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css');
		wp_enqueue_style('owl',get_stylesheet_directory_uri().'/assets/css/owl.carousel.min.css');
		wp_enqueue_style('icon',get_stylesheet_directory_uri().'/assets/css/themify-icons.css');
		wp_enqueue_style('customestyle',get_stylesheet_directory_uri().'/assets/css/style.css');
		wp_enqueue_style('style',get_stylesheet_uri());




		wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js');
		wp_enqueue_script('carousel',get_template_directory_uri().'/assets/js/owl.carousel.min.js');
		wp_enqueue_script('script',get_template_directory_uri().'/assets/js/script.js');
		wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery-3.2.1.min.js');
		}
	}







}



add_action('after_setup_theme','all_function');






























?>