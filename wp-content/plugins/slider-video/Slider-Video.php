<?php
	/*
		Plugin name: Video Slider Rich
		Plugin URI: http://www.rich-web.org/wp-video-slider
		Description: Slider plugin is fully responsive. Your videos with our slider effects will be perfectly.
		Version: 1.4.6
		Author: Rich-Web
		Author URI: http://www.rich-web.org
		License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
	*/

ini_set('max_execution_time', 0); 
ini_set('memory_limit','-1');
add_action('widgets_init', 'Rich_Web_Video_Slider_Widget');
function Rich_Web_Video_Slider_Widget()
{
	register_widget('Rich_Web_Video_Slider');
}
require_once(dirname(__FILE__) . '/Rich-Web-Video-Slider-Widget.php');
require_once(dirname(__FILE__) . '/Rich-Web-Video-Slider-Ajax.php');
require_once(dirname(__FILE__) . '/Rich-Web-Video-Slider-Shortcode.php');
add_action('wp_enqueue_scripts','Rich_Web_Video_Slider_Style');
function Rich_Web_Video_Slider_Style(){
	wp_register_style('Rich_Web_Video_Slider', plugins_url('/Style/Rich-Web-Video-Slider-Widget.css',__FILE__));
	wp_enqueue_style('Rich_Web_Video_Slider');
	wp_register_script('Rich_Web_Video_Slider',plugins_url('/Scripts/Rich-Web-Video-Slider-Widget.js',__FILE__),array('jquery','jquery-ui-core'));
	wp_localize_script('Rich_Web_Video_Slider', 'object', array('ajaxurl' => admin_url('admin-ajax.php')));
	wp_enqueue_script('Rich_Web_Video_Slider');
	wp_enqueue_script('Rich_Web_Video_Slider2');
	wp_enqueue_script("jquery");
	wp_register_style('fontawesomeSl-css', plugins_url('/Style/richwebicons.css', __FILE__));
	wp_enqueue_style('fontawesomeSl-css');
}
add_action("admin_menu", 'Rich_Web_Video_Slider_Admin_Menu' );
function Rich_Web_Video_Slider_Admin_Menu()
{
	$complete_url = wp_nonce_url( '', 'edit-menu_', 'Rich_Web_VSlider_Nonce' );
	add_menu_page('Rich-Web Video Slider Admin','Video Slider','manage_options','Rich-Web Video Slider Admin','Manage_Rich_Web_Video_Slider_Admin',plugins_url('/Images/admin.png',__FILE__));
	add_submenu_page('Rich-Web Video Slider Admin', 'Rich-Web Video Slider Admin', 'Slider Manager', 'manage_options', 'Rich-Web Video Slider Admin', 'Manage_Rich_Web_Video_Slider_Admin');
	add_submenu_page('Rich-Web Video Slider Admin', 'Rich-Web Video Slider General', 'Slider Options', 'manage_options', 'Rich-Web Video Slider General', 'Manage_Rich_Web_Video_Slider_General');
	add_submenu_page('Rich-Web Video Slider Admin', 'Rich-Web Video Slider Products', 'Our Products', 'manage_options', 'Rich-Web Video Slider Products', 'Manage_Rich_Web_Video_Slider_Products');
}
function Manage_Rich_Web_Video_Slider_Admin()
{
	require_once('Rich-Web-Video-Slider-Admin.php');
	require_once('Style/Rich-Web-Video-Slider-Admin.css.php');
}
function Manage_Rich_Web_Video_Slider_General()
{
	require_once('Rich-Web-Video-Slider-General.php');
	require_once('Scripts/Rich-Web-Video-Slider-General.js.php');
	require_once('Style/Rich-Web-Video-Slider-General.css.php');
}
function Manage_Rich_Web_Video_Slider_Products()
{
	require_once(dirname(__FILE__) . '/Rich-Web-Products.php');
}
add_action('admin_init', 'Rich_Web_Video_Slider_Admin_Style');
function Rich_Web_Video_Slider_Admin_Style()
{
	wp_enqueue_style('wp-color-picker');
	wp_enqueue_script('wp-color-picker');
	wp_register_script('Rich_Web_Video_Slider', plugins_url('Scripts/Rich-Web-Video-Slider-Admin.js',__FILE__),array('jquery','jquery-ui-core'));
	wp_localize_script('Rich_Web_Video_Slider', 'object', array('ajaxurl' => admin_url( 'admin-ajax.php' )));
	wp_enqueue_script('Rich_Web_Video_Slider');
	wp_register_style('fontawesomeSl-css', plugins_url('/Style/richwebicons.css', __FILE__));
	wp_enqueue_style('fontawesomeSl-css');
}
register_activation_hook(__FILE__,'Rich_Web_Video_Slider_activate');
function Rich_Web_Video_Slider_activate()
{
	require_once('Rich-Web-Video-Slider-Install.php');
}
function Rich_Web_Video_Slider_Color() {

	wp_enqueue_script(
		'alpha-color-picker',
		plugins_url('/Scripts/alpha-color-picker.js', __FILE__),
		array( 'jquery', 'wp-color-picker' ), // You must include these here.
		null,
		true
	);
	wp_enqueue_style(
		'alpha-color-picker',
		plugins_url('/Style/alpha-color-picker.css', __FILE__),
		array( 'wp-color-picker' ) // You must include these here.
	);
}
add_action( 'admin_enqueue_scripts', 'Rich_Web_Video_Slider_Color' ); ?>