<?php
function brook_house_theme_files() {
	//wp_enqueue_script('jquery');
	wp_enqueue_script('google-map', '//maps.googleapis.com/maps/api/js?key=AIzaSyC9zI3I2TQYp5JJ2rksxJ2QV4vp8wjHCIE', NULL, microtime(), true);
	wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts.js'), NULL, microtime(), true);
	wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Parisienne|Poiret+One'); //Google Font
	//wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'); //Font Awesome
	//wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); //Font Awesome
	//wp_enqueue_style('university_main_styles',get_stylesheet_uri(), NULL, microtime()	); //style.css in theme route
	wp_enqueue_style('main-styling', get_theme_file_uri('/css/main.css'), NULL, microtime());
	wp_enqueue_style('mobile-styling', get_theme_file_uri('/css/mobile.css'), NULL, microtime());
}
add_action('wp_enqueue_scripts', 'brook_house_theme_files');

//Remove autp P tags
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

//Custom Post Types
function custom_post_types() {
	register_post_type('Exmouth', array(
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite' => array('slug' => 'exmouth'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Exmouth',
			'add_new_item' => 'Add New Post',
			'edit_item' => 'Edit Post',
			'all_items' => 'All Posts',
			'singular_name' => 'Posts'
		),
		'menu_icon' => 'dashicons-format-status'
	));		
}

 add_action('init', 'custom_post_types');

//removes header admin bar
function carly_ann_features() {
	add_theme_support('title-tag');
  	register_nav_menu('header-menu',__( 'Header Menu' ));
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'carly_ann_features');

function remove_admin_login_header() { //Removes Admin Header Bar
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');

show_admin_bar( false );

//Gmaps
function universityMapKey($api) {
	$api['key'] = 'AIzaSyC9zI3I2TQYp5JJ2rksxJ2QV4vp8wjHCIE';
	return $api;
}
add_filter('acf/fields/google_map/api', 'universityMapKey');