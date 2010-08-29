<?php
/*
Plugin Name: Hide Spam Count
Version: 1.0.1
Description: Hide the annoying spam count from your WordPress Dashboard
Author: scribu
Author URI: http://scribu.net/
Plugin URI: http://scribu.net/wordpress/hide-spam-count


Copyright (C) 2010 Cristi Burcă (scribu@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

function hide_spam_count() {
?>
<style type="text/css">
td.b-spam, td.b-spam + td {visibility:hidden !important}
</style>
<?php
}
add_action('admin_print_styles-index.php', 'hide_spam_count');

function hide_spam_stats() {
	remove_action('rightnow_end', 'akismet_rightnow');
}
add_action('plugins_loaded', 'hide_spam_stats');

