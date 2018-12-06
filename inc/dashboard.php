<?php

/* 
Hides menu based on user_email
*/

function remove_menus(){
    $current_user = wp_get_current_user();
    //insert chosen email below between ''
    if( '' !==  $current_user->user_email){
       remove_menu_page('edit.php'); 
       remove_menu_page('upload.php'); 
       remove_menu_page('link-manager.php'); 
       remove_menu_page('edit-comments.php');
       remove_menu_page('edit.php?post_type=page'); 
       remove_menu_page('plugins.php');
       remove_menu_page('themes.php');
       remove_menu_page('users.php'); 
       remove_menu_page('tools.php'); 
       remove_menu_page('options-general.php');
       remove_menu_page('profile.php');
   }
}
add_action( 'admin_menu', 'remove_menus' );

/* 
Removes admin top bar unneeded content
*/

function remove_admin_bar_content() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('new-content');
    $wp_admin_bar->remove_menu('edit-profile');
    $wp_admin_bar->remove_menu('user-info');
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_content' );

/* 
Removes help tabs 
*/

function remove_help_tabs($old_help, $screen_id, $screen){
    $screen->remove_help_tabs();
    return $old_help;
}
add_filter( 'contextual_help', 'remove_help_tabs', 999, 3 );

/* 
Removes permalinks, built with, wp version and screen options 
*/

function hide_permalink() {
    return '';
}
add_filter( 'get_sample_permalink_html', 'hide_permalink' );

add_filter( 'screen_options_show_screen', '__return_false');
add_filter( 'admin_footer_text', '__return_empty_string', 11 ); 
add_filter( 'update_footer', '__return_empty_string', 11 );
