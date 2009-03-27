<?php
/*
Plugin Name: Hide Spam Count
Version: 1.0
Description: Hide the annoying spam count from your WordPress Dashboard
Author: scribu
Plugin URI: http://scribu.net/wordpress/hide-spam-count
Author URI: http://scribu.net/
*/

// Remove spam count
add_action('admin_print_styles-index.php', 'hide_spam_count');
function hide_spam_count() {
?>
<style type="text/css">
td.b-spam, td.b-spam + td {visibility:hidden !important}
</style>
<?php
}
