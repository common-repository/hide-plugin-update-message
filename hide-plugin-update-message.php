<?php
/*
Plugin Name: Hide Plugin Update Message
Plugin URI: https://wordpress.org/plugins/hide-pluging-update-message/
Description: This plugin will hide pluging update message of wordpress from dashboard and plugin tab
Author: Asif Ali
Author URI: http://asifalimca.wordpress.com
Version: 1.0.0
License: GPLv2
*/

add_filter('pre_site_transient_update_plugins','__return_null','hidepluginsupdate');
function hidepluginsupdate() {
remove_action('load-update-core.php','wp_update_plugins');
}
?>
