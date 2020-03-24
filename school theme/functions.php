<?php
	/*
	**
	**
	**
	**
	*/




function load_stylesheets()
{	

	wp_enqueue_style('boostrap',get_template_directory_uri(). '/css/boostrap.min.css');
	wp_enqueue_style('style',get_template_directory_uri(). '/main.css');
	wp_enqueue_style('404',get_template_directory_uri(). '/404.css');

}
add_action('wp_enqueue_scripts','load_stylesheets');







function loadjs()
{
	wp_deregister_script('jquery');
	wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),false,'',true);
	wp_enqueue_script('jquery');

	wp_enqueue_script('boostrap-js',get_template_directory_uri().'/js/boostrap.min.js',array('jquery'),false,true);
	
	wp_enqueue_script('costomjs',get_template_directory_uri().'/js/scripts.js',array(),false,true);
	

}
add_action('wp_enqueue_scripts','loadjs');



function register_menu(){

	register_nav_menus(array(

		'boostrap-menu'=>'navigation menu',
		'footer-menu'=>'footer bar'

	));
}
add_action('init','register_menu');

function boostrab_nav_menu(){

	wp_nav_menu(
		array(
			'theme_location'=>'boostrap-menu',
			'menu_class'=>' navbar-nav mr-auto'


		));

}





