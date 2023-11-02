<?php
  /**
 * Plugin Name: CleanTalk Disabler
 * Description: Allow sub sites to disable CleanTalk based on Site ID
 * Author:      Freshy
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Basic security, prevents file from being loaded directly.
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

add_action( 'site_option_active_sitewide_plugins', 'freshy_modify_sitewide_plugins' );
function freshy_modify_sitewide_plugins( $value ) {
    global $current_blog;
	if ( ($current_blog->blog_id) == 1724 ) {
		unset($value['cleantalk-spam-protect/cleantalk.php']);
	}
    return $value;
}
