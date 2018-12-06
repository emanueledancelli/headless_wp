
<?php

/* 
adds custom sylesheet to login page
replace logo.png with your logo
*/

function custom_login() {
	remove_action('login_head', 'wp_shake_js', 12);
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login.css" />';
}
add_action('login_head', 'custom_login');

/* 
Overrides error message
*/

function error_override() {
	return 'Dati non corretti';
}
add_filter('login_errors', 'error_override');

/* 
Changes logo url
*/

function login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'login_logo_url' );
	
function login_logo_url_title() {
	return 'Alture.org';
}
add_filter( 'login_headertitle', 'login_logo_url_title' );