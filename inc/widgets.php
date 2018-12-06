<?php 

/* 
Adds 2 custom widgets area in the dashboard
*/

function custom_dashboard_widgets() {
	global $wp_meta_boxes;
	// ('widget name', 'widgets name in dashboard', 'widget reference')
	wp_add_dashboard_widget('custom_help_widget_one', 'Widget One', 'custom_dashboard_widget_one');
	wp_add_dashboard_widget('custom_help_widget_two', 'Widget Two', 'custom_dashboard_widget_two');
}

function custom_dashboard_widget_one() {
	echo '
		<p><a href=""></a></p>
		<p><a href=""></a></p>';
}

function custom_dashboard_widget_two() {
	echo '
		<p><a href=""></a></p> 
		<p><a href=""></a></p>';
}

add_action('wp_dashboard_setup', 'custom_dashboard_widgets');

