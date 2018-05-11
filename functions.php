<?php
function brook_house_theme_files() {
	//wp_enqueue_script('jquery');
	wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts.js'), NULL, 'microtime()', true);
	//wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Asap:400,600|Zeyada'); //Google Font
	//wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'); //Font Awesome
	//wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); //Font Awesome
	//wp_enqueue_style('university_main_styles',get_stylesheet_uri(), NULL, microtime()	); //style.css in theme route
	wp_enqueue_style('main-styling', get_theme_file_uri('/css/main.css'), NULL, microtime());
	wp_enqueue_style('mobile-styling', get_theme_file_uri('/css/mobile.css'), NULL, microtime());
}
add_action('wp_enqueue_scripts', 'brook_house_theme_files');