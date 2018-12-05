<?php 

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'Eventi Alture', 'custom_dashboard_help');
wp_add_dashboard_widget('another_help_widget', 'Invia una notifica', 'onesignal_dashboard_help');
}
function onesignal_dashboard_help() {
echo '
		<p><a href="https://onesignal.com" target="_blank" rel="noopener noreferrer">Vai alle notifiche</a></p>
		<p><strong>id:</strong> altureonesignal@gmail.com  <strong>pwd:</strong> lenotifichedialture!</p>';
}

function custom_dashboard_help() {
echo '
		<p><a href="https://api.alture.org/wp-admin/edit.php?post_type=evento">Visualizza tutti gli eventi</a></p> 
		<p><a href="https://api.alture.org/wp-admin/post-new.php?post_type=evento">Aggiungi un evento</a></p>';
}


