
<?php

function custom_logo() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
	}
add_action('login_head', 'custom_logo');

function remove_shake() {
	remove_action('login_head', 'wp_shake_js', 12);
	}
add_action('login_head', 'remove_shake');

function error_override() {
	return 'Dati non corretti';
	}
add_filter('login_errors', 'error_override');

function check_remember_me() {
	add_filter( 'login_footer', 'rememberme_checked' );
}
add_action( 'init', 'check_remember_me' );

function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
	
function my_login_logo_url_title() {
	return 'Alture.org';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );