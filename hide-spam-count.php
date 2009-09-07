<?php
/*
Plugin Name: Hide Spam Count
Version: 1.0.1
Description: Hide the annoying spam count from your WordPress Dashboard
Author: scribu
Plugin URI: http://scribu.net/wordpress/hide-spam-count
Author URI: http://scribu.net/
*/

add_action('admin_print_styles-index.php', 'hide_spam_count');
function hide_spam_count() {
?>
<style type="text/css">
td.b-spam, td.b-spam + td {visibility:hidden !important}
</style>
<?php
}

add_action('plugins_loaded', 'hide_spam_stats');
function hide_spam_stats() {
	remove_action('rightnow_end', 'akismet_rightnow');
}

