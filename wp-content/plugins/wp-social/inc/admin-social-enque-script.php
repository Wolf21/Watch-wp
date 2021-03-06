<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_action( 'admin_enqueue_scripts', 'xs_load_js' );
function xs_load_js() {
    wp_register_script( 'xs_login_custom_js1', WSLU_LOGIN_PLUGIN_URL. 'assets/js/admin-login-custom.js', array('jquery'));
    wp_register_script( 'xs_login_custom_js2', WSLU_LOGIN_PLUGIN_URL. 'assets/js/admin-main.js');
    wp_enqueue_script( 'xs_login_custom_js1' );
    wp_enqueue_script( 'xs_login_custom_js2' );
}

add_action( 'admin_enqueue_scripts', 'xs_load_css' );

function xs_load_css(){
	wp_register_style( 'xs_login_custom_css1', WSLU_LOGIN_PLUGIN_URL. 'assets/css/admin-login-custom.css');
	wp_register_style( 'xs_login_custom_css2', WSLU_LOGIN_PLUGIN_URL. 'assets/css/admin-style.css');
	wp_register_style( 'xs_login_custom_css3', WSLU_LOGIN_PLUGIN_URL. 'assets/css/admin-responsive.css');
	wp_enqueue_style( 'xs_login_custom_css1' );
	wp_enqueue_style( 'xs_login_custom_css2' );
	wp_enqueue_style( 'xs_login_custom_css3' );
}