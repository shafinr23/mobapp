<?php


function all_function(){
//theme_support
add_theme_support( 'post-thumbnails' ); 

// css and js add
	add_action('wp_enqueue_scripts','all_css_js');

	if (!function_exists('all_css_js')) {
		function all_css_js(){

		wp_enqueue_style('bootstrapmin',get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css');
		wp_enqueue_style('owl',get_stylesheet_directory_uri().'/assets/css/owl.carousel.min.css');
		wp_enqueue_style('icon',get_stylesheet_directory_uri().'/assets/css/themify-icons.css');
		wp_enqueue_style('customestyle',get_stylesheet_directory_uri().'/assets/css/style.css');
		wp_enqueue_style('style',get_stylesheet_uri());




		wp_enqueue_script('js',get_template_directory_uri().'/assets/js/jquery-3.2.1.min.js');
		wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js');
		wp_enqueue_script('carousel',get_template_directory_uri().'/assets/js/owl.carousel.min.js');
		wp_enqueue_script('script',get_template_directory_uri().'/assets/js/script.js');
		
		}
	}


// add menu

			add_action('init','my_menu');

		if(!function_exists('my_menu')){
			function my_menu(){
				register_nav_menu('main','main manu');
			}
		}
// cusntome post types 
		// for featuers
		add_action('init','featuers');

function featuers(){
	register_post_type('featuers', array(
		'labels' => array(
			'name' 				=> __('all featuers','textdomain'),
			'singular_name'		=> __('featuer','textdomain'),
			'add_new'			=>	__('add featuers','textdomain'),
			'add_new_item'		=>	__('add new featuers','textdomain'),
			'search_items'		=>	__('search featuers','textdomain'),
			'edit_item'			=>	__('edit featuers','textdomain'),
			'all_items'			=>	__(' show all featuers','textdomain'),
			'view_item'			=>	__('view featuers','textdomain'),
			'not_found'			=>	__('no featuers founder-offer','textdomain'),
			),
		'public'				=> true ,
		'publicly_queryable'	=>	true ,
		'show_url'				=>	true,
		'show_in_menu'			=>	true,
		'menu_icon'				=> 'dashicons-slides',
		'capability_type'		=> 'post',
		'supports'				=>	array('title','editor'),
		));
}

// for appS
		add_action('init','apps');

function apps(){
	register_post_type('apps', array(
		'labels' => array(
			'name' 				=> __('all appS','textdomain'),
			'singular_name'		=> __('featuer','textdomain'),
			'add_new'			=>	__('add appS','textdomain'),
			'add_new_item'		=>	__('add new appS','textdomain'),
			'search_items'		=>	__('search appS','textdomain'),
			'edit_item'			=>	__('edit appS','textdomain'),
			'all_items'			=>	__(' show all appS','textdomain'),
			'view_item'			=>	__('view appS','textdomain'),
			'not_found'			=>	__('no appS founder-offer','textdomain'),
			),
		'public'				=> true ,
		'publicly_queryable'	=>	true ,
		'show_url'				=>	true,
		'show_in_menu'			=>	true,
		'menu_icon'				=> 'dashicons-editor-ul',
		'capability_type'		=> 'post',
		'supports'				=>	array('title','editor','thumbnail'),
		));
}
	// 


// for setps
		add_action('init','steps');

function steps(){
	register_post_type('steps', array(
		'labels' => array(
			'name' 				=> __('all steps','textdomain'),
			'singular_name'		=> __('featuer','textdomain'),
			'add_new'			=>	__('add steps','textdomain'),
			'add_new_item'		=>	__('add new steps','textdomain'),
			'search_items'		=>	__('search steps','textdomain'),
			'edit_item'			=>	__('edit steps','textdomain'),
			'all_items'			=>	__(' show all steps','textdomain'),
			'view_item'			=>	__('view steps','textdomain'),
			'not_found'			=>	__('no steps founder-offer','textdomain'),
			),
		'public'				=> true ,
		'publicly_queryable'	=>	true ,
		'show_url'				=>	true,
		'show_in_menu'			=>	true,
		'menu_icon'				=> 'dashicons-editor-ul',
		'capability_type'		=> 'post',
		'supports'				=>	array('title','editor',),
		));
}


// customer
		add_action('init','cliant');

function cliant(){
	register_post_type('cliant', array(
		'labels' => array(
			'name' 				=> __('all cliant','textdomain'),
			'singular_name'		=> __('featuer','textdomain'),
			'add_new'			=>	__('add cliant','textdomain'),
			'add_new_item'		=>	__('add new cliant','textdomain'),
			'search_items'		=>	__('search cliant','textdomain'),
			'edit_item'			=>	__('edit cliant','textdomain'),
			'all_items'			=>	__(' show all cliant','textdomain'),
			'view_item'			=>	__('view cliant','textdomain'),
			'not_found'			=>	__('no cliant founder-offer','textdomain'),
			),
		'public'				=> true ,
		'publicly_queryable'	=>	true ,
		'show_url'				=>	true,
		'show_in_menu'			=>	true,
		'menu_icon'				=> 'dashicons-universal-access-alt',
		'capability_type'		=> 'post',
		'supports'				=>	array('title','editor','thumbnail'),
		));
}
// customer
		add_action('init','GALLERY');

function GALLERY(){
	register_post_type('GALLERY', array(
		'labels' => array(
			'name' 				=> __('all GALLERY','textdomain'),
			'singular_name'		=> __('featuer','textdomain'),
			'add_new'			=>	__('add GALLERY','textdomain'),
			'add_new_item'		=>	__('add new GALLERY','textdomain'),
			'search_items'		=>	__('search GALLERY','textdomain'),
			'edit_item'			=>	__('edit GALLERY','textdomain'),
			'all_items'			=>	__(' show all GALLERY','textdomain'),
			'view_item'			=>	__('view GALLERY','textdomain'),
			'not_found'			=>	__('no GALLERY founder-offer','textdomain'),
			),
		'public'				=> true ,
		'publicly_queryable'	=>	true ,
		'show_url'				=>	true,
		'show_in_menu'			=>	true,
		'menu_icon'				=> 'dashicons-format-gallery',
		'capability_type'		=> 'post',
		'supports'				=>	array('title','thumbnail'),
		));
}

// prrice
		add_action('init','price');

function price(){
	register_post_type('price', array(
		'labels' => array(
			'name' 				=> __('all price','textdomain'),
			'singular_name'		=> __('featuer','textdomain'),
			'add_new'			=>	__('add price','textdomain'),
			'add_new_item'		=>	__('add new price','textdomain'),
			'search_items'		=>	__('search price','textdomain'),
			'edit_item'			=>	__('edit price','textdomain'),
			'all_items'			=>	__(' show all price','textdomain'),
			'view_item'			=>	__('view price','textdomain'),
			'not_found'			=>	__('no price founder-offer','textdomain'),
			),
		'public'				=> true ,
		'publicly_queryable'	=>	true ,
		'show_url'				=>	true,
		'show_in_menu'			=>	true,
		'menu_icon'				=> 'dashicons-format-gallery',
		'capability_type'		=> 'post',
		'supports'				=>	array('title','editor'),
		));
}










// inc
	// cmb2
	require_once('inc/cmb/custome.php');
	require_once('inc/cmb/init.php');
	// redux
if ( !class_exists( 'redux-framework' ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/sample/function-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/redux-framework/sample/function-config.php' );
}






}



add_action('after_setup_theme','all_function');




























?>